<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchController extends Controller
{
    public function getMerchDetail($merchId) {
        $merchDetail = DB::table('merches')
            ->where('id', '=', $merchId)->get();

        $merchDetail[0]->price_indo = 'Rp'.number_format($merchDetail[0]->price, 0, ",", ".");

        return $merchDetail;
    }

    public function merchCat() {
        return view ('buy.merch-cat', [
            'active' => 'merch'
        ]);
    }

    public function merchPayment(Request $request) {
        return redirect("/$request->merch_id/buy-merch");
    }

    public function buyMerch($merch_id) {
        $merchDetail = $this->getMerchDetail($merch_id)->first();

        return view ('buy.buyMerch', [
            'active' => 'merch',
            'merchId' => $merch_id,
            'merchDetail' => $merchDetail
        ]);
    }

    public function detailMerch($merch_id, Request $request) {
        $merchDetail = $this->getMerchDetail($merch_id);
        $subtotal = $merchDetail[0]->price * $request->quantity;
        $shippingCost = 20000;
        $tax = 0.02 * $subtotal;
        $discount = 10000;
        $total = $subtotal + $shippingCost + $tax - $discount;

        $merchData = collect($merchDetail)->map(function ($i) use ($request, $total, $discount, $tax, $shippingCost, $subtotal) {
            $i->chosen_size = $request->size;
            $i->chosen_quantity = $request->quantity;
            $i->subtotal = $subtotal;
            $i->shipping_cost = $shippingCost;
            $i->tax = $tax;
            $i->discount = $discount;
            $i->endtotal = $total;
            return $i;
        })->first();

        return view('buy.detailBuyMerch', [
            'active' => 'merch',
            'merchId' => $merch_id,
            'merchDetailPayment' => $merchData
        ]);
    }
}
