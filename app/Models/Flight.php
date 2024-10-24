<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flights';  
    protected $primaryKey = 'flightID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['flightID', 'flightName', 'seat', 'destination'];
    protected $dates = ['departureDate', 'departureTime'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'flightID');
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'flightID');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'flightID', 'flightID');
    }
}
