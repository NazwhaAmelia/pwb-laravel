<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')-> insert([
            'name' => Str::random(18),
            'email'=> Str::random(18).'@example.com',
            'password'=> Hash::make('password'),
        ]);
        
        
        }
}
