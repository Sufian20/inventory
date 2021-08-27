<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected  $fillable = [
        'company_name',
        'company_address',
        'company_email',
        'company_phone',
        'company_logo',
        'company_mobile',
        'company_city',
        'company_country',
        'company_zipecode',


    ];
}
