<?php

namespace Database\Seeders;

use App\Models\GameCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameCategory::insert([
            'game' => 'Mobile Legends'
        ]);
        GameCategory::insert([
            'game' => 'Valorant'
        ]);
    }
}
