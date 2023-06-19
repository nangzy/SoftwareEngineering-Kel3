<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function getTicketDetail($ticketId) {
        $ticketDetail = DB::table('tickets')
            ->where('id', '=', $ticketId)->get();

        $ticketDetail[0]->price_indo = 'Rp'.number_format($ticketDetail[0]->price, 0, ",", ".");

        return $ticketDetail;
    }

    public function ticketCat() {
        return view('buy.ticket-cat', [
            'active' => 'ticket'
        ]);
    }

    public function ticketPayment(Request $request) {
        return redirect("/$request->ticket_id/buy-ticket");
    }

    public function buyTicket($ticketId) {
        $ticketDetail = $this->getTicketDetail($ticketId)->first();

        return view('buy.buyTicket', [
            'active' => 'ticket',
            'ticketId' => $ticketId,
            'ticketDetail' => $ticketDetail
        ]);
    }

    public function detailTicket($ticket_id, Request $request) {
        $ticketDetail = $this->getTicketDetail($ticket_id);
        $subtotal = $ticketDetail[0]->price * $request->quantity;
        $shippingCost = 20000;
        $tax = 0.02 * $subtotal;
        $discount = 10000;
        $total = $subtotal + $shippingCost + $tax - $discount;

        $ticketData = collect($ticketDetail)->map(function ($i) use ($request, $total, $discount, $tax,
            $shippingCost, $subtotal) {
            $i->chosen_quantity = $request->quantity;
            $i->subtotal = $subtotal;
            $i->shipping_cost = $shippingCost;
            $i->tax = $tax;
            $i->discount = $discount;
            $i->endtotal = $total;
            return $i;
        })->first();

        return view('buy.detailBuyTicket', [
            'active' => 'ticket',
            'ticketId' => $ticket_id,
            'ticketDetailPayment' => $ticketData
        ]);
    }
}
