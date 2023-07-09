<?php

namespace App\Http\Controllers;

use App\Models\QueryRepositories\SeatRepository;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getReservationData(Request $request)
    {
        $roomId = $request->query('roomId');
        $roomName = $request->query('roomName');
        $seats = SeatRepository::getAllSeatsByRoom($roomId);
        return view('reservation')->with(['seats' => $seats, 'roomName' => $roomName]);
    }
}
