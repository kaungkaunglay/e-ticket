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
                'menu' => 'Pasta Carbonara',
                'image' => 'https://images.unsplash.com/photo-1595295333158-4742f28fbd85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Margherita Pizza',
                'image' => 'https://images.unsplash.com/photo-1595854341625-f33ee10dbf94?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Grilled Salmon',
                'image' => 'https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Beef Burger',
                'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Sushi Platter',
                'image' => 'https://images.unsplash.com/photo-1579871494447-9811cf80d66c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Chicken Tikka Masala',
                'image' => 'https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Caesar Salad',
                'image' => 'https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'BBQ Ribs',
                'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Vegetable Stir Fry',
                'image' => 'https://images.unsplash.com/photo-1597047084897-51e81819a499?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
            [
                'menu' => 'Tiramisu',
                'image' => 'https://images.unsplash.com/photo-1610462275441-9280204d9c22?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
            ],
        ];

      
        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}