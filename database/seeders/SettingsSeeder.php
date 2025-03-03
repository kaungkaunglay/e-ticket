<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings; 
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'name' => 'email',
                'value' => 'admin@r-buzz.net'
            ] 
        ];  
        foreach($settings as $setting){
            Settings::factory()->create($setting); 
        }
    }
}
