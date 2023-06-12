<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function ticketCat() {
        return view('buy.ticket-cat', [
            'active' => 'ticket'
        ]);
    }

    public function buyTicket() {
        return view('buy.buyTicket', [
            'active' => 'ticket'
        ]);
    }

    public function SuccessTicket(){
        return view('buy.successpaymentTicket', [

        ]);
    }
}
