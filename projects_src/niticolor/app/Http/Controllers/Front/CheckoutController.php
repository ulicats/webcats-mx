<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Barryvdh\DomPDF\Facade\Pdf;
use Documents;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Document;


use App\Mail\OrderMail;
use App\Mail\NewCustomer;

//use Stripe\Stripe;
//use Stripe\PaymentIntent;


class CheckoutController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('America/Mexico_City');
    }
    protected $stripe_secret_key = "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";
    //protected $stripe_secret_key = "sk_test_51NdHpBIsER7yah3hCB90vZSRs4ACHf1fIiACnb6woLCx1mUuHGmIVmhDCZw7PeaE2GScxLzLtRAkTe9nTNSfdRjX00cuqbj856";
    public function orderStore(Request $request)
    {
        
        try{
            $usuario = $request->user;
            if($request->userLogin){
                $user = User::where('id', $request->user['id'])->first();
            }else{
                //obtenemos el usuario en base a su correo
                if($userCheck = User::where('email', $request->user['email'])->first()){
                    $user = $userCheck;
                }else{
                    $user = $this->createCustomer($request->user);
                }
            }

            $productos = $request->products;
            $total = $request->order['total'];
            $subtotal = $request->order['subtotal'];

            //crear pedido
            $order = new Order();
            //direccion
            $order->street = $usuario['street'] ? $usuario['street'] : null;
            $order->num_ext = $usuario['num_ext'] ? $usuario['num_ext'] : null;
            $order->num_int = isset($usuario['num_int']) ? $usuario['num_int'] : null;
            $order->neighborhood = $usuario['neighborhood'] ? $usuario['neighborhood'] : null;
            $order->zipcode = $usuario['zipcode'] ? $usuario['zipcode'] : null;
            $order->state_id = $usuario['state_id'] ? $usuario['state_id'] : null;
            $order->town_id = $usuario['town_id'] ? $usuario['town_id'] : null;
            //totales y metodo de pago
            $order->subtotal = $subtotal;
            $order->total = $total;
            $order->paymentMethod = 'Deposito';
            $order->status = "pendiente";
            $order->shippingCost = isset($request->order['envio']) ? $request->order['envio'] : 0;
            //$order->shippingMethod = $request->order['shippingMethod'];
            $order->tax = 0;
            $order->user_id = $user->id;

           
            $order->save();
            
            //detalle de pedido
            foreach($productos as $producto){
                $detail = new OrderDetail();
                $detail->order_id = $order->id;
                $detail->product_id = $producto['id'];
                $detail->quantity = $producto['quantity'];
                $detail->sizes_id = $producto['sizes_id'];
                $detail->sizes_name = $producto['size_name'];
                $detail->price = $producto['price'];
                              
                $detail->save();

            }

            try{
                $pdf = $this->createPDF($order, $user);
                Mail::to($user->email)->send(new OrderMail($order, $user, $pdf));
                
            }catch (\Exception $e) {
                //report($e);
            }

            return ['type' => "success", 'order_id' => $order->id];

        }catch (\Exception $e) {
            return $e;
        }
    }

    public function createCustomer($formUser)
    {
        $usuario = ['email' => $formUser['email'], 'name' => $formUser['name'],'lastname' => $formUser['lastname'], 'password' => Str::random(10)];

        $user = new User();
        $user->email = $formUser['email'];
        $user->name = $formUser['name'];
        $user->lastname = $formUser['lastname'];
        $user->password = bcrypt($usuario['password']);
        $user->phone = $formUser['phone'];
        $user->access = 0;
        $user->save();

        $user->syncRoles(['cliente']);

       /* $address = new Address();
        $address->street = $formUser['street'] ? $formUser['street'] : null;
        $address->num_ext = $formUser['num_ext'] ? $formUser['num_ext'] : null;
        $address->num_int = isset($formUser['num_int']) ? $formUser['num_int'] : null;
        $address->neighborhood = $formUser['neighborhood'] ? $formUser['neighborhood'] : null;
        $address->zipcode = $formUser['zipcode'] ? $formUser['zipcode'] : null;
        $address->state_id = $formUser['state_id'] ? $formUser['state_id'] : null;
        $address->town_id = $formUser['town_id'] ? $formUser['town_id'] : null;
        $address->user_id = $user->id;
        $address->save();*/

        try{
            Mail::to($user->email)->queue(new NewCustomer($usuario));

        }catch (\Exception $e) {
            report($e);
        }

        return $user;
    }

    public function createPDF($order, $user)
    {
      ini_set('memory_limit', '-1');

      $pdf = PDF::loadView('plantillas.pedido',['order' => $order, 'user' => $user]);
      $content = $pdf->download()->getOriginalContent();

      // Crear el archivo y almacenarlo en el storage
      Storage::disk('public')->put('docs/pedido-'.$order->id.'.pdf',$content);

      //Crear el registro del documento y guardar el id en el pedido
      $doc = new Document(array(
        "path"=>'docs/pedido-'.$order->id.'.pdf',
        "disk"=>'public',
        "key"=>uniqid()
      ));

      $doc->save();

      $doc_url = Documents::getUrl($doc->id);
      $order->document_id = $doc->id;
      $order->save();

      return $content;
    }
}
