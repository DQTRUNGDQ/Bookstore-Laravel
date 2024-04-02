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
            'name' => 'Thần Đèn',
            'role' => 'user',
            'email' => 'thanden@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}