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
        Schema::create('tickets', function (Blueprint $table) {
            $table->string('ticketID')->primary();
            $table->string('ticketName');
            $table->string('flightID')->nullable();
            $table->string('flightName');
            $table->string('destination');
            $table->string('seat');
            $table->timestamps();
            
            $table->foreign('flightID')->references('flightID')->on('flights')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
