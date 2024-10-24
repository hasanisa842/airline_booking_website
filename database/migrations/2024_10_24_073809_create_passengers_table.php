<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id('passengerID');
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->string('address');
            $table->string('phoneNumber');
            $table->integer('passengerAmount');
            $table->string('flightID')->nullable();
            $table->string('flightName');
            $table->string('ticketID')->nullable();
            $table->string('ticketName');
            $table->string('destination');
            $table->string('seat');
            $table->string('bookingID')->nullable();
            $table->string('bookingName');
            $table->dateTime('departureDate');
            $table->dateTime('departureTime');
            $table->timestamps();

            $table->foreign('flightID')->references('flightID')->on('flights')->onDelete('cascade');
            $table->foreign('ticketID')->references('ticketID')->on('tickets')->onDelete('cascade');
            $table->foreign('bookingID')->references('bookingID')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
