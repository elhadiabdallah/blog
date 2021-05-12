<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voyages')->insert([
            'day_id' => 1,
            'destination_id' => 1,
            'time' => '08:00',
        ]);
        DB::table('voyages')->insert([
            'day_id' => 1,
            'destination_id' => 2,
            'time' => '10:00',
        ]);
        DB::table('voyages')->insert([
            'day_id' => 2,
            'destination_id' => 1,
            'time' => '12:00',
        ]);
        DB::table('voyages')->insert([
            'day_id' => 2,
            'destination_id' => 2,
            'time' => '14:00',
        ]);
    }
}
