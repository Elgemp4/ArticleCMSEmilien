<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);

        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $viewer = Role::create(['name' => 'viewer']);

        $admin->givePermissionTo('view articles', 'edit articles', 'view users', 'edit users');
        $editor->givePermissionTo('view articles', 'edit articles');
        $viewer->givePermissionTo('view articles');
    }
}
