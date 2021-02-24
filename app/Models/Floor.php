<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = 'floors';

    protected $fillable = [
        'floor_num',
        'num_of_units'
    ];

    public function units() {
        return $this->hasMany('App\Model\Unit', 'floor_id');
    }

    public function properties() {
        return $this->belongsTo('App\Model\Property');
    }
}
