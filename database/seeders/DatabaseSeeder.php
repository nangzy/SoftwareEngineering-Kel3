<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ContactInformationSeeder::class,
            FaqSeeder::class,
            GameCategorySeeder::class,
            MerchSeeder::class,
            NewsSeeder::class,
            TicketSeeder::class,
            TopUpSeeder::class,
            TransactionSeeder::class
        ]);
    }
}
