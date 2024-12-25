<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'country_id',
        'car_type_id',
        'user_id',
        'city_id',
        'age',
        'price',
        'address',
        'phone',
        'description',
        'published_at'
    ];
}
