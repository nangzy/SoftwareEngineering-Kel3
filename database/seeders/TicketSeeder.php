<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ticket::insert([
            'category_id' => 1,
            'quantity' => 1,
            'price' => 75000,
            'description' => "• REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE (Legend / 3 Mar 2023)\n• Time : 14.00 WIB\n• Location : Sanctuary Auditorium, Menara Kuningan\n• Visitors under 18 years old must be accompanied by an adult over 18 years old and fully vaccinated (3 doses)\n• Scan the Barcode at the entrance to exchange for a wristband\n• No Reschedule & No Refundable"
        ]);
    }
}
