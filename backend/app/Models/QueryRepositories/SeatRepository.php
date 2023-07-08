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

    public static function getAllSeatsByRoom(Request $request)
    {
        $roomId = $request->query('roomId');
        $seats = DB::table('room_seats')
            ->where('room_id', $roomId)
            ->pluck('seat_id');

        $seatData = DB::table('seats')
            ->whereIn('seat_id', $seats)
            ->get();

        return $seatData;
    }

    public static function reserveSeat(Request $request)
        {
            $selectedSeatIds = $request->input('seat_ids');
            foreach ($selectedSeatIds as $seatId) {
                $updated = DB::table('seats')
                    ->where('seat_id', $seatId)
                    ->update(['reserved'=> true]);
                if($updated) {
                    return redirect("/email?seatId={$seatId}");
                } else {
                    return response()->json(['message' => 'Seat not found Err '. http_response_code()]);
                }
            }

        }
}
