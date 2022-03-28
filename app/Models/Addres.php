<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    use HasFactory;

    public $fillable = [
        'country',
        'state',
        'city',
        'district',
        'street_name',
        'number',
        'description',
        'postalcode'
    ];
}
