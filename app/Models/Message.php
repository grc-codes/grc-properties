<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'how_did_you_hear',
        'move_date',
        'budget',
        'rooms',
        'pets',
        'building',
        'tour',
        'comments'
    ];
}
