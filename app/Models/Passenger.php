<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $table = 'passengers';
    protected $primaryKey = 'passengerID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'age',
        'email',
        'address',
        'phoneNumber',
        'passengerAmount',
        'ticketID',
        'ticketName',
        'destination',
        'seat',
        'flightID',
        'flightName',
        'bookingID',
        'bookingName',
        'departureDate',
        'departureTime',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flightID');
    }
}
