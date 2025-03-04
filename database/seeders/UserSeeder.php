<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $adminUser = User::create([
            'first_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        $adminUser->assignRole(1); 
    
     
        $shoperUser = User::create([
            'first_name' => 'Shoper',
            'email' => 'shoper@gmail.com',
            'password' => Hash::make('password')
        ]);
        $shoperUser->assignRole(2); 
    }
}
