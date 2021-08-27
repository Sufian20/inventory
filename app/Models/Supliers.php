<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supliers extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'address',
        'type',
        'shop_name',
        'photo',
        'account_holder ',
        'account_no',
        'bank_name',
        'bank_branch',
        'city',
    ];

    function product(){

        return $this->hasMany('App\Models\Product', 'id');
    }

}
