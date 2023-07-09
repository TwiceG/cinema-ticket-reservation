<?php

namespace App\Models\QueryRepositories;

use Illuminate\Support\Facades\DB;

class SeatRepository
{
    public static function getAllSeats()
    {
        return DB::table('seats')->get();
    }

    public static function getSeatById($seatId)
    {
        return DB::table('seats')
            ->where('seat_id', $seatId)
            ->first();
    }

    public static function getAllSeatsByRoom($roomId)
    {
        $seats = DB::table('room_seats')
            ->where('room_id', $roomId)
            ->pluck('seat_id');

        return DB::table('seats')
            ->whereIn('seat_id', $seats)
            ->get();
    }

    public static function reserveSeat($seatId)
    {
        return DB::table('seats')
            ->where('seat_id', $seatId)
            ->update(['reserved' => true]);
    }

    public static function checkReservation($seatId)
    {
        $seat = self::getSeatById($seatId);
        if (!$seat->email) {
            return DB::table('seats')
                ->where('seat_id', $seatId)
                ->update(['reserved' => false]);
        }
        return false;
    }

    public static function sendEmail($seatId, $email)
    {
        return DB::table('seats')
            ->where('seat_id', $seatId)
            ->update(['email' => $email]);
    }
}
