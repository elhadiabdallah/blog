<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            'line_id' => 1,
            'city_id' => 1,
            'position' => 0,
        ]);

        DB::table('destinations')->insert([
            'line_id' => 1,
            'city_id' => 2,
            'position' => 1,
        ]);

        DB::table('destinations')->insert([
            'line_id' => 1,
            'city_id' => 3,
            'position' => 2,
        ]);

        DB::table('destinations')->insert([
            'line_id' => 1,
            'city_id' => 4,
            'position' => 3,
        ]);
    }
}
