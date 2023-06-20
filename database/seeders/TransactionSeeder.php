<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ticket History = 1
        Transaction::insert([
            'user_id' => 1,
            'game_category_id' => 1,
            'product_id' => 1,
            'event_name' => "MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE",
            'invoice' => "INV/20230301/MPL/109375922",
            'quantity' => 4,
            'transaction_date' => "2023-03-06",
            'transaction_type' => 1,
            'real_price' => 70000,
            'total_price' => 300000,
            'payment_method' => "QRIS"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'game_category_id' => 2,
            'product_id' => 4,
            'event_name' => "Master League Season VI Week 1",
            'invoice' => "INV/20230208/MPL/220099887",
            'quantity' => 1,
            'transaction_date' => "2023-02-12",
            'transaction_type' => 1,
            'real_price' => 48000,
            'total_price' => 50000,
            'payment_method' => "OVO"
        ]);

        Transaction::insert([
            'user_id' => 1,
            'game_category_id' => 1,
            'product_id' => 5,
            'event_name' => "PUBG M Pro League ID Week 1",
            'invoice' => "INV/20230116/MPL/573034799",
            'quantity' => 10,
            'transaction_date' => "2023-01-16",
            'transaction_type' => 1,
            'real_price' => 48000,
            'total_price' => 500000,
            'payment_method' => "QRIS"
        ]);

        // Merch History = 2
        Transaction::insert([
            'user_id' => 2,
            'game_category_id' => 1,
            'product_id' => 1,
            'item_name' => "EVOS Jersey, M",
            'invoice' => "INV/20230430/MPL/200981639",
            'quantity' => 2,
            'transaction_date' => "2023-04-30",
            'transaction_type' => 2,
            'real_price' => 140000,
            'total_price' => 300000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'game_category_id' => 2,
            'product_id' => 2,
            'item_name' => "RRQ Jersey, L",
            'invoice' => "INV/20230421/MPL/457391833",
            'quantity' => 3,
            'transaction_date' => "2023-04-21",
            'transaction_type' => 2,
            'real_price' => 140000,
            'total_price' => 450000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 1,
            'game_category_id' => 2,
            'product_id' => 3,
            'item_name' => "ONIC Jersey, M",
            'invoice' => "INV/20230315/MPL/861029917",
            'quantity' => 1,
            'transaction_date' => "2023-04-19",
            'transaction_type' => 2,
            'real_price' => 148000,
            'total_price' => 150000,
            'payment_method' => "BCA"
        ]);

        // Top-up Hisory = 3
        Transaction::insert([
            'user_id' => 1,
            'game_category_id' => 1,
            'product_id' => 1,
            'user_id_ml' => "8301741681",
            'server_id_mole' => "8992",
            'invoice' => "INV/20230315/MPL/483290484",
            'quantity' => 4830,
            'transaction_date' => "2023-03-15",
            'transaction_type' => 3,
            'real_price' => 1990000,
            'total_price' => 2000000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'game_category_id' => 2,
            'product_id' => 1,
            'riot_id' => "Lur12#Gha0",
            'invoice' => "INV/20230127/MPL/480293842",
            'quantity' => 1420,
            'transaction_date' => "2023-01-27",
            'transaction_type' => 3,
            'real_price' => 680000,
            'total_price' => 700000,
            'payment_method' => "OVO"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'game_category_id' => 1,
            'product_id' => 3,
            'user_id_ml' => "200998817",
            'server_id_mole' => "1201",
            'invoice' => "INV/20221230/MPL/663901821",
            'quantity' => 240,
            'transaction_date' => "2022-12-30",
            'transaction_type' => 3,
            'real_price' => 348000,
            'total_price' => 350000,
            'payment_method' => "QRIS"
        ]);
    }
}
