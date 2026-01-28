<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

use Redirect;

class MailsController extends Controller
{

  public function contacto(Request $request)
  {
  	$data=$request->all();
    $data['name'] = strip_tags($data['name']);
    $data['email'] = strip_tags($data['email']);
    $data['msg'] = strip_tags($data['msg']);

    if( empty($data['lastName']) OR empty($data['name']) OR empty($data['email']) OR empty($data['msg']) ){
      return response()->json(['response'=>'Faltan campos']);
    }

    foreach ($data as $key => $value) {
      $data[$key] = strip_tags($data[$key]);
    }

    $data['phone'] = (empty($data['phone'])) ? '-' : $data['phone'];

    $niceNames = array(
    'name' => 'Nombre',
    'email' => 'Email',
    'phone' => 'Teléfono',
    'msg' => 'Mensaje'
    );
  $validator = Validator::make($request->all(), [
    'email' => 'required|email',
    'name' => 'required',
    'phone' => 'nullable|numeric|digits_between:8,12',
    'msg' => 'required',
  ]);
  $validator->setAttributeNames($niceNames);

  if ($validator->fails()) {
    return response()->json($validator->errors(), 400);
  }

		Mail::send('emails.contact',(array)$data,function($m) use ($data){
      $m->from('no-reply@webcats.mx', $name = 'Nutrición');
	    $m->to('contacto@webcats.mx');
	    $m->subject('Nutrición | Formulario de contacto');
		});

    if( count(Mail::failures()) > 0 ) {
      return response()->json(['response'=>'¡Error! Intente nuevamente']);
    }
    else{
      return response()->json(['response'=>'Gracias por enviarnos su mensaje, nos contactaremos con usted a la brevedad posible.']);
    }

  }
}
