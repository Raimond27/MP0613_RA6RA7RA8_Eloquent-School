<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@lincolnsc.com',
            'password' => Hash::make('password'),
            'user_type' => "1" 
        ]);

        User::create([
            'name' => 'Aunty Jane',
            'email' => 'aunty.jane@lincolnsc.com',
            'password' => Hash::make('password'),
            'user_type' => "2" 
        ]);

        User::create([
            'name' => 'Joshua Edwin',
            'email' => 'joshua.edwin@lincolnsc.com',
            'password' => Hash::make('password'),
            'user_type' => "3" 
        ]);

        User::create([
            'name' => 'Michael Phelps',
            'email' => 'michael.phelps@lincolnsc.com',
            'password' => Hash::make('password'),
            'user_type' => "4" 
        ]);
    }
}
d