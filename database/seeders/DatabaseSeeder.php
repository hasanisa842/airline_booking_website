<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;
use App\Models\Booking;
use App\Models\Ticket;
use App\Models\Passenger;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Flight::create([
            'flightID' => 'FL001',
            'flightName' => 'Garuda Indonesia',
            'destination' => 'Jakarta',
            'seat' => 'Economy'
        ]);

        Flight::create([
            'flightID' => 'FL002',
            'flightName' => 'Lion Air',
            'destination' => 'Bali',
            'seat' => 'Business'
        ]);

        Booking::create([
            'bookingID' => 'BK001',
            'bookingName' => 'John Doe',
            'flightID' => 'FL001',
            'departureDate' => now(),
            'departureTime' => now()->addHours(3),
        ]);

        Booking::create([
            'bookingID' => 'BK002',
            'bookingName' => 'Jane Smith',
            'flightID' => 'FL002',
            'departureDate' => now(),
            'departureTime' => now()->addHours(5),
        ]);

        Ticket::create([
            'ticketID' => 'TK001',
            'ticketName' => 'Economy Class Ticket',
            'flightID' => 'FL001',
            'flightName' => 'Garuda Indonesia',
            'destination' => 'Jakarta',
            'seat' => '12A',
        ]);

        Passenger::create([
            'name' => 'Alice',
            'age' => 30,
            'email' => 'alice@example.com',
            'address' => '123 Main St, Jakarta',
            'phoneNumber' => '08123456789',
            'passengerAmount' => 1,
            'flightID' => 'FL001',
            'flightName' => 'Garuda Indonesia',
            'ticketID' => 'TK001',
            'ticketName' => 'Economy Class Ticket',
            'destination' => 'Jakarta',
            'seat' => '12A',
            'bookingID' => 'BK001',
            'bookingName' => 'John Doe',
            'departureDate' => now(),
            'departureTime' => now()->addHours(3),
        ]);
    }
}
