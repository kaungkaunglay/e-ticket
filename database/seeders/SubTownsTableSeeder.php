<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sub_towns;
use App\Models\City;

class SubTownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch or create cities
        $tokyo = City::firstOrCreate(['name' => '東京']);
        $osaka = City::firstOrCreate(['name' => '大阪']);
        $kyoto = City::firstOrCreate(['name' => '京都']);
        $hokkaido = City::firstOrCreate(['name' => '北海道']);
        $fukuoka = City::firstOrCreate(['name' => '福岡']);
        $sapporo = City::firstOrCreate(['name' => '札幌']);
        $nagoya = City::firstOrCreate(['name' => '名古屋']);
        $kobe = City::firstOrCreate(['name' => '神戸']);
        $sendai = City::firstOrCreate(['name' => '仙台']);
        $hiroshima = City::firstOrCreate(['name' => '広島']);
        $niigata = City::firstOrCreate(['name' => '新潟']);

        // Insert sub-towns for each city
        Sub_towns::create(['name' => '渋谷', 'city_id' => $tokyo->id]);
        Sub_towns::create(['name' => '新宿', 'city_id' => $tokyo->id]);
        Sub_towns::create(['name' => '池袋', 'city_id' => $tokyo->id]);

        Sub_towns::create(['name' => '梅田', 'city_id' => $osaka->id]);
        Sub_towns::create(['name' => '難波', 'city_id' => $osaka->id]);
        Sub_towns::create(['name' => '南', 'city_id' => $osaka->id]);

        Sub_towns::create(['name' => '祇園', 'city_id' => $kyoto->id]);
        Sub_towns::create(['name' => '嵐山', 'city_id' => $kyoto->id]);

        Sub_towns::create(['name' => '小樽', 'city_id' => $hokkaido->id]);
        Sub_towns::create(['name' => '旭川', 'city_id' => $hokkaido->id]);

        Sub_towns::create(['name' => '天神', 'city_id' => $fukuoka->id]);
        Sub_towns::create(['name' => '博多', 'city_id' => $fukuoka->id]);

        Sub_towns::create(['name' => 'すすきの', 'city_id' => $sapporo->id]);
        Sub_towns::create(['name' => '大通', 'city_id' => $sapporo->id]);

        Sub_towns::create(['name' => '大須', 'city_id' => $nagoya->id]);
        Sub_towns::create(['name' => '栄', 'city_id' => $nagoya->id]);

        Sub_towns::create(['name' => '元町', 'city_id' => $kobe->id]);
        Sub_towns::create(['name' => '中華街', 'city_id' => $kobe->id]);

        Sub_towns::create(['name' => '青葉', 'city_id' => $sendai->id]);
        Sub_towns::create(['name' => '宮城', 'city_id' => $sendai->id]);

        Sub_towns::create(['name' => '中区', 'city_id' => $hiroshima->id]);
        Sub_towns::create(['name' => '本通', 'city_id' => $hiroshima->id]);

        Sub_towns::create(['name' => '新潟市', 'city_id' => $niigata->id]);
    }
}