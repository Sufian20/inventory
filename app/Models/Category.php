<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_name'
    ];

    function product(){

        return $this->hasMany('App\Models\Product', 'id');
    }

    function pos(){

        return $this->hasMany('App\Models\Pos', 'id');
    }
    
   
}
