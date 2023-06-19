<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function Payment($item_category, $item_id, Request $request) {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');
        $nowDateFormatted = date('Ymd', strtotime
        ($nowDate));

        $generateRandNumber = rand(100000000, 999999999);

        $itemData = null;

        if ($item_category == 'merch') {
            $merchDetail = (new MerchController)->getMerchDetail($item_id);

            $itemData = collect($merchDetail)->map(function ($i) use ($generateRandNumber, $nowDateFormatted, $nowDate, $request) {
                $i->chosen_size = $request->chosen_size;
                $i->chosen_quantity = $request->chosen_quantity;
                $i->subtotal = $request->subtotal;
                $i->shipping_method = $request->shipping_method;
                $i->shipping_cost = $request->shipping_cost;
                $i->tax = $request->tax;
                $i->discount = $request->discount;
                $i->endtotal = $request->endtotal;
                $i->payment_method = $request->payment_method;
                $i->transaction_date = $nowDate;
                $i->transaction_date_formatted = date('d F Y', strtotime
                ($nowDate));
                $i->invoice = "INV/$nowDateFormatted/MPL/$generateRandNumber";
                return $i;
            })->first();
        }
        else if ($item_category == 'ticket') {
            $ticketDetail = (new TicketController)->getTicketDetail($item_id);

            $itemData = collect($ticketDetail)->map(function ($i) use ($generateRandNumber, $nowDateFormatted, $nowDate, $request) {
                $i->chosen_quantity = $request->chosen_quantity;
                $i->subtotal = $request->subtotal;
                $i->shipping_method = $request->shipping_method;
                $i->shipping_cost = $request->shipping_cost;
                $i->tax = $request->tax;
                $i->discount = $request->discount;
                $i->endtotal = $request->endtotal;
                $i->payment_method = $request->payment_method;
                $i->transaction_date = $nowDate;
                $i->transaction_date_formatted = date('d F Y', strtotime
                ($nowDate));
                $i->invoice = "INV/$nowDateFormatted/MPL/$generateRandNumber";
                return $i;
            })->first();
        }
        else if ($item_category == 'top_up') {

        }

        return view('buy.paymentPage', [
            'active' => $item_category,
            'itemId' => $item_id,
            'itemData' => $itemData
        ]);
    }

    public function paymentSuccess($item_category, $item_id, Request $request) {
        if ($item_category == 'merch') {
            Transaction::insert([
                'user_id' => $request->user_id,
                'item_name' => $request->item_name,
                'size' => $request->size,
                'invoice' => $request->invoice,
                'quantity' => $request->quantity,
                'transaction_date' => $request->transaction_date,
                'transaction_type' => $request->transaction_type,
                'total_price' => $request->total_price,
                'payment_method' => $request->payment_method,
            ]);
        }
        else if ($item_category == 'ticket') {
            Transaction::insert([
                'user_id' => $request->user_id,
                'event_name' => $request->event_name,
                'invoice' => $request->invoice,
                'quantity' => $request->quantity,
                'transaction_date' => $request->transaction_date,
                'transaction_type' => $request->transaction_type,
                'total_price' => $request->total_price,
                'payment_method' => $request->payment_method,
            ]);
        }
        else {

        }

        return redirect('/success-payment-merch-ticket');
    }

    public function successPaymentMerchAndTicket() {
        return view('buy.successpaymentTicket', [

        ]);
    }

    public function failPayment() {
        return view('buy.failPayment', [

        ]);
    }

    public function DetailTransactionMerch($merch_id, Request $request) {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');
        $nowDateFormatted = date('Ymd', strtotime
        ($nowDate));

        $generateRandNumber = rand(100000000, 999999999);

        $merchDetail = (new MerchController)->getMerchDetail($merch_id);

        $merchData = collect($merchDetail)->map(function ($i) use ($generateRandNumber, $nowDateFormatted, $nowDate, $request) {
            $i->chosen_size = $request->chosen_size;
            $i->chosen_quantity = $request->chosen_quantity;
            $i->subtotal = $request->subtotal;
            $i->shipping_method = $request->shipping_method;
            $i->shipping_cost = $request->shipping_cost;
            $i->tax = $request->tax;
            $i->discount = $request->discount;
            $i->endtotal = $request->endtotal;
            $i->payment_method = $request->payment_method;
            $i->transaction_date = $nowDate;
            $i->transaction_date_formatted = date('d F Y', strtotime
            ($nowDate));
            $i->invoice = "INV/$nowDateFormatted/MPL/$generateRandNumber";
            return $i;
        })->first();

        return view('buy.detailTransactionMerch', [
            'active' => 'merch',
            'merchId' => $merch_id,
            'merchData' => $merchData
        ]);
    }

    public function DetailTransactionTicket() {
        return view('buy.detailTransactionTicket', [
            'active' => 'ticket',
        ]);
    }

    public function DetailTransactionTopup() {
        return view('buy.detailTransactionTopup', [
            'active' => 'topup',
        ]);
    }
}
