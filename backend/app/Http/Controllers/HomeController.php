<?php

namespace App\Http\Controllers;


use App\Models\QueryRepositories\RoomRepository;

class HomeController extends Controller
{
    public function getAllRooms()
    {
        $rooms = RoomRepository::getAllRooms();
        return view('home')->with('rooms', $rooms);
    }
}
