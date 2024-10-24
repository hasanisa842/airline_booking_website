@extends('layout.app')

@section('content')
<div class="container">
    <h2>Passenger List</h2>
    <a href="{{ route('passengers.create') }}" class="btn btn-primary fw-bold text-white mb-3">Input Passenger</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Passenger Amount</th>
                <th>Destination</th>
                <th>Seat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($passengers as $passenger)
                <tr>
                    <td>{{ $passenger->name }}</td>
                    <td>{{ $passenger->age }}</td>
                    <td>{{ $passenger->email }}</td>
                    <td>{{ $passenger->address }}</td>
                    <td>{{ $passenger->phoneNumber }}</td>
                    <td>{{ $passenger->passengerAmount }}</td>
                    <td>{{ $passenger->destination }}</td>
                    <td>{{ $passenger->seat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
