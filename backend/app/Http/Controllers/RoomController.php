<?php

namespace App\Http\Controllers;

use App\Models\QueryRepositories\RoomRepository;

class RoomController extends Controller
{
    public function getAllRooms()
    {
        $rooms = RoomRepository::getAllRooms();

        return response()->json($rooms);
    }
}
