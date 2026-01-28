<?php

namespace App\Http\Controllers;

use App\Models\Opertator;
use Illuminate\Http\Request;
use Images;
use Documents;
class OpertatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Opertator::get();
        foreach ($rows as $key => $value) {
            $value->name_lastname_phone = $value->name.'<br>'.$value->phone.'<br>'.$value->email;
            $value->image = Images::getImg($value->images_id);


            $value->historic_btn = '<button class="btn btn-info">Historico</button>';
            
            $value->editbtn = '<button class="btn btn-info"><i class="fas fa-edit"></i></button>';
            $value->deletebtn = '<button class="btn btn-danger"><i class="fas fa-trash"></i></button>';

        }
        return $rows; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Opertator();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->phone = $request->phone;
        $row->rfc = $request->rfc;
        $row->curp = $request->curp;
        $row->address = $request->address;
        $row->relationship = $request->relationship;
        $row->relationship_name = $request->relationship_name;
        $row->relationship_phone = $request->relationship_phone;
        $row->comments = $request->comments;
        $row->users_id = $request->users_id;
        if($request->file('image')){
            $row->images_id = Images::save($request->file('image'));
        }
        if($request->file('license')){
            $row->documents_id_license = Documents::save($request->file('license'));
        }
        if($request->file('ine')){
            $row->documents_id_ine = Documents::save($request->file('ine'));
        }
        if($request->file('taxcertificate')){
            $row->documents_id_taxcertificate = Documents::save($request->file('taxcertificate'));
        }
        $row->save();

        return $row;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $row
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Opertator::find($id);
        $row->imageUrl = Images::getUrl($row->images_id);
        $row->documentUrlLicense = Documents::getUrl($row->documents_id_license);
        $row->documentUrlIne = Documents::getUrl($row->documents_id_ine);
        $row->documentUrlTaxcertificate = Documents::getUrl($row->documents_id_taxcertificate);
        return $row;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $row
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Opertator::find($id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->phone = $request->phone;
        $row->rfc = $request->rfc;
        $row->curp = $request->curp;
        $row->address = $request->address;
        $row->relationship = $request->relationship;
        $row->relationship_name = $request->relationship_name;
        $row->relationship_phone = $request->relationship_phone;
        $row->comments = $request->comments;
        $row->users_id = $request->users_id;
        if($request->file('image')){
            if($row->images_id != null){
                Images::delete($row->images_id);
            }
            $row->images_id = Images::save($request->file('image'));
        }
        if($request->file('license')){
            if($row->documents_id_license != null){
                Documents::delete($row->documents_id_license);
            }
            $row->documents_id_license = Documents::save($request->file('license'));
        }
        if($request->file('ine')){
            if($row->documents_id_ine != null){
                Documents::delete($row->documents_id_ine);
            }
            $row->documents_id_ine = Documents::save($request->file('ine'));
        }
        if($request->file('taxcertificate')){
            if($row->documents_id_taxcertificate != null){
                Documents::delete($row->documents_id_taxcertificate);
            }
            $row->documents_id_taxcertificate = Documents::save($request->file('taxcertificate'));
        }
        $row->save();

        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $row
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->_delete($id)){
            return response()->json(['msg'=>'registro con ID '.$id.' eliminado.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    public function destroyMultiple(Request $request)
    {
        foreach ($request->ids as $key => $value) {
            $status=$this->_delete($value);
            if(!$status)
                break;
        }

        if ($status) {
            return response()->json(['msg'=>'Registros eliminados.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    private function _delete($id)
    {
        $temp = Opertator::find($id);

        if($temp->documents_id_license != null){
            Documents::delete($temp->documents_id_license);
        }
        if($temp->documents_id_ine != null){
            Documents::delete($temp->documents_id_ine);
        }
        if($temp->documents_id_taxcertificate != null){
            Documents::delete($temp->documents_id_taxcertificate);
        }
        if($temp->images_id != null){
            Images::delete($temp->images_id);
        }

        if ($temp->delete()) {
            return true;
        }
        else{
            return false;
        }
    }
}
