@extends('layout.app')

@section('judul')
Create Booking
@endsection

@section('content')
<div class="container mt-3">
    <h2 class="fw-bold text-info">Create New Booking</h2>
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Booking ID</label>
            <input type="text" name="bookingID" class="form-control @error('bookingID') is-invalid @enderror" required>
            @error('bookingID')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Booking Name</label>
            <input type="text" name="bookingName" class="form-control @error('bookingName') is-invalid @enderror" required>
            @error('bookingName')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Departure Date</label>
            <input type="date" name="departureDate" class="form-control @error('departureDate') is-invalid @enderror" required>
            @error('departureDate')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Departure Time</label>
            <input type="time" name="departureTime" class="form-control @error('departureTime') is-invalid @enderror" required>
            @error('departureTime')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-primary">Create Booking</button>
    </form>
</div>
@endsection
