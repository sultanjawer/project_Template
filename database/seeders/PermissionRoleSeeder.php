<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin role has all permissions
        $permissions = DB::table('permissions')->get();
        $adminRoleId = DB::table('roles')->where('title', 'Admin')->value('id');

        foreach ($permissions as $permission) {
            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => $adminRoleId,
            ]);
        }

        // User role only has "View Dashboard" permission
        $viewDashboardPermissionId = DB::table('permissions')->where('name', 'View Dashboard')->value('id');
        $userRoleId = DB::table('roles')->where('title', 'User')->value('id');

        DB::table('permission_role')->insert([
            'permission_id' => $viewDashboardPermissionId,
            'role_id' => $userRoleId,
        ]);
    }
}
