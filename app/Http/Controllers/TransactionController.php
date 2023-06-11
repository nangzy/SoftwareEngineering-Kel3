<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function Payment() {
        return view('buy.paymentPage', [

        ]);
    }

    public function failPayment() {
        return view('buy.failPayment', [

        ]);
    }

    public function DetailTransactionMerch() {
        return view('buy.detailTransactionMerch', [

        ]);
    }

    public function DetailTransactionTicket() {
        return view('buy.detailTransactionTicket', [

        ]);
    }

    public function DetailTransactionTopup() {
        return view('buy.detailTransactionTopup', [

        ]);
    }
}
