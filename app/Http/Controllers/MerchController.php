<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchController extends Controller
{
    //
    public function buyMerch() {
        return view ('buy.buyMerch', [
            'active' => 'merch'
        ]);
    }

    public function detailMerch() {
        return view('buy.detailBuyMerch', [

        ]);
    }
}
