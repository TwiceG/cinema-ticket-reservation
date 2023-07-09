<?php

namespace App\Http\Controllers;

use App\Models\QueryRepositories\SeatRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use function Webmozart\Assert\Tests\StaticAnalysis\length;


class SeatController extends Controller
{
    public function getAllSeats()
    {
        $seats = SeatRepository::getAllSeats();
        return response()->json(['seats' => $seats]);
    }

    public function getSeatById($seatId)
    {
        $seat = SeatRepository::getSeatById($seatId);
        return response()->json(['seat' => $seat]);
    }

    public function getAllSeatsByRoom(Request $request)
    {
        $roomId = $request->query('roomId');
        $seats = SeatRepository::getAllSeatsByRoom($roomId);
        return response()->json(['seats' => $seats]);
    }



    public function reserveSeat(Request $request)
    {
        $selectedSeatIds = $request->input('seat_ids');
        foreach ($selectedSeatIds as $seatId) {
            $seat = SeatRepository::getSeatById($seatId);
            if (!$seat) {
                return response()->json(['message' => "Seat not found for ID: {$seatId}"], Response::HTTP_NOT_FOUND);
            }
            $updated = SeatRepository::reserveSeat($seatId);
            if (!$updated) {
                return response()->json(['message' => 'Failed to reserve seat'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        //!TODO
//        if(sizeof($selectedSeatIds) > 0) {
//            $queryParameters = ['seatId1' => $selectedSeatIds[0], 'seatId2' => $selectedSeatIds[1] ];
//        }else{
//            $queryParameters = ['seatId1' => $selectedSeatIds[0]];
//        }
        $queryParameters = ['seatId1' => $selectedSeatIds[0]];
        return Redirect::to('/email?' . http_build_query($queryParameters));
    }

    public function checkReservation(Request $request)
    {
        $seatId = $request->query('seatId');
        $updated = SeatRepository::checkReservation($seatId);
        if (!$updated) {
            response()->json(['message' => 'Reservation checked successfully']);;
        }
        return Redirect::to('/');


    }

    public function sendEmail(Request $request)
    {
        $seatId = $request->query('seatId');
        $email = $request->input('email');
        $seat = SeatRepository::getSeatById($seatId);
        if (!$seat) {
            return response()->json(['message' => "Seat not found for ID: {$seatId}"], Response::HTTP_NOT_FOUND);
        }
        $updated = SeatRepository::sendEmail($seatId, $email);
        if (!$updated) {
            return response()->json(['message' => 'Failed to send email'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json(['message' => 'Email sent successfully']);
    }
}
