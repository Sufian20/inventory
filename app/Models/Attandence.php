<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attandence extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'att_date',
        'att_year',
        'attendence',

    ];
    
    function employee(){

        return $this->belongsTo('App\Models\Employee', 'id');
       
 
     }

}
