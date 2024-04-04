<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart as ModelsCart;
use App\Models\dealtoday;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{

    public function cart() {
        $cartItem = Cart::content();
        
        $totalQuantity = Cart::count();
        
        return view('frontend.cart', ['cartItems' => $cartItem, 'totalQuantity'=> $totalQuantity]);
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
        
        
        if(auth()->check()) {
            Cart::add([
                'id' => $product->dealtoday_id,
                'name' => $product->name,
                'price' => $product->pricediscount,
                'qty' => 1, // Số lượng mặc định là 1
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'subtotal' => $subtotal,
                ]
            ]);
            

            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');

            $cartItems = session()->get('cart', []);
            $newItem = [
                'id' => $product->dealtoday_id,
                'name' => $product->name,
                'price' => $product->pricediscount,
                'qty' => 1,
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'subtotal' => $subtotal,
                ]
            ];
            $cartItems[] = $newItem;
            session()->put('cart', $cartItems);

   
        } else {
            // Nếu người dùng chưa đăng nhập, bạn có thể xử lý theo cách riêng của mình.
            // Ví dụ: chuyển hướng người dùng đến trang đăng nhập hoặc yêu cầu họ đăng nhập trước khi thêm vào giỏ hàng.
            toastr()->error('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!');
        }

        return back();

    }


    public function removeItem($rowId){
        Cart::remove($rowId);
        toastr()->success('Sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
    }

    public function removeAll() {
        Cart::destroy();
        toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
    }

}