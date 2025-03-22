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
        $cities = City::whereIn('name', [
            'Tokyo', 'Osaka', 'Kyoto', 'Hokkaido', 'Fukuoka',
            'Sapporo', 'Nagoya', 'Kobe', 'Sendai', 'Hiroshima'
        ])->get()->keyBy('name'); // Fetch cities and map by name

        $subTowns = [
            'Tokyo' => ['Shibuya', 'Shinjuku', 'Ikebukuro'],
            'Osaka' => ['Umeda', 'Namba', 'Minami'],
            'Kyoto' => ['Gion', 'Arashiyama'],
            'Hokkaido' => ['Otaru', 'Asahikawa'],
            'Fukuoka' => ['Tenjin', 'Hakata'],
            'Sapporo' => ['Susukino', 'Odori'],
            'Nagoya' => ['Osu', 'Sakae'],
            'Kobe' => ['Motomachi', 'Chinatown'],
            'Sendai' => ['Aoba', 'Miyagi'],
            'Hiroshima' => ['Naka', 'Hondori'],
        ];

        foreach ($subTowns as $cityName => $towns) {
            if (!isset($cities[$cityName])) {
                $this->command->error("City '{$cityName}' not found. Skipping...");
                continue;
            }

            foreach ($towns as $town) {
                Sub_towns::create([
                    'name' => $town,
                    'city_id' => $cities[$cityName]->id,
                ]);
            }
        }
    }
}
