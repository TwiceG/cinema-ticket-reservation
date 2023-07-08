<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomSeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_seats')->insert([
            'room_id' => 1,
            'seat_id' => 1
        ]);

        DB::table('room_seats')->insert([
            'room_id' => 1,
            'seat_id' => 2
        ]);

        DB::table('room_seats')->insert([
            'room_id' => 2,
            'seat_id' => 3
        ]);

        DB::table('room_seats')->insert([
            'room_id' => 2,
            'seat_id' => 4
        ]);

    }
}
