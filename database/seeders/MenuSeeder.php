<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('menus')->truncate();

      
        $menus = [
            [
                'menu' => 'menu 1',
                'image' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206831/6b8e1e9b6d2cf5403453a91fa65a3484.jpg?token=48ecdc6&api=v2',
            ],
            [
                'menu' => 'menu 2',
                'image' => 'https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/206830/1620d425d0e143bd897fd321006d9901.jpg?token=2e6da4d&api=v2',
            ],
            [
                'menu' => 'menu 3',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/27981/150x150_square_27981030.jpg',
            ],
            [
                'menu' => 'menu 4',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038650.jpg',
            ],
            [
                'menu' => 'menu 5',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038643.jpg',
            ],
            [
                'menu' => 'menu 6',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038653.jpg',
            ],
            [
                'menu' => 'menu 7',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/131038/150x150_square_131038662.jpg',
            ],
            [
                'menu' => 'menu 8',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/175400/150x150_square_958f6c119d4abc1b4f3757effc00da6a.jpg',
            ],
            [
                'menu' => 'menu 9',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/175400/150x150_square_ab455f4540d675fd77ba38edcf23c264.jpg',
            ],
            [
                'menu' => 'menu 10',
                'image' => 'https://tblg.k-img.com/restaurant/images/Rvw/175400/150x150_square_2e00b7308a647e890773225a639ba14a.jpg',
            ],
        ];

      
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}