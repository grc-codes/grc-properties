<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $fillable = [
        'property_id',
        'beds',
        'baths',
        'rent_price',
        'unit_prefix',
        'tenant_id'
    ];

    public function properties() {
        return $this->belongsTo('App\Model\Property');
    }

    public function tenants() {
        return $this->hasOne('App\Model\Tenant');
    }
}
