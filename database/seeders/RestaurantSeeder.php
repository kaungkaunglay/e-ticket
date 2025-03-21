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

        for ($i = 1; $i <= 10; $i++) {
           
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
                'city' => 'Sample City',
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
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/restaurant' . $i,
                    'instagram' => 'https://instagram.com/restaurant' . $i,
                ]),
                'status' => 1,
                'available' => rand(0, 1),
                'user_id' => 3,
                'discount' => 0,
                'menu' => json_encode([8]),
                'google_map' => 'https://maps.google.com/?q=Sample+Location',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '銀座 芝濱',
                'logo' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/290871/6e873f4cd8c4613af70368daf6839a72.jpg?token=0d089cc&api=v2',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206837/9896ecd4f02a02dde9a8fa874904e36a.jpg?token=b251c33&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206837/4f63c47abbbe56444757362c15c98e18.jpg?token=9bba070&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206830/1620d425d0e143bd897fd321006d9901.jpg?token=2e6da4d&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206831/6b8e1e9b6d2cf5403453a91fa65a3484.jpg?token=48ecdc6&api=v2'
                ]),
                'description' => '東京メトロ銀座駅と東銀座駅より徒歩5分ほどの場所にある隠れ家的な寿司割烹「銀座 芝濱」。季節を味わいを大切に、旬な食材をご提供させていただきます。',
                'address' => '8 Chome-13-1 Ginza, Chuo City, Tokyo 104-0061, Japan',
                'zip_code' => '104-0061',
                'city' => 'Tokyo',
                'phone_number' => '335438889',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '17:00 AM - 22:00 PM',
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
                'google_map' => 'https://maps.app.goo.gl/9myoHZbTbAULh6z2A',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => 'すし処美旨',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981061.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981057.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981018.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981030.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981030.jpg'
                ]),
                'description' => '来宮駅から徒歩約10分、テレビでも紹介されている有名なお寿司です。海に囲まれた熱海ならではの素材を使用した寿司は絶品です。',
                'address' => '22-22 Showacho, Atami, Shizuoka 413-0022, Japan',
                'zip_code' => '413-0022',
                'city' => 'Shizuoka',
                'phone_number' => '8051619977',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '12:00 - 14:00',
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
                'google_map' => 'https://maps.app.goo.gl/MWMrBjpeQgDNpi7EA',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => 'つげ家',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981061.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038650.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/59387/150x150_square_59387765.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038666.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/59387/150x150_square_59387763.jpg'
                ]),
                'description' => '旬の天然素材にこだわり、和食料理人が心を込めて「うまい」を提供しております。 人気の和牛石焼、地魚刺身盛り合わせ、銀たら西京焼き、金目鯛煮付け、等豊富にとりそろえております。',
                'address' => '22-22 Showacho, Atami, Shizuoka 413-0022, Japan',
                'zip_code' => '413-0022',
                'city' => 'Shizuoka',
                'phone_number' => '8051619977',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '12:00 - 14:00',
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
                'google_map' => 'https://maps.app.goo.gl/MWMrBjpeQgDNpi7EA',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '喫茶いとう',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/175400/150x150_square_7adff7544a85537db0f60e0fb0515d27.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/175368/150x150_square_39da1c9b38dad27771479b5ebbf91400.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/175368/150x150_square_970a7bb31e46c24913aafb3234ad8d52.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/175368/150x150_square_1954308b5f6a31d0eb9fe46bc22d53d2.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/175400/150x150_square_2e00b7308a647e890773225a639ba14a.jpg'
                ]),
                'description' => '新鮮な魚介を使ったアクアパッツァが絶品。魚だけでなく、あさりやえび、イカなども入って具沢山。',
                'address' => '32-10 Haida, Tsuyama, Okayama 708-0822, Japan',
                'zip_code' => '708-0822',
                'city' => 'Okayama',
                'phone_number' => '868313720',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://gendaikappo-hasegawa.com/',
                'operating_hours' => '12:00 - 14:00',
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
                'google_map' => 'https://maps.app.goo.gl/HURMkiV588FBSYEcA',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '五右エ門',
                'logo' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/218300/aaaa52e86f2ec3baf784b9fdee50dcd7.jpg?token=c05c34b&api=v2',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/217930/15b13f62bed34578d837a445806aacb2.jpg?token=cab02d1&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/217928/064c334e3775f4b9f6003fb15a8f9aa8.jpg?token=0c61b52&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/217928/f79109a92861b38e4e3cc877ef04d125.jpg?token=7831980&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/218299/d3c05a37a24562085ef9246a515ab853.jpg?token=ad6a533&api=v2'
                ]),
                'description' => '新鮮な魚介を使ったアクアパッツァが絶品。魚だけでなく、あさりやえび、イカなども入って具沢山。',
                'address' => 'Japan, 〒810-0011 Fukuoka, Chuo Ward, Takasago, 2 Chome−24−20 ＴＥメゾン高砂',
                'zip_code' => '810-0011',
                'city' => 'Takasago',
                'phone_number' => '868313720',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => ' https://www.hakatagoemon.com/',
                'operating_hours' => '12:00 - 14:00',
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
                'google_map' => 'https://maps.app.goo.gl/HURMkiV588FBSYEcA',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '鮨多門',
                'logo' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/241073/309c3b762e13317716e5c21dc39db65a.jpg?token=ed331f4&api=v2',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/241073/bd55c34cabf0d0785927d4e5328d4c9e.jpg?token=fa66507&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/241073/852fb23bc9d5cd7d3491d02aa8038dc2.jpg?token=3182f9b&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/241073/187ea0f657c72b59067f28d8d018c340.jpg?token=73d7055&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/241073/9a45cbe9cd936c3ac4ac4f0d7f595d99.jpg?token=b7cd646&api=v2'
                ]),
                'description' => '柳橋連合市場等から旬の魚を仕入れ、数種類の酢をブレンドしたシャリと合わせて握る鮨は絶品です。ミシュラン一つ星を二度獲得した確かな腕で提供するこだわりのコースを、選りすぐりの日本酒やワインと共にお愉しみいただけます。',
                'address' => '2 Chome-4-39 Yakuin, Chuo Ward, Fukuoka, 810-0022, Japan',
                'zip_code' => '810-0022',
                'city' => 'Fukuoka',
                'phone_number' => '8042884641',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '12:00 - 14:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/XeeKWhNrqePGEYsV7',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => 'Tacos Stand',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/190913/150x150_square_7f8adcae41c7c377817cb48b5f6d2b02.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/286910/150x150_square_1300d960f0821da8c22426f8e275aee8.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/228918/150x150_square_3c1731a815748e2a3cb7d05b211f02e0.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/286910/150x150_square_2e827ba838db92adf1f531edd254731e.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/190913/150x150_square_7f8adcae41c7c377817cb48b5f6d2b02.jpg'
                ]),
                'description' => 'オーナーのこだわりが詰まった独創的なタコスが楽しめます。店内はおしゃれでまるでアパレルショップのような雰囲気。カウンター席とテーブル席があり、明るく開放的な空間が広がっています。',
                'address' => 'Japan, 〒810-0021 Fukuoka, Chuo Ward, Imaizumi, 2 Chome−4−33 2F',
                'zip_code' => '810-0021',
                'city' => 'Fukuoka',
                'phone_number' => '927915754',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '12:00 - 14:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/QAJsuqAQ2SzQ7h9h6',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '永らく',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/283979/150x150_square_285587f3fc6ec5ec7d29dae95352146d.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/283979/150x150_square_0bf6855038c0d7b625e899aa320a9caa.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/283979/150x150_square_8a63cb99aead1b1bb9975c2d0cee75cc.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/283979/150x150_square_652c1ef602085ba04490c1f27715aa62.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/283979/150x150_square_c2a31e9a7368563763eecefdd317d307.jpg'
                ]),
                'description' => '赤坂駅から徒歩5分ほどの所にあるこちらはカウンター席メインのろばた焼きのお店。基本的に満席で予約が取りにくいとのこと。メニューは海鮮を中心に野菜など目の前で炭火で焼いてくれます。',
                'address' => 'Japan, 〒810-0041 Fukuoka, Chuo Ward, Daimyo, 1 Chome−8−25 杉の宮マンション 103',
                'zip_code' => '810-0041',
                'city' => 'Fukuoka',
                'phone_number' => '927383438',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '12:00 - 14:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/PNTK1YNWHV1U3Rx87',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '笑う魚',
                'logo' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/203926/931c7f2baf34cfdfa24b61dd0dcaecad.jpg?token=5bee831&api=v2',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/203926/19e9109951122540d33446a8e93e2f83.jpg?token=4266d53&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/252163/64146eb954f617912529df8d0f216f83.jpg?token=50aeada&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/210137/813aa5843216823dda3819d13f393433.jpg?token=4106b5c&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/203323/4b7892033387dd2e29614ef8225be2ca.jpg?token=a1a429e&api=v2'
                ]),
                'description' => '赤坂駅から徒歩5分ほどの所にあるこちらはカウンター席メインのろばた焼きのお店。基本的に満席で予約が取りにくいとのこと。メニューは海鮮を中心に野菜など目の前で炭火で焼いてくれます。',
                'address' => 'Japan, 〒810-0041 Fukuoka, Chuo Ward, Daimyo, 1 Chome−12−26 ビエント336 102',
                'zip_code' => '810-0041',
                'city' => 'Fukuoka',
                'phone_number' => '927383438',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '17:00 - 01:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/L1PhhKdC5Zqzi6kS6',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '蕎麦しらいし',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/218916/150x150_square_2b4c2cee33d2e83724b1527aaa788ef6.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/218916/150x150_square_3e620c1cd5ef78f1ceca16bd4ff51b38.jpg',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/252163/64146eb954f617912529df8d0f216f83.jpg?token=50aeada&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/210137/813aa5843216823dda3819d13f393433.jpg?token=4106b5c&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/203323/4b7892033387dd2e29614ef8225be2ca.jpg?token=a1a429e&api=v2'
                ]),
                'description' => 'どれを食べても大満足、本格的な美味しい蕎麦が食べられる名店。特におすすめなのが『揚げなすおろしそば』と『鴨ざるそば』と『海老と旬の野菜天ぷら』です。',
                'address' => '4-26 Enamicho, Kokurakita Ward, Kitakyushu, Fukuoka 802-0083, Japan',
                'zip_code' => '802-0083',
                'city' => 'Fukuoka',
                'phone_number' => '939220552',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '17:00 - 01:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/7huhtqkcGiyR6tYu7',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '春寿し',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/2790/150x150_square_2a219f4b4ae352b6e4c83d835dea7557.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/2790/150x150_square_96a410c2ae3202b2f63990e13bc7418d.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/2790/150x150_square_220d0c9c8deb9008e94c5611478994a4.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/2790/150x150_square_14b0ae7ec107f45fc84857e74f784953.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/275122/150x150_square_efcc8d97d332be3f57c70a4ecf76d560.jpg'
                ]),
                'description' => 'どれを食べても大満足、本格的な美味しい蕎麦が食べられる名店。特におすすめなのが『揚げなすおろしそば』と『鴨ざるそば』と『海老と旬の野菜天ぷら』です。',
                'address' => '2 Chome-2-1 Takamidai, Yahatanishi Ward, Kitakyushu, Fukuoka 807-0853, Japan',
                'zip_code' => '807-0853',
                'city' => 'Fukuoka',
                'phone_number' => '936027326',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '17:00 - 01:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/Bkz845KcZPyUWF9S8',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '旬工房くら',
                'logo' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/30277/30277369.jpg?token=ffd3891&api=v2',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/30277/30277378.jpg?token=918a50c&api=v2',
                    'https://tblg.k-img.com/resize/100x100c/restaurant/images/Rvw/102694/102694342.jpg?token=91d4f15&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/68760/68760807.jpg?token=c623785&api=v2',
                    'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/104715/104715677.jpg?token=33044c8&api=v2'
                ]),
                'description' => '私たちが情熱を注ぐ［ゴマサバ］毎日漁港トラックから生きたまま届くゴマサバ！普通のゴマサバとは違うんです！売り切り御免！完売必須！要予約です！',
                'address' => '1 Chome-3-10 Komemachi, Kokurakita Ward, Kitakyushu, Fukuoka 802-0003, Japan',
                'zip_code' => '802-0003',
                'city' => 'Fukuoka',
                'phone_number' => '935510466',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.hakatagoemon.com/',
                'operating_hours' => '17:00 - 01:00',
                'closed_days' => json_encode([1, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/rS1bwWbG8uFePTvA8',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => '山沙商店',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/249265/150x150_square_903269c7b1b0e72850d19f0dfb308fb9.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/249265/150x150_square_7e8c2e5253b7236f9ca9c84281999545.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/249265/150x150_square_6e6d762e479658820fd8fe21282e4573.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/249265/150x150_square_d24267b99373cbed79d193f3e88b826d.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/286835/150x150_square_219e0d666495277535ccd357c22d56a5.jpg'
                ]),
                'description' => 'すし芳では美味しい鮨を頂けます。場所は佐賀駅前のビックワンの駅側の2軒隣です。',
                'address' => '1 Chome-13-17 Ekimae Chuo, Saga, 840-0801, Japan',
                'zip_code' => '840-0801',
                'city' => 'Saga',
                'phone_number' => '952975925',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'https://www.sushiyamasa-fukuoka.com/yamasasyouten.html',
                'operating_hours' => '17:00 - 01:00',
                'closed_days' => json_encode([2, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/Bz1QfYM5TyaESYFB7',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],

            [
                'category_id' => 2,
                'name' => 'オステリアウーヴァ',
                'logo' => 'https://tblg.k-img.com/restaurant/images/Rvw/233168/150x150_square_fbe17d4fabc3011941db72e6ec711438.jpg',
                'multi_images' => json_encode([
                    'https://tblg.k-img.com/restaurant/images/Rvw/159374/150x150_square_159374898.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/851/150x150_square_851200.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/41427/150x150_square_41427053.jpg',
                    'https://tblg.k-img.com/restaurant/images/Rvw/244585/150x150_square_ed801cee355171b6a2a1c819479faa19.jpg'
                ]),
                'description' => 'すし芳では美味しい鮨を頂けます。場所は佐賀駅前のビックワンの駅側の2軒隣です。',
                'address' => 'Otsu-1273 Ureshinomachi Oaza Shimojuku, Ureshino, Saga 843-0301, Japan',
                'zip_code' => '843-0301',
                'city' => 'Saga',
                'phone_number' => '+81954430231',
                'price_range' => '1000',
                'email' => 'example@tst.com',
                'website_url' => 'http://uva-ureshino.com/',
                'operating_hours' => '18:00 - 01:00',
                'closed_days' => json_encode([2, 5]),
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
                'google_map' => 'https://maps.app.goo.gl/2opwQwfNQNtbkxZn6',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('restaurants')->insert($restaurants);
    }
}