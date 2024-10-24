<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function index()
    {
        $passengers = Passenger::all();
        return view('passenger.index', compact('passengers'));
    }

    public function create()
    {
        $flights = Flight::all();
        return view('passenger.create', compact('flights'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'phoneNumber' => $request->phoneNumber,
            'passengerAmount' => $request->passengerAmount,
            'destination' => $request->destination,
            'seat' => $request->seat,
            'flightID' => $request->flightID,
            'flightName' => $request->flightName,
            'ticketID' => $request->ticketID,
            'ticketName' => $request->ticketName,
            'bookingID' => $request->bookingID,
            'bookingName' => $request->bookingName,
            'departureDate' => $request->departureDate,
            'departureTime' => $request->departureTime,
        ];

        Passenger::create($data);

        return redirect()->route('passengers')->with('success', 'Passenger added successfully!');
    }
}
