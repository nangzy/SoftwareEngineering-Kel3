<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Faq $faqs){
        return view('faq',[
            'faq' => $faqs
        ]);
    }
}
