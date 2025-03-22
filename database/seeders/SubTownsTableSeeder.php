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
        // Fetch cities by name
        $tokyo = City::where('name', 'Tokyo')->first();
        $osaka = City::where('name', 'Osaka')->first();
        $kyoto = City::where('name', 'Kyoto')->first();
        $hokkaido = City::where('name', 'Hokkaido')->first();
        $fukuoka = City::where('name', 'Fukuoka')->first();
        $sapporo = City::where('name', 'Sapporo')->first();
        $nagoya = City::where('name', 'Nagoya')->first();
        $kobe = City::where('name', 'Kobe')->first();
        $sendai = City::where('name', 'Sendai')->first();
        $hiroshima = City::where('name', 'Hiroshima')->first();
        $niigata = City::where('name', '新潟県')->first();
    
        // Insert sub-towns for each city
        Sub_towns::create(['name' => 'Shibuya', 'city_id' => $tokyo->id]);
        Sub_towns::create(['name' => 'Shinjuku', 'city_id' => $tokyo->id]);
        Sub_towns::create(['name' => 'Ikebukuro', 'city_id' => $tokyo->id]);

        Sub_towns::create(['name' => 'Umeda', 'city_id' => $osaka->id]);
        Sub_towns::create(['name' => 'Namba', 'city_id' => $osaka->id]);
        Sub_towns::create(['name' => 'Minami', 'city_id' => $osaka->id]);

        Sub_towns::create(['name' => 'Gion', 'city_id' => $kyoto->id]);
        Sub_towns::create(['name' => 'Arashiyama', 'city_id' => $kyoto->id]);

        Sub_towns::create(['name' => 'Otaru', 'city_id' => $hokkaido->id]);
        Sub_towns::create(['name' => 'Asahikawa', 'city_id' => $hokkaido->id]);

        Sub_towns::create(['name' => 'Tenjin', 'city_id' => $fukuoka->id]);
        Sub_towns::create(['name' => 'Hakata', 'city_id' => $fukuoka->id]);

        Sub_towns::create(['name' => 'Susukino', 'city_id' => $sapporo->id]);
        Sub_towns::create(['name' => 'Odori', 'city_id' => $sapporo->id]);

        Sub_towns::create(['name' => 'Osu', 'city_id' => $nagoya->id]);
        Sub_towns::create(['name' => 'Sakae', 'city_id' => $nagoya->id]);

        Sub_towns::create(['name' => 'Motomachi', 'city_id' => $kobe->id]);
        Sub_towns::create(['name' => 'Chinatown', 'city_id' => $kobe->id]);

        Sub_towns::create(['name' => 'Aoba', 'city_id' => $sendai->id]);
        Sub_towns::create(['name' => 'Miyagi', 'city_id' => $sendai->id]);

        Sub_towns::create(['name' => 'Naka', 'city_id' => $hiroshima->id]);
        Sub_towns::create(['name' => 'Hondori', 'city_id' => $hiroshima->id]);

        Sub_towns::create(['name' => '新潟市', 'city_id' => $niigata->id]);
    }
}
