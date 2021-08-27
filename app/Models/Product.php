<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'cat_id',
        'sup_id',
        'product_code',
        'product_garage',
        'product_route',
        'product_img',
        'buy_date',
        'expire_date',
        'buying_price',
        'selling_price',
    ];

    function category(){

        return $this->belongsTo('App\Models\Category', 'id');
       
     }

     function supplier(){

        return $this->belongsTo('App\Models\Supliers', 'id');
       
 
     }

     function cart(){

        return $this->hasMany('App\Models\Cart', 'product_id');
     }

     function orderditails(){

      return $this->hasMany('App\Models\Cart', 'product_id');
   }
    
}
