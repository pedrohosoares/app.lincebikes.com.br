<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeHasStation extends Model
{
    use HasFactory;

    public $fillable = [
        'bike_id',
        'station_id',
        'closekey',
        'status'
    ];
}
