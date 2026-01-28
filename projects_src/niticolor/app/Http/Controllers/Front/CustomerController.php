<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductsImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use Illuminate\Support\Str;
use Images;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
       
        $user->password = bcrypt($request->password);
        $user->access = 1;
        $user->save();
        $user->syncRoles(['cliente']);
      

        return response()->json($user);
    }

    public function password(Request $request)
    {
         $id = Auth::user()->id;
        $user = User::find($id);
        $user->password = bcrypt($request->npassword);
        $user->save();
        return response()->json(['status'=>'success','data'=>$user,'msg'=>'Informacion actualizada correctamente']);

    }

    public function orders()
    {
        $userId = Auth::user()->id;
        $rows = Order::where('user_id',$userId)->get();
        foreach ($rows as $key => $value) {
            $value->date = $value->created_at->format('d-m-Y H:i:s');

            $products_id = OrderDetail::where('order_id', $value->id)->pluck('product_id');
            $products = Product::select('id','sku','name')->whereIn('id',$products_id)->get();
            foreach ($products as $keyp => $valuep) {
                $valuep->name = $valuep->name.' - '.$valuep->sku;
            }
            $value->products = $products;
        }
        return response()->json($rows);
    }

    public function orderDetail($id){
        $response = [];
        $user = User::find(Auth::user()->id);
        $order = Order::where('id', $id)->where('user_id', $user->id)->first(['id','total','subtotal','tax','paymentMethod','shippingCost','status','created_at']);

        if($order){
            $order->date = $order->created_at->format('d-m-Y H:i');
            $details = OrderDetail::where('order_id', $order->id)->get();

            foreach($details as $row){
                $product = Product::find($row->product_id);
                

                if($product){
                    $imageUrl = null;
                    $images = ProductsImage::where('products_id',$product->id)->first();
                    if ($images) {
                        $imageUrl = Images::getUrl($images->images_id);
                    }
                    $response[] = [
                        'sku'      => $product->sku,
                        'product'  => $product->name,
                        'price'    => $row->price,
                        'quantity' => $row->quantity,
                        'imageUrl' => $imageUrl,
                    ];
                }
            }


            return response()->json(['order' => $order, 'orderDetail' => $response]);
        }

        return response()->json(['No se encontro al pedido'], 400);
    }

    public function resetpassword(Request $request)
    {
        
        $user = User::where('email',$request->email)->first();
        if ($user) {
            $pass = Str::random(8);
            $user->password = bcrypt($pass);
            $user->save();
            $data = [
                'name'=>$user->name,
                'email'=>$user->email,
                'pass'=>$pass
            ];

            try{
                Mail::to($user->email)->send(new ResetPassword($data));
                
            }catch (\Exception $e) {
              // report($e);
            }
            
            return response()->json(['status'=>'success','msg'=>'Contraseña restablecida correctamante<br>Hemos enviado una contraseña temporal a tu correo para que puedas ingresar']);
        }
        else{
            return response()->json(['msg'=>'o se encontró ningún usuario con el correo electrónico ingresado'],500);
        }
       
    }

}
