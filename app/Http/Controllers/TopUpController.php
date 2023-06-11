<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopUpController extends Controller
{
    //
    public function Topup() {
        return view('buy.topUp', [

        ]);
    }

    public function TopCat() {
        return view('buy.topup-cat', [

        ]);
    }
}
