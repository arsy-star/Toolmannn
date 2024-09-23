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
        User::insert([
            [ 'username' => 'Admin User', 'email' => 'admin@gmail.com',  'password' => bcrypt('123'),  'Role' => 'admin'],
            [ 'username' => 'Operator User',  'email' => 'operator@gmail.com',  'password' => bcrypt('123'), 'Role' => 'operator'],
            ['username' => 'Regular User',  'email' => 'user@gmail.com', 'password' => bcrypt('123'), 'Role' => 'user'],
        ]);

        
    }
}