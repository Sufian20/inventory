<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    use HasFactory;

    function category(){

        return $this->belongsTo('App\Models\Category', 'category_id');
       
 
     }

}