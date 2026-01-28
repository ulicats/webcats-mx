<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\ProductsSize;
use App\Models\Category;
use App\Models\Subcategory;
use Images;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $rows = Product::select('id','name','price','category_id','subcategory_id');

        if (sizeof($request->category) > 0) {
            $rows = $rows->whereIn('category_id',$request->category);
        }   

        if ($request->subcategory != null) {
            $rows = $rows->whereIn('subcategory_id',$request->subcategory);
        }
        if ($request->material != null) {
            $rows = $rows->whereIn('materials_id',$request->material);
        }
        if ($request->keywords != null) {
                $rows = $rows->where(function($query) use($request){
                    $query->where(function($subquery) use($request){
                        $subquery->where('name','like',"%{$request->keywords}%");
                        $subquery->orWhere('sku','like',"%{$request->keywords}%");
                        $subquery->orWhere('description','like',"%{$request->keywords}%");
                    });
                });   
        }
        if ($request->price != null) {
            if ($request->price == 1) {
                $rows = $rows->where('price','<=',199);
            }
            elseif ($request->price == 2) {
                $rows = $rows->where('price','>=',200)->where('price','<=',599);
            }
            elseif ($request->price == 3) {
                $rows = $rows->where('price','>=',600)->where('price','<=',999);
            }
            elseif ($request->price == 4) {
                $rows = $rows->where('price','>=',1000)->where('price','<=',1999);
            }
            elseif ($request->price == 5) {
                $rows = $rows->where('price','>=',2000)->where('price','<=',2999);
            }
            elseif ($request->price == 6) {
                $rows = $rows->where('price','<=',3000);
            }
        }

        if ($request->order != null) {
            if ($request->order == '1') {
                $rows = $rows->orderBy('name','ASC');
            }
            elseif ($request->order == '2') {
                $rows = $rows->orderBy('price','DESC');
            }
            elseif ($request->order == '3') {
                $rows = $rows->orderBy('price','ASC');
            }
           
        }
        $rows = $rows->paginate(12);

    
        foreach ($rows as $key => $value) {
            $value->price_org = null;
            $images = ProductsImage::where('products_id',$value->id)->first();
            if ($images) {
                $value->imageUrl = Images::getUrl($images->images_id);
            }
            $category = Category::find($value->category_id);
            if ($category) {
                if ($category->discount > 0) {
                    $value->price_org = $value->price;
                    $value->price = $value->price - ($value->price * ($category->discount / 100));
                }    
            }
            $subcategory = Subcategory::find($value->subcategory_id);
            if ($subcategory) {
                if ($subcategory->discount > 0) {
                    $value->price_org = $value->price;
                    $value->price = $value->price - ($value->price * ($subcategory->discount / 100));
                }
            }
            
            
        }
        return response()->json($rows);
    }

    public function show($id){

        $row = Product::with('category','subcategory','material')->find($id);
        $images = ProductsImage::where('products_id',$id)->get();
        $imagesdata = [];
        foreach ($images as $key => $value) {
            array_push($imagesdata,Images::getUrl($value->images_id));
        }
        $row->gallery = $imagesdata;

        
        $category = Category::find($row->category_id);
        if ($category) {
            if ($category->discount > 0) {
                $row->price_org = $row->price;
                $row->price = $row->price - ($row->price * ($category->discount / 100));
            }    
        }
        $subcategory = Subcategory::find($row->subcategory_id);
        if ($subcategory) {
            if ($subcategory->discount > 0) {
                $row->price_org = $row->price;
                $row->price = $row->price - ($value->price * ($subcategory->discount / 100));
            }
        }

        $row->sizes = ProductsSize::where('products_id',$id)->get();

        
        return response()->json($row);
    }


    public function related($id){
        $product = Product::find($id);
        $rows = Product::select('id','name','price','category_id','subcategory_id')->with('category')->where('category_id',$product->category_id)->where('id','!=',$id)->take(8)->get();
        foreach ($rows as $key => $value) {
            $images = ProductsImage::where('products_id',$value->id)->first();
            if ($images) {
                $value->imageUrl = Images::getUrl($images->images_id);
            }

            $value->price_org = null;
            $category = Category::find($value->category_id);
            if ($category) {
                if ($category->discount > 0) {
                    $value->price_org = $value->price;
                    $value->price = $value->price - ($value->price * ($category->discount / 100));
                }    
            }
            $subcategory = Subcategory::find($value->subcategory_id);
            if ($subcategory) {
                if ($subcategory->discount > 0) {
                    $value->price_org = $value->price;
                    $value->price = $value->price - ($value->price * ($subcategory->discount / 100));
                }
            }

        }
        return response()->json($rows);

    }
    

}
