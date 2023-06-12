<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        User::insert([
            'name' => 'nobert',
            'email' => 'nobert@gmail.com',
            'password' => Hash::make('nobert123'),
            'date_of_birth' => '1993-09-29',
            'gender' => 'male',
            'phone_number' => '08123456789',
            'created_at' => $nowDate
        ]);

        User::insert([
            'name' => 'krusty',
            'email' => 'krusty@gmail.com',
            'password' => Hash::make('krusty123'),
            'date_of_birth' => '2003-12-24',
            'gender' => 'male',
            'phone_number' => '08123476589',
            'created_at' => $nowDate
        ]);
    }
}
