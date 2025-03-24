<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TranslationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SettingsSeeder::class,
            TranslationSeeder::class,
            WeekSeeder::class,
            CategorySeeder::class,
            MenuSeeder::class,
            RestaurantSeeder::class,
            CitiesTableSeeder::class,
            SubTownsTableSeeder::class,
        ]);
    }
}
