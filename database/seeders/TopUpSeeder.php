<?php

namespace Database\Seeders;

use App\Models\TopUp;
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
            'game_category_id' => 1,
            'quantity' => 170,
            'price' => 48000,
            'image' =>'1_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 240,
            'price' => 68000,
            'image' =>'1_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 296,
            'price' => 84000,
            'image' =>'2_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 408,
            'price' => 115000,
            'image' =>'2_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 568,
            'price' => 158000,
            'image' =>'3_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 875,
            'price' => 242000,
            'image' =>'3_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 2010,
            'price' => 527000,
            'image' =>'3_MLBB',
            
        ]);

        TopUp::insert([
            'game_category_id' => 1,
            'quantity' => 4830,
            'price' => 1265000,
            'image' =>'4_MLBB',
            
        ]);

        // Valorant = 2
        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 125,
            'price' => 14000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 375,
            'price' => 40000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 625,
            'price' => 70000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 1420,
            'price' => 150000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 3150,
            'price' => 250000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 6450,
            'price' => 500000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 8250,
            'price' => 760000,
            'image' =>'VPoin'
        ]);

        TopUp::insert([
            'game_category_id' => 2,
            'quantity' => 10120,
            'price' => 1000000,
            'image' =>'VPoin'
        ]);
    }
}
