<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'property_name',
        'property_abbreviation',
        'image_url',
        'floors',
        'units_per_floor'
    ];

    public function units() {
        return $this->hasMany('App\Model\Unit', 'property_id');
    }
}
