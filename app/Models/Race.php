<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    public $fillable = [
        'started_at',
        'ended_at',
        'user_id',
        'bike_id'
    ];
}
