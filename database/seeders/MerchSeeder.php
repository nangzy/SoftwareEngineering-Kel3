<?php

namespace Database\Seeders;

use App\Models\Merch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 = mobile legend, 2 = valorant
        Merch::insert([
            'category_id' => 1,
            'merch_name' => "EVOS Jersey",
            'price' => 150000,
            'size' => "S M L XL XXL",
            'quantity' => 1,
            'organization' => "EVOS",
            'item' => "Jersey",
            'description' => "- 100% Polyester Coolmax Moisture Wicking Fabric\n- Slim Fit\n- Sublimated Partners Logos\n- Made in Indonesia"
        ]);
    }
}
