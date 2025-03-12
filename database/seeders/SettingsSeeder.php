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
            ],
            [
                'name' => 'slogan', 
                'value' => 'Reserve Your Table at the Finest Restaurants Today!'
            ], 
            [
                'name' => 'sub_slogan',
                'value' => 'Discover amzaing places at exclusive deals'
            ], 
            [
                'name' => 'phone_number', 
                'value' => '+123 456 7890'
            ], 
            [
                'name' => 'address', 
                'value' => '13/25 New Avenue, New Heaven, USA'
            ], 
            [
                'name' => 'facebook', 
                'value' => 'https://www.facebook.com'
            ], 
            [
                'name' => 'twitter', 
                'value' => 'https://www.twitter.com'
            ], 
            [
                'name' => 'instagram', 
                'value' => 'https://www.instagram.com'
            ], 
            [
                'name' => 'pinterest', 
                'value' => 'https://www.pinterest.com'
            ], 
            [
                'name' => 'linkedin', 
                'value' => 'https://www.linkedin.com'
            ], 
            [
                'name' => 'youtube', 
                'value' => 'https://www.youtube.com'
            ], 
            [
                'name' => 'working_hours', 
                'value' => 'Mon - Fri 9:00 AM - 9:00 PM'
            ], 
            [
                'name' => 'closed', 
                'value' => 'Sat - Sun'
            ]
        ];  
        foreach($settings as $setting){
            Settings::create($setting);
        }
    }
}
