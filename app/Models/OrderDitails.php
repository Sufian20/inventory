<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDitails extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'total_products',
        'sub_total',
        'total',

    ];

    function order(){

        return $this->belongsTo('App\Models\Order', 'id');
    }

    function product(){

        return $this->belongsTo('App\Models\Product', 'product_id');
    }

}
