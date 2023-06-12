<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameCategoryController extends Controller
{
    //
    public function Valorant() {
        return view('valorant', [
            'active' => 'valorant'
        ]);
    }

    public function MobileLegend() {
        return view('mobile-legend', [
            'active' => 'mole'
        ]);
    }

    public function DetailValorant(){
        return view('valodetail', [
            'active' => 'valorant'
        ]);
    }

    public function Tournament() {
        return view('tournament', [

        ]);
    }

    public function Modal() {
        return view('modal', [

        ]);
    }
}
