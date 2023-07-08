<?php

namespace App\Models\QueryRepositories;

use Illuminate\Support\Facades\DB;
class RoomRepository
{
    public static function getAllRooms()
    {
        return DB::table('rooms')->get();
    }


}
