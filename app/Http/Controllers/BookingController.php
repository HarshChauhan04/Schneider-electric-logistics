<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pickup_location' => 'required|string',
            'delivery_location' => 'required|string',
            'weight' => 'required|numeric',
            'cargo_type' => 'required|string',
            'pickup_date' => 'required|date',
            'priority' => 'required|numeric',
            'vehicle_class' => 'required|numeric',
        ]);

        $base = 800 + ($validated['weight'] / 1000) * 28;
        $price = round($base * $validated['vehicle_class'] * $validated['priority'] / 10) * 10;
        
        $validated['estimated_cost'] = $price;
        $validated['status'] = 'pending';

        Booking::create($validated);

        return redirect()->back()->with('success', 'Driver dispatched! Marcus is on his way.');
    }
}
