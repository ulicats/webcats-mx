<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subcategory;
use App\Models\Category;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $row = Subcategory::orderBy('id', 'desc')->get();
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
        $row = new Subcategory();
        $row->name = $request->name;
        $row->categories_id = $request->categories_id;
        $row->save();

        return $row;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $row
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Subcategory::find($id);
        return $row;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $row
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Subcategory::find($id);
        $row->name = $request->name;
        $row->categories_id = $request->categories_id;
        $row->save();

        return $row;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $row
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
        $temp = Subcategory::find($id);

        if ($temp->delete()) {
            return true;
        }
        else{
            return false;
        }
    }
    public function getSubcategories($id)
    {
        $data = [];
        $category = Category::find($id);

        if($category){
            $subcategories = Subcategory::where('categories_id', $category->id)->get();
            foreach($subcategories as $subcategory){
                $data[] = [
                    'id'   => $subcategory->id,
                    'name' => $subcategory->name
                ];
            }
        }

        return ['subcategories' => $data, 'category' => $category];
    }
}
