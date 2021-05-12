<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'الجلفة',
        ]);
        DB::table('cities')->insert([
            'name' => 'اﻷغواط',
        ]);
        DB::table('cities')->insert([
            'name' => 'غرداية',
        ]);
        DB::table('cities')->insert([
            'name' => 'تمنراست',
        ]);
    }
}
