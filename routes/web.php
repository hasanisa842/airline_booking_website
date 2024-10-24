<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PassengerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/flights', [FlightController::class, 'index'])->name('flights');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/{bookingID}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{bookingID}', [BookingController::class, 'update'])->name('bookings.update');
Route::delete('/bookings/{bookingID}', [BookingController::class, 'destroy'])->name('bookings.destroy');


Route::get('/passengers', [PassengerController::class, 'index'])->name('passengers');
Route::get('/passengers/create', [PassengerController::class, 'create'])->name('passengers.create');
Route::post('/passengers', [PassengerController::class, 'store'])->name('passengers.store');
