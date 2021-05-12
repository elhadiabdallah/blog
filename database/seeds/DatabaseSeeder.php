<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(CitySeeder::class);
         $this->call(LineSeeder::class);
         $this->call(DestinationSeeder::class);
         $this->call(DaySeeder::class);
         $this->call(VoyageSeeder::class);
    }
}
