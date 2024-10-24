@extends('layout.app')

@section('judul')
Edit Booking
@endsection

@section('content')
<div class="container mt-3">
    <h2 class="fw-bold text-info">Edit Booking</h2>
    <form method="POST" action="{{ route('bookings.update', $booking->bookingID) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Booking ID</label>
            <input type="text" name="bookingID" class="form-control @error('bookingID') is-invalid @enderror" value="{{ $booking->bookingID }}" required>
            @error('bookingID')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Booking Name</label>
            <input type="text" name="bookingName" class="form-control @error('bookingName') is-invalid @enderror" value="{{ $booking->bookingName }}" required>
            @error('bookingName')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Departure Date</label>
            <input type="date" name="departureDate" class="form-control @error('departureDate') is-invalid @enderror" value="{{ $booking->departureDate }}" required>
            @error('departureDate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Departure Time</label>
            <input type="time" name="departureTime" class="form-control @error('departureTime') is-invalid @enderror" value="{{ $booking->departureTime }}" required>
            @error('departureTime')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary">Update Booking</button>
    </form>
</div>
@endsection
