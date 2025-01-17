<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $primaryKey = 'bookingID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['bookingID', 'bookingName', 'departureDate', 'departureTime'];
}
