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
       

        City::create(['name' => '東京']);
        City::create(['name' => '大阪']);
        City::create(['name' => '京都']);
        City::create(['name' => '北海道']);
        City::create(['name' => '福岡']);
        City::create(['name' => '愛知']);
        City::create(['name' => '兵庫']);
        City::create(['name' => '宮城']);
        City::create(['name' => '広島']);
        City::create(['name' => '新潟']);
    }
}
