<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = User::role('cliente')->orderBy('id','desc')->get();
        return response()->json($customer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new User();
        $row->name = $request->name;
        $row->lastname = $request->lastname;
        $row->email = $request->email;
        $row->phone = $request->phone;
        if(isset($request->password)){
            $row->password = bcrypt($request->password);
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
        $row= User::find($id);
        $row->device = $row->device ? true : false;
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
        $row = User::find($id);
        $row->name = $request->name;
        $row->lastname = $request->lastname;
        $row->email = $request->email;
        $row->phone = $request->phone;
        if(isset($request->password)){
            $row->password = bcrypt($request->password);
        }
        $row->save();
    

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
            return response()->json(['msg'=>'Registro con ID '.$id.' eliminado.']);
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
            return response()->json(['msg'=>'Registros eliminados.']);
        }
        else{
            return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
        }
    }

    private function _deleteUser($user_id)
    {
        $user = User::find($user_id);

        if ($user->delete()) {
            return true;
        }
        else{
            return false;
        }
    }
}
