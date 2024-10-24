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
        Schema::create('bookings', function (Blueprint $table) {
            $table->string('bookingID')->primary();
            $table->string('bookingName');
            $table->string('flightID')->nullable();
            $table->dateTime('departureDate');
            $table->dateTime('departureTime');
            $table->timestamps();

            $table->foreign('flightID')->references('flightID')->on('flights')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
