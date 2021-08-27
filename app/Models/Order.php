<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'coustomer_id',
       // 'product_id',
        'order_date',
        'order_status',
        'total_products',
        'sub_total',
        'vat',
        'total',
        'payment_status',
        'pay',
        'due',

    ];

    function orderditails(){

        return $this->hasMany('App\Models\OrderDitails', 'id');
     }

     function coustomer(){

        return $this->belongsTo('App\Models\Coustomer', 'coustomer_id');
       
 
     }

}
