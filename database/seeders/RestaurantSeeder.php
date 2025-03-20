<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Import Carbon for timestamps

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->truncate(); 

        $restaurants = [
            [
                'category_id' => 2,
                'name' => '新潟現代割烹haswgawa',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_bc832a53b9b2ec7d23a67f49c7fc222e.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/640x640_rect_2952d2a7deaf6f79e703a903b745c6bf.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/188450/150x150_square_0bada0babdaff22df559076e851061d6.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_c4342a0c7db0e0080c17536c030a82b2.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_0b7cd7da3958eb288248412e5688b6e1.jpg'
                ]),
                'description' => '古民家を改装した店内は、落ち着いた雰囲気。カウンター席だったので、調理風景がよく見えます。',
                'address' => 'Japan',
                'zip_code' => '12345',
                'city' => 'Japan',
                'phone_number' => '123-456-789',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '9:00 AM - 10:00 PM',
                'closed_days' => json_encode([1, 3]),
                'wifi_availability' => 0,
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/restaurant',
                    'instagram' => 'https://instagram.com/restaurant'
                ]),
                'status' => 1,
                'available' => 1,
                'user_id' => 3,
                'discount' => 0,
                'menu' => json_encode([8]),
                'google_map' => 'https://maps.google.com/?q=Sample+Location',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(), 
            ],

            [
                'category_id' => 2,
                'name' => '新潟現代割烹haswgawa',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_bc832a53b9b2ec7d23a67f49c7fc222e.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/640x640_rect_2952d2a7deaf6f79e703a903b745c6bf.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/188450/150x150_square_0bada0babdaff22df559076e851061d6.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_c4342a0c7db0e0080c17536c030a82b2.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/267507/150x150_square_0b7cd7da3958eb288248412e5688b6e1.jpg'
                ]),
                'description' => '古民家を改装した店内は、落ち着いた雰囲気。カウンター席だったので、調理風景がよく見えます。',
                'address' => 'Japan',
                'zip_code' => '12345',
                'city' => 'Japan',
                'phone_number' => '123-456-789',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '9:00 AM - 10:00 PM',
                'closed_days' => json_encode([1, 3]),
                'wifi_availability' => 0,
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/restaurant',
                    'instagram' => 'https://instagram.com/restaurant'
                ]),
                'status' => 1,
                'available' => 1,
                'user_id' => 3,
                'discount' => 0,
                'menu' => json_encode([8]),
                'google_map' => 'https://maps.google.com/?q=Sample+Location',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('restaurants')->insert($restaurants);
    }
}
