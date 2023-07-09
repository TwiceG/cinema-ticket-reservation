<?php

use App\Http\Controllers\SeatController;
use App\Models\QueryRepositories\SeatRepository;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/room-seats?roomId={roomId}&?roomName', [SeatRepository::class, 'getAllSeatsByRoom']);
//Route::post('/reserve', [SeatRepository::class, 'reserveSeat']);
//Route::post('send-email', [SeatRepository::class, 'sendEmail']);
//Route::post('/check-reservation/{seatId}', [SeatController::class, 'checkReservation']);

Route::get('/room-seats', [SeatController::class, 'getAllSeatsByRoom']);
Route::post('/reserve', [SeatController::class, 'reserveSeat']);
Route::post('/send-email', [SeatController::class, 'sendEmail']);
Route::get('/check-reservation', [SeatController::class, 'checkReservation']);


