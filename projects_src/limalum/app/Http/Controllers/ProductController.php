<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Images;
// use App\Imports\ProductsImport;
// use Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Product::with('category', 'subcategory')->get();
        foreach ($rows as $key => $value) {
           $value->price = '$ '.number_format($value->price,2);
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
        $product = new Product();
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->categories_id = $request->categories_id;
        $product->subcategories_id = $request->subcategories_id; 
        if($request->file('image')){
            $product->images_id = Images::save($request->file('image'));
        }
        $product->save();

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->imageUrl = Images::getUrl($product->images_id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->categories_id = $request->categories_id;
        $product->subcategories_id = $request->subcategories_id;   
        if($request->file('image')){
            if($product->images_id){
                Images::delete($product->images_id);
            }
            $product->images_id = Images::save($request->file('image'));
        }
        $product->save();

        return response()->json($product);
    }

    public function import(Request $request)
    {
        try{
            Excel::import(new ProductsImport, request()->file('file'));
            return response()->json(['msg'=>'La importación ha finalizado exitosamente!.']);   

        }catch (\Exception $e) {
            return $e;
            return response()->json(['msg'=>'Ocurrio un error', 'error' => $e],500);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
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
        $temp = Product::find($id);
        if($temp->images_id){
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
