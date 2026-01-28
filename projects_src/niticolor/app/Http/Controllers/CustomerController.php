<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\CustomersContact;
use App\Models\CustomersRate;
use App\Models\CustomersLocation;

use Illuminate\Http\Request;
use Images;
use Documents;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = User::select('id','business_name','name','lastname','email','phone','images_id')->role('cliente')->get();
        foreach ($rows as $key => $value) {
            $value->name_lastname_phone = $value->name.' '.$value->lastname.' '.$value->phone;
            $value->image = Images::getImg($value->images_id);
        }
        return response()->json($rows);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = User::where('email',$request->email)->first();
        if($check){
            return response()->json(['msg'=>'Ya existe un registro con el correo ingresado'],500);
        }
        $row = new User();
        $row->name = $request->name;
        $row->lastname = $request->lastname;
        $row->password = bcrypt($request->password);
        $row->phone = $request->phone;
        $row->email = $request->email;
        $row->business_name = $request->business_name;
        $row->rfc = $request->rfc;
        $row->comments = $request->comments;
        $row->payments_terms = $request->payments_terms;
        $row->credit_period = $request->credit_period;
        $row->authorized_credit = $request->authorized_credit;
        if($request->file('image')){
            $row->images_id = Images::save($request->file('image'));
        }
        if($request->file('taxcertificate')){
            $row->documents_id_taxcertificate = Documents::save($request->file('taxcertificate'));
        }
        if($request->file('contract')){
            $row->documents_id_contract = Documents::save($request->file('contract'));
        }
        $row->save();
        $row->syncRoles('cliente');
        
        return response()->json($row);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row= User::role('cliente')->where('id', $id)->first();
        $row->imageUrl = Images::getUrl($row->images_id);

        $row->documentUrlTaxcertificate = Documents::getUrl($row->documents_id_taxcertificate);
        $row->documentUrlContract = Documents::getUrl($row->documents_id_contract);
      

        $contacts = CustomersContact::where('users_id',$id)->get();
        foreach ($contacts as $key => $value) {
            $value->editbtn = '<button class="btn btn-info"><i class="fas fa-edit"></i></button>';
            $value->deletebtn = '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>';
        }
        $row->contacts = $contacts;

        $rates = CustomersRate::where('users_id',$id)->get();
        foreach ($rates as $key => $value) {
            $value->editbtn = '<button class="btn btn-info"><i class="fas fa-edit"></i></button>';
            $value->deletebtn = '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>';
        }
        $row->rates = $rates;

        $locations = CustomersLocation::where('users_id',$id)->get();
        foreach ($locations as $key => $value) {
            $value->editbtn = '<button class="btn btn-info"><i class="fas fa-edit"></i></button>';
            $value->deletebtn = '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>';

            $url = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyAYBEZUWUw3xAWW22zyxtbXCR--cSXoXJQ&q='.$value->address.'$center='.$value->lat.','.$value->lng;
            $value->mapaddres = '<iframe width="150" height="150" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="'.$url.'"';
           
        }
        $row->locations = $locations;

        return response()->json($row);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $check = User::where('id','!=',$id)->where('email',$request->email)->first();
        if($check){
            return response()->json(['msg'=>'Ya existe un registro con el correo ingresado'],500);
        }
        $row = User::find($id);
        $row->name = $request->name;
        $row->lastname = $request->lastname;
        $row->password = bcrypt($request->password);
        $row->phone = $request->phone;
        $row->email = $request->email;
        $row->business_name = $request->business_name;
        $row->rfc = $request->rfc;
        $row->comments = $request->comments;
        $row->payments_terms = $request->payments_terms;
        $row->credit_period = $request->credit_period;
        $row->authorized_credit = $request->authorized_credit;
        if($request->file('image')){
            if($row->images_id != null){
                Images::delete($row->images_id);
            }
            $row->images_id = Images::save($request->file('image'));
        }
        

        if($request->file('taxcertificate')){
            if($row->documents_id_taxcertificate != null){
                Documents::delete($row->documents_id_taxcertificate);
            }
            $row->documents_id_taxcertificate = Documents::save($request->file('taxcertificate'));
        }
        if($request->file('contract')){
            if($row->documents_id_contract != null){
                Documents::delete($row->documents_id_contract);
            }
            $row->documents_id_contract = Documents::save($request->file('contract'));
        }
        $row->save();
        $row->syncRoles('cliente');


        return response()->json($row->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->_deleteUser($id)){
            return response()->json(['msg'=>'Usuario con ID '.$id.' eliminado.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    public function destroyMultiple(Request $request)
    {
        foreach ($request->ids as $key => $value) {
            $status=$this->_deleteUser($value);
            if(!$status)
                break;
        }

        if ($status) {
            return response()->json(['msg'=>'Usuarios eliminados.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    private function _deleteUser($user_id)
    {
        $row = User::find($user_id);
        if($row->documents_id_taxcertificate != null){
            Documents::delete($row->documents_id_taxcertificate);
        }
        if($row->documents_id_contract != null){
            Documents::delete($row->documents_id_contract);
        }
        if($row->images_id != null){
            Images::delete($row->images_id);
        }
        if ($user->delete()) {
            return true;
        }
        else{
            return false;
        }
    }


    public function storeContact(Request $request) {
        if(isset($request->id) && $request->id != null){
            $row = CustomersContact::find($request->id);
            $row->name = $request->name;
            $row->phone = $request->phone;
            $row->email = $request->email;
            $row->position = $request->position;
            $row->comments = $request->comments;
            $row->save();
        }
        else{
            $row = new CustomersContact();
            $row->name = $request->name;
            $row->phone = $request->phone;
            $row->email = $request->email;
            $row->position = $request->position;
            $row->comments = $request->comments;
            $row->users_id = $request->users_id;
            $row->save();
        }
        return 'ok';
    }
    
    public function deleteContact($id){
        $row = CustomersContact::find($id);
        $row->delete();
        
        return response()->json(['msg'=>'Registro eliminado correctamente']);
    }


    public function storeRate(Request $request) {
        if(isset($request->id) && $request->id != null){
            $row = CustomersRate::find($request->id);
            $row->destination = $request->destination;
            $row->dates = $request->dates;
            $row->unit = $request->unit;
            $row->providers_id = $request->providers_id;
            $row->rate = $request->rate;
            $row->insurance = $request->insurance;
            $row->maneuvers = $request->maneuvers;
            $row->time_delay = $request->time_delay;
            $row->delays = $request->delays;
            
            $row->save();
        }
        else{
            $row = new CustomersRate();
            $row->destination = $request->destination;
            $row->dates = $request->dates;
            $row->unit = $request->unit;
            $row->providers_id = $request->providers_id;
            $row->rate = $request->rate;
            $row->insurance = $request->insurance;
            $row->maneuvers = $request->maneuvers;
            $row->time_delay = $request->time_delay;
            $row->delays = $request->delays;
            $row->users_id = $request->users_id;
            $row->save();
        }
        return 'ok';
    }
    
    public function deleteRate($id){
        $row = CustomersRate::find($id);
        $row->delete();
        
        return response()->json(['msg'=>'Registro eliminado correctamente']);
    }


    public function storeLocation(Request $request) {
        if(isset($request->id) && $request->id != null){
            $row = CustomersLocation::find($request->id);
            $row->name = $request->name;
            $row->address = $request->address;
            $row->lat = $request->lat;
            $row->lng = $request->lng;
           
            $row->save();
        }
        else{
            $row = new CustomersLocation();
            $row->name = $request->name;
            $row->address = $request->address;
            $row->lat = $request->lat;
            $row->lng = $request->lng;
            $row->users_id = $request->users_id;
            $row->save();
        }
        return 'ok';
    }
    
    public function deleteLocation($id){
        $row = CustomersLocation::find($id);
        $row->delete();
        
        return response()->json(['msg'=>'Registro eliminado correctamente']);
    }
}
