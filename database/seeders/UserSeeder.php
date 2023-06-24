<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            [
            
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                'password' => Hash::make('welcome')
            
            ],
            [
            
                'name' => 'Nani',
                'email' => 'nani@mail.com',
                'password' => Hash::make('welcome')
            
        ]
        ]);
    }
}