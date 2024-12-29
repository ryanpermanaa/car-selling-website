<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeature extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'car_id';

    protected $fillable = [
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

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
