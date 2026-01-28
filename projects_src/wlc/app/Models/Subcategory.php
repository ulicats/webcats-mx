<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id', 'id');
    }
}
