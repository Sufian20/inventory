<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    private $fillable = [
        'emp_id',
        'salary_month',
        'paid_amount',
    ];

}
