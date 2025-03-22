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
        City::create(['name' => '東京都']);
        City::create(['name' => '大阪府']);
        City::create(['name' => '京都府']);
        City::create(['name' => '北海道']);
        City::create(['name' => '福岡県']);
        City::create(['name' => '愛知県']);
        City::create(['name' => '兵庫県']);
        City::create(['name' => '宮城県']);
        City::create(['name' => '広島県']);
        City::create(['name' => '新潟県']);
    }
}
