<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mobile Legend = 1
        TopUp::insert([
            'category_id' => 1,
            'quantity' => 170,
            'price' => 5000,
            'in_game_id' => "12345678",
            'server_id' => "1234"
        ]);

        // Valorant = 2
        TopUp::insert([
            'category_id' => 2,
            'quantity' => 125,
            'price' => 10000,
            'riot_id' => "Westbourne#SEA"
        ]);
    }
}
