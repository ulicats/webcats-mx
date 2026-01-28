<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

use Redirect;
use Validator;

class MailsController extends Controller
{

  public function contact(Request $request)
  {

    $data=$request->all();

    if( empty($data['name']) OR empty($data['email']) OR empty($data['msg']) ){
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
      $m->from('no-reply@webcats.mx', $name = 'webcats.mx');
      $m->to('contacto@webcats.mx');
	    $m->subject('Webcats.mx | Formulario de Contacto');
		});

    if( count(Mail::failures()) > 0 ) {
      return response()->json(['name'=> [0 => 'Error al enviar. Intente nuevamente'] ], 400);
    }

    return response()->json(['response'=>'Gracias por enviarnos su mensaje.']);
  }
}
