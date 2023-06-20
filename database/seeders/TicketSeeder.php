<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 = mobile legend, 2 = valorant
        Ticket::insert([
            'category_id' => 1,
            'ticket_name' => 'MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE',
            'quantity' => 1,
            'price' => 75000,
            'description' => "• REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE (Legend / 3 Mar 2023)\n• Time : 14.00 WIB\n• Location : Sanctuary Auditorium, Menara Kuningan\n• Visitors under 18 years old must be accompanied by an adult over 18 years old and fully vaccinated (3 doses)\n• Scan the Barcode at the entrance to exchange for a wristband\n• No Reschedule & No Refundable"
        ]);

        Ticket::insert([
            'category_id' => 2,
            'ticket_name' => 'VALORANT MASTERS TOKYO - VCT LOCK IN SPLIT',
            'quantity' => 1,
            'price' => 50000,
            'description' => "• VALORANT MASTERS TOKYO - VCT LOCK IN SPLIT (Master / 4 Mar 2023)\n• Time : 15.00 WIB\n• Location : Sanctuary Auditorium, Menara Kuningan\n• Visitors under 18 years old must be accompanied by an adult over 18 years old and fully vaccinated (3 doses)\n• Scan the Barcode at the entrance to exchange for a wristband\n• No Reschedule & No Refundable"
        ]);

        Ticket::insert([
            'category_id' => 2,
            'ticket_name' => 'VALORANT MASTERS COPENHAGEN - VCT LOCK IN BIND',
            'quantity' => 1,
            'price' => 50000,
            'description' => "• VALORANT MASTERS COPENHAGEN - VCT LOCK IN BIND (Master / 5 Mar 2023)\n• Time : 13.00 WIB\n• Location : Sanctuary Auditorium, Menara Kuningan\n• Visitors under 18 years old must be accompanied by an adult over 18 years old and fully vaccinated (3 doses)\n• Scan the Barcode at the entrance to exchange for a wristband\n• No Reschedule & No Refundable"
        ]);
    }
}
