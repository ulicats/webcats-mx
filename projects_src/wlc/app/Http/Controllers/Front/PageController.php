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
        'name' => 'El Nombre',
        'lastName' => 'El Apellido',
        'email' => 'El Email',
        'phone' => 'El Numero telefónico',
        'msg' => 'El Mensaje',
      );
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'lastName' => 'required',
        'email' => 'required|email:rfc,dns',
        'phone' => 'required|numeric|digits_between:8,10',
        'msg' => 'required',
      ]);
      $validator->setAttributeNames($niceNames);

      if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
      }

      Mail::send('emails.contact',(array)$data,function($m) use ($data){
        $m->from('noreply@webcats.mx', $name = 'White Lotus Capital');
        $m->to('negocios@wlcapital.com.mx');
  	    $m->subject('Formulario | White Lotus Capital');
  		});

      return response()->json(['response'=>'Gracias por enviarnos su mensaje, nos pondremos en contacto con usted lo antes posible.']);
    }
}
