<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'car_id',
        'calm',
        'playful',
        'talkative',
        'kids_friendly',
        'dogs_friendly',
        'litterbox_trained',
        'vaccine',
        'indoor',
        'outdoor'
    ];
}
