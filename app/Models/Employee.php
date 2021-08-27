<?php

namespace App\Models;

use App\Models\AdvancedSalary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'experience',
        'photo',
        'nid_no ',
        'salary',
        'vacation',
        'city',
    ];

    function salary(){

        return $this->hasMany('App\Salary', 'id');
    }

    
    function advancedsalary(){

        return $this->hasMany('App\Models\AdvancedSalary', 'id');
    }

    
    function attandence(){

        return $this->hasMany('App\Models\Attandence', 'id');
    }

        
}
