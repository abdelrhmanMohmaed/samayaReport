<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'AbdelRahman Mohamed',
            'email' => 'abdo@admin.com',
            'password' => Hash::make('12345'),
            'role_id' => 1,
            'img' => '',
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role_id' => 2,
            'img' => '',
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@admin.com',
            'password' => Hash::make('user'),
            'role_id' => 3,
            'img' => '',
        ]);
    }
}
