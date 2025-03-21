<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Japanese cities
        City::create(['name' => 'Tokyo']);
        City::create(['name' => 'Osaka']);
        City::create(['name' => 'Kyoto']);
        City::create(['name' => 'Hokkaido']);
        City::create(['name' => 'Fukuoka']);
        City::create(['name' => 'Sapporo']);
        City::create(['name' => 'Nagoya']);
        City::create(['name' => 'Kobe']);
        City::create(['name' => 'Sendai']);
        City::create(['name' => 'Hiroshima']);
    }
}
