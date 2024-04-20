<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\banner;
use App\Models\dealtoday;
use App\Models\Populartool;
use App\Models\QA;
use App\Models\quicktool;
use App\Models\suggestionwidget;
use App\Models\bestproduct;
use App\Models\brandofficial;
use App\Models\careproduct;
use App\Models\productdetails;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class HomepageController extends Controller
{
    public function data(){

        $categories = Category::all();
        $populartools = populartool::all();
        $banners = banner::all();
        $bestproducts = bestproduct::all();
        $careproducts = careproduct::all();
        $deals = dealtoday::all();
        $QAs = QA::all();
        $quicktools = quicktool::all();
        $sgproducts = suggestionwidget::all();
        $brandproducts = brandofficial::all();
        $productdetails = productdetails::all();


        // HIỂN THỊ TỔNG SỐ SẢN PHẨM TRONG GIỎ HÀNG LÊN TRANG CHỦ

        // $totalQuantity = Cart::count();

        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalQuantity = 0;

        foreach ($cartItems as $item) {
                $totalQuantity += $item->quantity;
        }

        return view('backend.homepage',
        compact(
            'categories','populartools','banners',
            'bestproducts','careproducts','deals','QAs',
            'quicktools','sgproducts','brandproducts', 'productdetails','totalQuantity'
            )
        );
    }

}