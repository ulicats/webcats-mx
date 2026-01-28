<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row = Category::orderBy('id', 'desc')->get();
        return $row; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Category();
        $row->name = $request->name;
        $row->save();

        return $row;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $row
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Category::find($id);
        return $row;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $row
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Category::find($id);
        $row->name = $request->name;
        $row->save();

        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $row
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->_delete($id)){
            return response()->json(['msg'=>'Registro con ID '.$id.' eliminado.']);
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
        $temp = Category::find($id);

        if ($temp->delete()) {
            return true;
        }
        else{
            return false;
        }
    }
}
