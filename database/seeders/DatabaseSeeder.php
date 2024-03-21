<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        DB::table('users')->insert([
            'name' => 'TrungDepTrai',
            'email' => 'trungthpthy@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}