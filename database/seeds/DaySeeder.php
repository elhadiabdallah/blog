<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'line_id' => 1,
            'name' => '0',
        ]);

        DB::table('days')->insert([
            'line_id' => 1,
            'name' => '1',
        ]);
    }
}
