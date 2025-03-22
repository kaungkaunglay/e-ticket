<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Temporarily disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Delete existing data instead of truncating (to avoid foreign key issues)
        DB::table('categories')->delete();

        // Enable foreign key checks back
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Define category data
        $categories = [
            ['name' => '日本料理', 'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => '寿司', 'image' => 'https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => 'イタリアン', 'image' => 'https://images.unsplash.com/photo-1550966871-9edefd90e6e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => 'フレンチ', 'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => 'メキシカン', 'image' => 'https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => '喫茶店', 'image' => 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => '中華料理', 'image' => 'https://images.unsplash.com/photo-1537047902294-62a40c20a6ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => '韓国料理', 'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => 'アジアン', 'image' => 'https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
            ['name' => 'インド料理', 'image' => 'https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'],
        ];

        // Insert categories into the database
        Category::insert($categories);
    }
}