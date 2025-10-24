<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //isi table users dengan data awal masing masing 1 user untuk tiap role
        DB::table('users')->insert([
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'role_id' => 1, // assuming 'user' role has ID 1
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role_id' => 2, // assuming 'admin' role has ID 2
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'password' => bcrypt('password'),
                'role_id' => 3, // assuming 'manager' role has ID 3
            ],
        ]);
    }
}
