<?php

namespace App\Http\Controllers\Front;

use Validator;
use App\Models\Extra;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function contact(Request $request){
      $data=$request->all();

      foreach ($data as $key => $value) {
        $data[$key] = strip_tags($data[$key]);
      }

      $data['phone'] = (empty($data['phone'])) ? '-' : $data['phone'];

      $niceNames = array(
        'contactType' => 'Servicio / Producto',
        'contactTypellamada' => 'Hora de llamada',
        'date' => 'Fecha de llamada',
        'name' => 'Nombre',
        'phone' => 'El Teléfono',
        'email' => 'El Email',

      );
      $validator = Validator::make($request->all(), [
        'contactType' => 'required',
        'contactTypel' => 'required',
        'date' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric|digits_between:8,10',

      ]);
      $validator->setAttributeNames($niceNames);

      if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
      }

      Mail::send('emails.contact',(array)$data,function($m) use ($data){
        $m->from('noreply@webcats.mx', $name = 'Webcats.mx');
        $m->to('contacto@webcats.mx');
        $m->to('ulises@webcats.mx');
  	    $m->subject('Niticolor | Formulario de Contacto');
  		});

      if( count(Mail::failures()) > 0 ) {
        return response()->json(['name'=> [0 => 'Error. Intente nuevamente'] ], 400);
      }

      return response()->json(['response'=>'Gracias por enviarnos su mensaje, nos pondremos en contacto con usted lo antes posible.']);
    }

    public function newsletter(Request $request)
    {

        $row = new Newsletter();
        $row->email = $request->email;
        $row->save();
        return response()->json(['response'=>'Correo registrado correctamente']);

    }
}
