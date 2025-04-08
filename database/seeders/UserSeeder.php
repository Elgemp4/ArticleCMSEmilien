<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
