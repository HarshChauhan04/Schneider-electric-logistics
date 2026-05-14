<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_location',
        'delivery_location',
        'weight',
        'cargo_type',
        'pickup_date',
        'priority',
        'vehicle_class',
        'estimated_cost',
        'status',
    ];
}
