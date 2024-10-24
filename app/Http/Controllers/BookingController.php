<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bookingID' => 'required|string',
            'bookingName' => 'required|string|max:255',
            'departureDate' => 'required|date',
            'departureTime' => 'required|date_format:H:i',
        ]);

        $data = [
            'bookingID' => $request->bookingID,
            'bookingName' => $request->bookingName,
            'departureDate' => $request->departureDate,
            'departureTime' => $request->departureDate . ' ' . $request->departureTime,
        ];

        Booking::create($data);
        return redirect()->route('bookings')->with('success', 'Booking created successfully!');
    }

    public function edit($bookingID)
    {
        $booking = Booking::findOrFail($bookingID);
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'bookingID' => 'required|string',
            'bookingName' => 'required|string|max:255',
            'departureDate' => 'required|date',
            'departureTime' => 'required|date_format:H:i',
        ]);

        $data = [
            'bookingID' => $request->bookingID,
            'bookingName' => $request->bookingName,
            'departureDate' => $request->departureDate,
            'departureTime' => $request->departureDate . ' ' . $request->departureTime,
        ];

        $booking->update($data);
        return redirect()->route('bookings')->with('success', 'Booking updated successfully!');
    }

    public function destroy($bookingID)
    {
        $booking = Booking::findOrFail($bookingID); // Find the booking by ID
        $booking->delete(); // Delete the booking

        return redirect()->route('bookings')->with('success', 'Booking deleted successfully!');
    }
}
