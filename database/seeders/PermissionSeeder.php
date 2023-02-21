<?php

namespace Database\Seeders;

use App\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'View Dashboard',
                'slug' => 'view-dashboard',
                'description' => 'Allows user to view dashboard'
            ],
            // Add any other permissions you need
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
