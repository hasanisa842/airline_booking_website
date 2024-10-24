@extends('layout.app')

@section('title')
    Bookings
@endsection

@section('content')
<div class="container">
    <h1>All Bookings</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary fw-bold text-white mb-3">Save Booking</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Booking Name</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->bookingID }}</td>
                <td>{{ $booking->bookingName }}</td>
                <td>{{ $booking->departureDate }}</td>
                <td>{{ $booking->departureTime }}</td>
                <td>
                    <a href="{{ route('bookings.edit', $booking->bookingID) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('bookings.destroy', $booking->bookingID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection