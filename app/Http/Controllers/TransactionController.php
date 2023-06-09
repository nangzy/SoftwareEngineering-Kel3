<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
                $i->game_category_id = $request->game_category_id;
                $i->transaction_date = $nowDate;
                $i->transaction_date_formatted = date('d F Y', strtotime
                ($nowDate));
                $i->invoice = "INV/$nowDateFormatted/MCH/$generateRandNumber";
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
                $i->game_category_id = $request->game_category_id;
                $i->transaction_date = $nowDate;
                $i->transaction_date_formatted = date('d F Y', strtotime
                ($nowDate));
                $i->invoice = "INV/$nowDateFormatted/TKT/$generateRandNumber";
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
                'game_category_id' => $request->game_category_id,
                'product_id' => $request->product_id,
                'item_name' => $request->item_name,
                'size' => $request->size,
                'invoice' => $request->invoice,
                'quantity' => $request->quantity,
                'transaction_date' => $request->transaction_date,
                'transaction_type' => $request->transaction_type,
                'real_price' => $request->real_price,
                'total_price' => $request->total_price,
                'payment_method' => $request->payment_method,
            ]);
        }
        else if ($item_category == 'ticket') {
            Transaction::insert([
                'user_id' => $request->user_id,
                'game_category_id' => $request->game_category_id,
                'product_id' => $request->product_id,
                'event_name' => $request->event_name,
                'invoice' => $request->invoice,
                'quantity' => $request->quantity,
                'transaction_date' => $request->transaction_date,
                'transaction_type' => $request->transaction_type,
                'real_price' => $request->real_price,
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

    public function transactions($user_id) {
//        $user = User::find(Session::get('loginUser')->user_id);

        // sort by transaction_date dari yang terbaru ke terlama
        $transactions = Transaction::where('user_id', $user_id)->get()->sortByDesc('transaction_date');

        foreach ($transactions as $transactionKey => $transactionValue) {
            // ubah format harganya
            $transactionValue->ind_price = 'Rp'.number_format($transactionValue->total_price, 2, ",", ".");

            $transactionValue->ind_real_price = 'Rp'.number_format($transactionValue->real_price, 2, ",", ".");

            // ubah format date transaction_date
            $transactionValue->transaction_date_formatted = date('d F Y', strtotime
            ($transactionValue->transaction_date));
            $transactionValue->transaction_time = date('H:i', strtotime($transactionValue->transaction_date));
        }

        return $transactions;
    }

    public function DetailTransactionTicket() {
        $transactions = $this->transactions(Session::get('loginUser')->id);

        $transactionsFiltered = $transactions->filter(function ($i) {
            return $i->transaction_type == 1;
        });

        return view('buy.detailTransactionTicket', [
            'active' => 'user_profile',
            'active_category' => 'ticket',
            'transactions' => $transactionsFiltered,
        ]);
    }

    public function DetailTransactionTopup() {
        $transactions = $this->transactions(Session::get('loginUser')->id);

        $transactionsFiltered = $transactions->filter(function ($i) {
            return $i->transaction_type == 3;
        });

        return view('buy.detailTransactionTopup', [
            'active' => 'user_profile',
            'active_category' => 'topup',
            'transactions' => $transactionsFiltered,
        ]);
    }

    public function DetailTransactionMerch() {
        $transactions = $this->transactions(Session::get('loginUser')->id);

        $transactionsFiltered = $transactions->filter(function ($i) {
            return $i->transaction_type == 2;
        });

        return view('buy.detailTransactionMerch', [
            'active' => 'user_profile',
            'active_category' => 'merch',
            'transactions' => $transactionsFiltered,
        ]);
    }
}
