<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'name',
        'property_prefix',
        'image_url',
        'floors',
        'units_per_floor'
    ];

    public function floors() {
        return $this->hasMany('App\Model\Floor', 'property_id');
    }
}
