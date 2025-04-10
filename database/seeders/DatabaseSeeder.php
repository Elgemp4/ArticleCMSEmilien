<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $viewer = Role::create(['name' => 'viewer']);

        $admin = User::create([
            "email" => "admin@gmail.com",
            'name' => "admin",
            "password" => bcrypt("password")
        ]);

        $editor = User::create([
            "email" => "editor@gmail.com",
            'name' => "editor",
            "password" => bcrypt("password")
        ]);

        $viewer = User::create([
            "email" => "viewer@gmail.com",
            'name' => "viewer",
            "password" => bcrypt("password")
        ]);

        $admin->assignRole('admin');
        $editor->assignRole('editor');
        $viewer->assignRole('viewer');        
    }
}
