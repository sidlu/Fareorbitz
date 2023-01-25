<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'pnr', 'first_name', 'last_name', 'email', 'phone', 'address', 'nationality',
        'travellers', 'flight_object', 'prices',
        'card_holder_name', 'card_number', 'card_expiry_month', 'card_expiry_year', 'card_cvv',
    ];

    protected $casts = [
        'travellers' => 'json',
        'flight_object' => 'json',
        'prices' => 'json',
        'status' => 'integer',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->pnr = strtoupper(unique_random('bookings', 'pnr'));
        });
    }

    public function getNameAttribute()
    {
        return Str::title($this->first_name) . ' ' . Str::title($this->last_name);
    }
}
