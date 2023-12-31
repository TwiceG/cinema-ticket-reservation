<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QueryRepositories\RoomRepository;


class EmailController extends Controller
{
    public function showEmail(Request $request)
    {
        $seatId = $request->query('seatId');
        return view('email')->with(['seatId' => $seatId]);
    }
}

