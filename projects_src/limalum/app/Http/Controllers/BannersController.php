<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerFormRequest;
use App\Models\Banner;
use Images;

class BannersController extends Controller
{
    public function index()
    {
	    $banners = Banner::all();
	    foreach ($banners as $key => $value)
	    {
	        $value->imagen = Images::getImg($value->images_id);
          	$value->device = ($value->device)?("PC"):("Celular");
	        $value->status = ($value->status)?("Si"):("No");
	    }
	    return response()->json($banners);
    }

    

    public function store(BannerFormRequest $request)
    {
		$banner = new Banner();
		$banner->name = $request->name;
		$banner->device = $request->device ? 1 : 0 ;
		$banner->position = $request->position ? $request->position : 0;
		$banner->url = $request->url;
		$banner->status = ($request->status) ? 1 : 0 ;

		if($request->image)
			$banner->images_id = Images::save($request->image);

		$banner->save();
		return response()->json($banner);
    }

    public function show($id)
    {
		$banner = Banner::find($id);
		$banner->imageUrl = Images::getUrl($banner->images_id);
		$banner->device = $banner->device ? true : false;
		return response()->json($banner);
    }

    public function update(BannerFormRequest $request, $id)
    {
	    $banner = Banner::find($id);
	    $banner->name = $request->name;
		$banner->device = $request->device ? 1 : 0 ;
		$banner->position = $request->position ? $request->position : 0;
	
	    $banner->url = $request->url;
	    $banner->status = ($request->status) ? 1 : 0 ;

	    if($request->image)
	    {
            if ($banner->images_id != null)
            	Images::delete($banner->images_id);
        	$banner->images_id = Images::save($request->image);
    	}

      $banner->save();

      return response()->json($banner->id);
    }

    public function destroy($id)
	{
	   if($this->_deleteBanner($id)){
	       return response()->json(['msg'=>'Registro con ID '.$id.' eliminado.']);
	   }
	   else{
	       return response()->json(['msg'=>'Ocurrio un error al eliminar.'],500);
	   }
	}

	public function destroyMultiple(Request $request)
	{
		foreach ($request->ids as $key => $value) {
			$status=$this->_deleteBanner($value);
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

	private function _deleteBanner($banner_id)
	{
	    $banner = Banner::find($banner_id);
	    if($banner->images_id != null)
        	Images::delete($banner->images_id);
	    if($banner->delete())
	      	return true;
	   	return false;
	}

}
