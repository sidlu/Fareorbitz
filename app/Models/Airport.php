<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name',
        'city_code', 'city_name',
        'country_name', 'country_code',
        'continent_id', 'timezone',
        'lat', 'lon', 'city',
    ];
}
