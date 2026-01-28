<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{


    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategories_id', 'id');
    }


}
