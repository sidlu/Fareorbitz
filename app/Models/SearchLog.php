<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_code', 'to_code',
        'date_departure', 'date_arrival',
        'ip', 'browser_version',
        'adults', 'infant', 'chlids',
        'type', 'os',
    ];
}
