<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\dealtoday;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function cart() {
        $cartItem = Cart::content();
        
        return view('frontend.cart', ['cartItems' => $cartItem]);
    }


    public function addToCart($id) {
        $product = dealtoday::find($id);
        $quantity = 1;
        
        if (!$product) {

            toastr()->error('Sản phẩm không còn tồn tại!');
            return back();
        }

         // Tính toán giá tiền subtotal cho sản phẩm
        $subtotal = $product->pricediscount * $quantity;
        

        Cart::add([
            'id' => $product->dealtoday_id,
            'name' => $product->name,
            'price' => $product->pricediscount,
            'qty' => $quantity,
            'weight' => 0,
            'options' => ['code' => $product->code, 'image' => $product->image, 'subtotal' => $subtotal]
        ]);
        
        toastr()->success('Sản phẩm đã được thêm vào giỏ hàng!');
        return back();

    }

}