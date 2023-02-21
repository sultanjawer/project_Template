<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('email', 'admin@example.com')->first();
        $user = User::where('email', 'user@example.com')->first();
        $adminRole = Role::where('title', 'Admin')->first();
        $userRole = Role::where('title', 'User')->first();

        $admin->roles()->attach($adminRole->id);
        $user->roles()->attach($userRole->id);
    }
}
