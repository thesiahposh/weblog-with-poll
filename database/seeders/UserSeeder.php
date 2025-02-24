<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            ['name' => 'ali',
            'email' => 'test@example.com',
            'password' => \bcrypt('12345678')]
        ];
        \DB::table('users')->insert($users);
    }
}
