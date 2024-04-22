<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index(){
            $selectedProducts = Cart::where('checked', 1)->get();

            // Tính tổng tiền của các sản phẩm
            $totalPrice = $selectedProducts->sum(function ($item) {
                return $item->price * $item->quantity;
            });

            $shippingFee = 12000;
            $totalPrice += $shippingFee;

          return view('frontend.checkout', compact('selectedProducts', 'totalPrice', 'shippingFee'));
    }

}
