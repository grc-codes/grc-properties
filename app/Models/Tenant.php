<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenants';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'monthly_salary'
    ];

    public function units() {
        return $this->belongsTo('App\Model\Unit');
    }
}
