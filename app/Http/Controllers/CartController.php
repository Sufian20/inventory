<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CartController extends Controller
{
    

    protected $fillable = [
        'product_quntity'
    ];


    public function product(){

        
            return $this->belongsTo('App\Product', 'product_id');
        
    }


}
