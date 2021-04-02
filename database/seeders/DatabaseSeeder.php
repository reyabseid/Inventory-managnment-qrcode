<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'userType' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'store',
            'email' => 'store@gmail.com',
            'password' => Hash::make('password'),
            'userType' => 'store'
        ]);
        DB::table('users')->insert([
            'name' => 'guard',
            'email' => 'guard@gmail.com',
            'password' => Hash::make('password'),
            'userType' => 'guard'
        ]); 
        DB::table('users')->insert([
            'name' => 'guardStaff',
            'email' => 'guardStaff@gmail.com',
            'password' => Hash::make('password'),
            'userType' => 'guardB'
        ]);    
    }
}
