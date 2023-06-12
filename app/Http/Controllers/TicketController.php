<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function ticketCat() {
        return view('buy.ticket-cat', [

        ]);
    }

    public function buyTicket() {
        return view('buy.buyTicket', [

        ]);
    }

    public function SuccessTicket(){
        return view('buy.successpaymentTicket', [

        ]);
    }
}
