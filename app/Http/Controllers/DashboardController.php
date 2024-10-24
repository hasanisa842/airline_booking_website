<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Passenger;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $flights = Flight::with('bookings')
            ->when($search, function ($query) use ($search) {
                return $query->where('flightName', 'like', "%{$search}%");
            })
            ->get();

        return view('dashboard', compact('flights'));
    }
}
