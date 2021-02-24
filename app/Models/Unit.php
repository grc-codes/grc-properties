<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = [
        'beds',
        'baths',
        'rent_price',
        'apartment_num'
    ];

    public function floors() {
        return $this->belongsTo('App\Model\Floor');
    }

    public function tenants() {
        return $this->hasOne('App\Model\Tenant');
    }
}
