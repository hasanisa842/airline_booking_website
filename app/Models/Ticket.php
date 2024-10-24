<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = 'ticketID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['ticketID', 'ticketName', 'flightID', 'flightName', 'destination', 'seat'];

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flightID');
    }
}
