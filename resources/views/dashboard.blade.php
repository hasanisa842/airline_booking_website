@extends('layout.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container">
    <h1>Flight Dashboard</h1>
    
    <!-- Search form -->
    <div class="col-md-3">
        <form method="GET" action="{{ route('dashboard') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search flights" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>

    <!-- Flights table -->
    <table class="table">
    <thead>
        <tr>
            <th>Flight ID</th>
            <th>Flight Name</th>
            <th>Destination</th>
            <th>Departure Date</th>
            <th>Departure Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($flights as $flight)
            @foreach ($flight->bookings as $booking)
                <tr>
                    <td>{{ $flight->flightID }}</td>
                    <td>{{ $flight->flightName }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>{{ $booking->departureDate }}</td>
                    <td>{{ $booking->departureTime }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
</div>
@endsection