<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->insert([
            'code' => random_int(10, 100),
            'price' => 2500,
            'type' => '0',
        ]);

        DB::table('lines')->insert([
            'code' => random_int(10, 100),
            'price' => 3500,
            'type' => '1',
        ]);

        DB::table('lines')->insert([
            'code' => random_int(10, 100),
            'price' => 3000,
            'type' => '2',
        ]);
    }
}
