<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends Controller
{
    //
    public function Topup() {
        return view('buy.topUp', [
            'active' => 'top_up'
        ]);
    }

    public function TopCat() {
        return view('buy.topup-cat', [
            'active' => 'top_up'
        ]);
    }
}
