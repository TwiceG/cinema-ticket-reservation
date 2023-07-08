<?php

namespace App\Models\QueryRepositories;

use App\Models\Seat;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeatRepository
{
    public static function getAllSeats()
    {
        return DB::table('seats')->get();
    }

    public static function getAllSeatsByRoom($roomId)
    {
        return DB::table('room_seats')->where('room_id', $roomId)->get();
    }

    public static function reserveSeat(Request $request)
        {
            $seatId = $request->input('seatId');
            $updated = DB::table('seats')->where('seat_id', $seatId)->update(['reserved'=> true]);
            if($updated) {
                return response()->json(['message' => 'Seat reserved successfully']);
            } else {
                return response()->json(['message' => 'Seat not found Err '. http_response_code()]);
            }

        }
}
