<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::role('administrador')->orderBy('id','desc')->get();
        foreach ($users as $key => $value) {
            $value->access = ($value->access)?("Si"):("No");
        }
        return response()->json($users);
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
        $row->access = ($request->access) ? 1 : 0 ;
        $row->save();
        $row->syncRoles('administrador');

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
        $row->access = ($request->access) ? 1 : 0 ;
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
