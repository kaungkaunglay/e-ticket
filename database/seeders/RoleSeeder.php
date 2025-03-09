<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_roles = [
            [
                'id' => 1,
                'name' => 'admin',
                'description' => 'Admin role'
            ],
            [
                'id' => 2,
                'name' => 'shoper',
                'description' => 'Shoper role'
            ],
            [
                'id' => 3,
                'name' => 'user',
                'description' => 'User role'
            ],
        ];

        foreach ($default_roles as $roleData) {
            Role::create($roleData);
        }
    }
}