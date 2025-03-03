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
            ['name' => 'admin', 'description' => 'Admin role'],
            ['name' => 'shoper', 'description' => 'Shoper role'],
            ['name' => 'user', 'description' => 'User role'],
        ];

        foreach ($default_roles as $roleData) {
            Role::create($roleData);
        }
    }
}
