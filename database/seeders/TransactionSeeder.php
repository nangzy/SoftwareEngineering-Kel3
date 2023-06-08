<?php

namespace Database\Seeders;

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
            'event_name' => "MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE",
            'invoce' => "INV/20230301/MPL/109375922",
            'quantity' => 4,
            'transaction_date' => "01 March 2023",
            'transaction_type' => 1,
            'total_price' => 300000,
            'payment_method' => "QRIS"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'event_name' => "Master League Season VI Week 1",
            'invoce' => "INV/20230208/MPL/220099887",
            'quantity' => 1,
            'transaction_date' => "08 February 2023",
            'transaction_type' => 1,
            'total_price' => 50000,
            'payment_method' => "OVO"
        ]);

        Transaction::insert([
            'user_id' => 1,
            'event_name' => "PUBG M Pro League ID Week 1",
            'invoce' => "INV/20230116/MPL/573034799",
            'quantity' => 10,
            'transaction_date' => "16 January 2023",
            'transaction_type' => 1,
            'total_price' => 500000,
            'payment_method' => "QRIS"
        ]);

        // Merch History = 2
        Transaction::insert([
            'user_id' => 2,
            'item_name' => "EVOS Jersey, M",
            'invoce' => "INV/20230430/MPL/200981639",
            'quantity' => 2,
            'transaction_date' => "30 April 2023",
            'transaction_type' => 2,
            'total_price' => 300000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'item_name' => "RRQ Jersey, L",
            'invoce' => "INV/20230421/MPL/457391833",
            'quantity' => 3,
            'transaction_date' => "21 April 2023",
            'transaction_type' => 2,
            'total_price' => 450000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 1,
            'item_name' => "ONIC Jersey, M",
            'invoce' => "INV/20230315/MPL/861029917",
            'quantity' => 1,
            'transaction_date' => "15 March 2023",
            'transaction_type' => 2,
            'total_price' => 150000,
            'payment_method' => "BCA"
        ]);

        // Top-up Hisory = 3
        Transaction::insert([
            'user_id' => 1,
            'user_id_ml' => "8301741681", 
            'server_id_mole' => "8992",
            'invoce' => "INV/20230315/MPL/483290484",
            'quantity' => 4830,
            'transaction_date' => "15 March 2023",
            'transaction_type' => 3,
            'total_price' => 2000000,
            'payment_method' => "BCA"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'riot_id' => "Lur12#Gha0",
            'invoce' => "INV/20230127/MPL/480293842",
            'quantity' => 1420,
            'transaction_date' => "27 January 2023",
            'transaction_type' => 3,
            'total_price' => 700000,
            'payment_method' => "OVO"
        ]);

        Transaction::insert([
            'user_id' => 2,
            'user_id_ml' => "200998817", 
            'server_id_mole' => "1201",
            'invoce' => "INV/20221230/MPL/663901821",
            'quantity' => 240,
            'transaction_date' => "30 December 2022",
            'transaction_type' => 3,
            'total_price' => 350000,
            'payment_method' => "QRIS"
        ]);
    }
}
