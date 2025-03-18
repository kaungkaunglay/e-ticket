<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->truncate(); // Clear existing data

        // Restaurant-specific CDN images from Unsplash
        $cdnImages = [
            "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1537047902294-62a40c20a6ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
            "https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80", 
        ];

        // City options
        $cities = ['Yangon', 'Mandalay', 'Bago', 'Pyay'];

        for ($i = 1; $i <= 30; $i++) { // Generate 30 posts
            
            $closedDays = array_rand(array_flip(range(1, 7)), rand(1, 3));
            $closedDays = is_array($closedDays) ? $closedDays : [$closedDays]; 

            $menuItems = array_rand(array_flip(range(1, 10)), rand(1, 3));
            $menuItems = is_array($menuItems) ? $menuItems : [$menuItems];

            Restaurant::create([
                'category_id' => rand(1, 5),
                'name' => 'Restaurant ' . $i,
                'logo' => $cdnImages[array_rand($cdnImages)], 
                'cover_image' => json_encode($cdnImages), 
                'description' => 'This is a sample description for Restaurant ' . $i,
                'multi_images' => json_encode($cdnImages), 
                'address' => '123 Sample Street',
                'city' => $cities[array_rand($cities)], // Random city
                'zip_code' => '12345',
                'latitude' => rand(100000, 999999) / 10000,
                'longitude' => rand(100000, 999999) / 10000,
                'phone_number' => '123-456-789' . $i,
                'email' => 'restaurant' . $i . '@example.com',
                'website_url' => 'https://restaurant' . $i . '.com',
                'operating_hours' => '9:00 AM - 10:00 PM',
                'closed_days' => json_encode($closedDays), 
                'price_range' => rand(1000, 5000),
                'wifi_availability' => rand(0, 1),
                'parking_availability' => rand(0, 1),
                'outdoor_seating' => rand(0, 1),
                'smoking' => rand(0, 1), // New field for smoking
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/restaurant' . $i,
                    'instagram' => 'https://instagram.com/restaurant' . $i,
                ]),
                'status' => 1,
                'available' => rand(0, 1),
                'user_id' => 3,
                'discount' => rand(0, 1) ? 500 : 0, 
                'menu' => json_encode($menuItems), 
                'google_map' => 'https://maps.google.com/?q=Sample+Location+' . $i,
            ]);
        }
    }
}
