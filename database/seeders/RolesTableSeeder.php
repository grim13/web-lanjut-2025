<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // isi table roles dengan data awal : user, admin, manager
        DB::table('roles')->insert([
            [
                'name' => 'user',
                'display_name' => 'User'
            ],
            [
                'name' => 'admin',
                'display_name' => 'Administrator'
            ],
            [
                'name' => 'manager',
                'display_name' => 'Manager'
            ],
        ]);
    }
}
