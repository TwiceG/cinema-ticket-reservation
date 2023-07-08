<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            'seat_number'=> 1
        ]);

        DB::table('seats')->insert([
            'seat_number'=> 2
        ]);
        DB::table('seats')->insert([
            'seat_number'=> 1
        ]);
        DB::table('seats')->insert([
            'seat_number'=> 2
        ]);

    }
}
