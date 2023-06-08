<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'nobert',
            'email' => 'nobert@gmail.com',
            'password' => 'nobert123',
            'date_of_birth' => '1993-09-29',
            'gender' => 'male',
            'phone_number' => '08123456789'
        ]);

        User::insert([
            'name' => 'krusty',
            'email' => 'krusty@gmail.com',
            'password' => 'krusty123',
            'date_of_birth' => '2003-12-24',
            'gender' => 'male',
            'phone_number' => '08123476589'
        ]);
    }
}
