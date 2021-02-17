<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'monthly_salary',
        'preferred_unit'
    ];
}
