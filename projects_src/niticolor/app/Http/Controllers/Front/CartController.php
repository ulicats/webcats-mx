<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ProductsSize;

use Images;

class CartController extends Controller
{
    public function index(Request $request)
    {
        
        foreach($request->products as $row){
            $product = Product::find($row['id']);
            

            if($product){
                
                $cantidad = $row['quantity'];

                if($cantidad > 0 && $product->stock >= $cantidad ){
                    $imageUrl = null;
                    $images = ProductsImage::where('products_id',$row['id'])->first();
                    if ($images) {
                        $imageUrl = Images::getUrl($images->images_id);
                    }
                    
                    $product->price_org = null;
                    $category = Category::find($product->category_id);
                    if ($category) {
                        if ($category->discount > 0) {
                            $product->price_org = $product->price;
                            $product->price = $product->price - ($product->price * ($category->discount / 100));
                        }    
                    }
                    $subcategory = Subcategory::find($product->subcategory_id);
                    if ($subcategory) {
                        if ($subcategory->discount > 0) {
                            $product->price_org = $product->price;
                            $product->price = $product->price - ($product->price * ($subcategory->discount / 100));
                        }
                    }
                    $size_name = null;
                    $size = ProductsSize::find($row['sizes_id']);
                    if ($size) {
                        $size_name = $size->name;

                    }
                    $cart[] = [
                        'id'       => $product->id,
                        'sku'      => $product->sku,
                       
                        'name'     => $product->name,
                       
                        'price'    => $product->price,
                        'price_org'    => $product->price_org,
                        'quantity' => $cantidad,
                        'stock'    => $product->stock,
                        'imageUrl' => $imageUrl,
                        'sizes_id' => $row['sizes_id'],
                        'size_name' => $size_name,
                    ];
                }

            }
        }
        $envio = 100; //Extra::where('key', 'ENVIO')->select('value')->first();
       

        

        return response()->json(['cart' => $cart, 'envio' => $envio]);
    }
    public function indexFavorites(Request $request)
    {
        
        foreach($request->products as $row){
            $product = Product::find($row['id']);
            if($product){
                
                    $imageUrl = null;
                    $images = ProductsImage::where('products_id',$row['id'])->first();
                    if ($images) {
                        $imageUrl = Images::getUrl($images->images_id);
                    }

                    $product->price_org = null;
                    $category = Category::find($product->category_id);
                    if ($category) {
                        if ($category->discount > 0) {
                            $product->price_org = $product->price;
                            $product->price = $product->price - ($product->price * ($category->discount / 100));
                        }    
                    }
                    $subcategory = Subcategory::find($product->subcategory_id);
                    if ($subcategory) {
                        if ($subcategory->discount > 0) {
                            $product->price_org = $product->price;
                            $product->price = $product->price - ($product->price * ($subcategory->discount / 100));
                        }
                    }

                    $cart[] = [
                        'id'       => $product->id,
                        'sku'      => $product->sku,
                        'name'     => $product->name,
                        'price'    => $product->price,
                        'price_org'    => $product->price_org,
                        'imageUrl' => $imageUrl,
                    ];
                
            }
        }

        return response()->json($cart);
    }
    
}
