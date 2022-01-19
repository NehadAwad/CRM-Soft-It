<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert( [
            'name' => 'Super Admin',                    // SUPER ADMIN
            'email' => 'superadmin@gmail.com',
            'type' => 'admin',
            'password' => Hash::make('superadmin@'),
        ]);

//        DB::table('users')->insert( [
//            'name' => 'User01',                    // USER
//            'email' => 'user01@gmail.com',
//            'type' => 'user',
//            'password' => Hash::make('user01@'),
//        ]);
    }
}
