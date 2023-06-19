<?php

namespace App\Http\Controllers;

use App\Models\GameCategory;
use Illuminate\Http\Request;

class TopUpController extends Controller
{
    //
    public function Topup(GameCategory $game_cat) {
        return view('buy.topUp', [
            'active' => 'top_up',
            'game_cat' => $game_cat
        ]);
    }

    public function TopCat() {
        return view('buy.topup-cat', [
            'active' => 'top_up'
        ]);
    }
}
