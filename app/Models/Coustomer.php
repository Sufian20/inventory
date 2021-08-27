<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coustomer extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'address',
        'shop_name',
        'photo',
        'account_holder ',
        'account_no',
        'bank_name',
        'bank_branch',
        'city',
    ];


    function order(){

        return $this->hasMany('App\Models\Order', 'coustomer_id');
     }


}
