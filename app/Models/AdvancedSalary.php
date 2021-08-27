<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class AdvancedSalary extends Model
{
    use HasFactory;

    protected $fillable =  [
        'emp_id',
        'month',
        'year',
        'advanced_salary',

    ];


    function employee(){

        return $this->belongsTo('App\Models\Employee', 'id');
       
 
     }

}
