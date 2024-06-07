<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DevelopersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        $now = now();
        DB::table('users')->insert(['name' => 'Developer 1', 'user_type' => 1, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('users')->insert(['name' => 'Developer 2', 'user_type' => 1, 'created_at' => $now, 'updated_at' => $now],);
        DB::table('users')->insert(['name' => 'Developer 3', 'user_type' => 1, 'created_at' => $now, 'updated_at' => $now],);
        DB::table('users')->insert(['name' => 'Developer 4', 'user_type' => 1, 'created_at' => $now, 'updated_at' => $now],);
    }
}
