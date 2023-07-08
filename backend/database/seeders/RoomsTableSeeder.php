<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'room_name'=> 'Teddy',
            'movie' => 'Avengers'
        ]);

        DB::table('rooms')->insert([
            'room_name'=> 'Bear',
            'movie' => 'Black forest'
        ]);

    }
}
