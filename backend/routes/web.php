<?php

use Illuminate\Support\Facades\Route;
use \App\Models\QueryRepositories\RoomRepository;
use \App\Models\QueryRepositories\SeatRepository;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home')->with('rooms', RoomRepository::getAllRooms());
});



Route::get('/reservation', function (Request $request) {
    $roomName = $request->query('roomName');
    $seats = SeatRepository::getAllSeatsByRoom($request);
    //dd($seats);
    return view('reservation')->with(['seats'=> $seats, 'roomName' => $roomName]);
});

Route::get('/email', function (Request $request) {
    $seatId = $request->query('seat_id');
    return view('email')->with(['seatId' => $seatId]);
});
