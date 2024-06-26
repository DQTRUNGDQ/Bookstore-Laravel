<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart as ModelsCart;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{

//LÀM CÁC CHỨC NĂNG GIỎ HÀNG BẰNG CSDL

    public function check($id){
        $cartItem = Cart::findOrFail($id);
        $cartItem->checked = !$cartItem->checked;
        $cartItem->save();

        // Sau khi cập nhật trạng thái checked, tính toán lại tổng giá tiền và trả về kết quả
        $totalPrice = $this->calculateTotalPrice();

        return response()->json(['success' => true,'totalPrice' => number_format($totalPrice, 0, ',', '.') . '₫']);
    }

    public function getTotalPrice()
    {
        $totalPrice = $this->calculateTotalPrice();
        return response()->json(['totalPrice' => number_format($totalPrice, 0, ',', '.') . '₫']);
    }

    public function calculateTotalPrice()
    {
        $userId = Auth::id();
        $checkedCartItems = Cart::where('checked', true)
                                ->where('user_id', $userId)
                                ->get();;
        $totalPrice = 0;

        foreach ($checkedCartItems as $cartItem) {
            $totalPrice += $cartItem->price * $cartItem->quantity;
        }

        return $totalPrice;
    }


    public function cart() {
        if (Auth::check()) {
            $userId = Auth::id();
            $cartItems = Cart::where('user_id', $userId)->get();
            $totalQuantity = 0;

            foreach ($cartItems as $item) {
                $totalQuantity += $item->quantity;
            }

            return view('frontend.cart', compact('cartItems','totalQuantity',));

        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng!');
        }
    }

    public function addToCart($id) {
        if (Auth::check()) {
            $userId = Auth::id();
            $product = Products::findOrFail($id);

            $cartItem = Cart::where('user_id', $userId)->where('product_id', $id)->first();

            if ($cartItem) {
                $cartItem->quantity += 1;
                $cartItem->subtotal = $cartItem->quantity * $cartItem->price;
                $cartItem->save();
            } else {
                $cartItem = new Cart();
                $cartItem->user_id = $userId;
                $cartItem->product_id = $id;
                $cartItem->product_name = $product->name;
                $cartItem->price = $product->price;
                $cartItem->image = $product->image;
                $cartItem->quantity = 1;
                $cartItem->subtotal = $product->price;
                $cartItem->save();
            }

            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');
        } else {
            toastr()->error('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng!');
        }

        return back();
    }

     public function removeItem($id) {

        $userId = Auth::id();
        $cartItem = Cart::where('user_id', $userId)->findOrFail($id);
        $cartItem->delete();

        toastr()->success('Sản phẩm đã được xóa khỏi vào giỏ hàng!');
        return back();
    }

    public function removeAll() {
            $userId = Auth::id();
            Cart::where('user_id', $userId)->delete();

            toastr()->success('Tất cả sản phẩm đã được xóa khỏi vào giỏ hàng!');
            return back();
    }

    public function updateCart(Request $request){
        $cartItem = Cart::find($request->cart_item_id);


        $cartItem->quantity = $request->quantity;
        $newSubtotal = $cartItem->subtotal = $cartItem->price * $request->quantity;
        $cartItem->save();

        return response()->json(['success' => true,'subtotal' =>  number_format($newSubtotal, 0, ',', '.') . '₫']);
    }

    public function buy(){

        $selectedProducts = Cart::where('checked', 1)->get();

        return redirect()->route('checkout', ['selectedProducts' => $selectedProducts]);
    }

}



/* LÀM CÁC CHỨC NĂNG GIỎ HÀNG BẰNG THƯ VIỆN

    public function cart() {
        $cartItem = Cart::content();

        $totalQuantity = Cart::count();

        return view('frontend.cart', ['cartItems' => $cartItem, 'totalQuantity'=> $totalQuantity]);
    }


    public function addToCart($id) {
        $product = Products::find($id);
        $quantity = 1;

        if (!$product) {

            toastr()->error('Sản phẩm không còn tồn tại!');
            return back();
        }


         // Tính toán giá tiền subtotal cho sản phẩm
        $subtotal = $product->price * $quantity;


        if(auth()->check()) {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => 1, // Số lượng mặc định là 1
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'subtotal' => $subtotal,
                ]
            ]);


            toastr()->success('Sản phẩm đã được thêm vào giỏ hàng của bạn!');

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

*/
