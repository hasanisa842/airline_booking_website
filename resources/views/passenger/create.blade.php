@extends('layout.app')

@section('judul')
Input Passenger
@endsection

@section('content')
<div class="container mt-3">
    <h2 class="fw-bold text-info">Input Passenger & Contact Details</h2>
    <div class="row">
        <div class="col-md-7">
            <form method="POST" action="{{ route('passengers.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" placeholder="Nama Lengkap">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Usia</label>
                    <input type="number" name="age" class="form-control @error('age') is-invalid @enderror"
                        value="{{ old('age') }}" placeholder="Usia">
                    @error('age')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="address" rows="3" class="form-control @error('address') is-invalid @enderror"
                        placeholder="Alamat">{{ old('address') }}</textarea>
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" name="phoneNumber"
                        class="form-control @error('phoneNumber') is-invalid @enderror"
                        value="{{ old('phoneNumber') }}" placeholder="Nomor Telepon">
                    @error('phoneNumber')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Penumpang</label>
                    <input type="number" name="passengerAmount" class="form-control @error('passengerAmount') is-invalid @enderror"
                        value="{{ old('passengerAmount') }}" placeholder="Jumlah Penumpang">
                    @error('passengerAmount')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Flight ID</label>
                    <select name="flightID" class="form-control @error('flightID') is-invalid @enderror" required>
                        <option value="">Select a Flight</option>
                        @foreach ($flights as $flight)
                            <option value="{{ $flight->flightID }}">({{ $flight->flightID }})</option>
                        @endforeach
                    </select>
                    @error('flightID')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Flight Name</label>
                    <select name="flightName" class="form-control @error('flightName') is-invalName @enderror" required>
                        <option value="">Select a Flight</option>
                        @foreach ($flights as $flight)
                            <option value="{{ $flight->flightName }}">{{ $flight->flightID }} ({{ $flight->flightName }})</option>
                        @endforeach
                    </select>
                    @error('flightName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Destination</label>
                    <select name="destination" class="form-control @error('destination') is-invalid @enderror" required>
                        <option value="">Select a Flight</option>
                        @foreach ($flights as $flight)
                            <option value="{{ $flight->destination }}">{{ $flight->flightName }} ({{ $flight->destination }})</option>
                        @endforeach
                    </select>
                    @error('destination')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Ticket ID</label>
                    <input type="text" name="ticketID" class="form-control @error('ticketID') is-invalid @enderror" value="{{ old('ticketID') }}" placeholder="Ticket ID" required>
                    @error('ticketID')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Ticket Name</label>
                    <input type="text" name="ticketName" class="form-control @error('ticketName') is-invalid @enderror" value="{{ old('ticketName') }}" placeholder="Ticket Name" required>
                    @error('ticketName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Booking ID</label>
                    <input type="text" name="bookingID" class="form-control @error('bookingID') is-invalid @enderror" value="{{ old('bookingID') }}" placeholder="Booking ID" required>
                    @error('bookingID')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Booking Name</label>
                    <input type="text" name="bookingName" class="form-control @error('bookingName') is-invalid @enderror" value="{{ old('bookingName') }}" placeholder="Booking Name" required>
                    @error('bookingName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Kursi</label>
                    <input type="text" name="seat" class="form-control @error('seat') is-invalid @enderror"
                        value="{{ old('seat') }}" placeholder="Kursi">
                    @error('seat')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Date</label>
                    <input type="datetime-local" name="departureDate" class="form-control @error('departureDate') is-invalid @enderror"
                        value="{{ old('departureDate') }}" placeholder="Departure Date">
                    @error('departureDate')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure Time</label>
                    <input type="datetime-local" name="departureTime" class="form-control @error('departureTime') is-invalid @enderror"
                        value="{{ old('departureTime') }}" placeholder="Departure Time">
                    @error('departureTime')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary text-white fw-bold w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
