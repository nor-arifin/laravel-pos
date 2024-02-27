<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Nor Arifin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'phone' => '085349393900',
            'roles' => 'admin',
        ]);
        
    }
}
