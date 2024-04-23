<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Cart;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function success($orderId)
    {
         // Lấy ID của người dùng hiện tại
        $userId = Auth::id();

        // Lấy thông tin đơn hàng của người dùng đang đăng nhập
        $order = Orders::where('user_id', $userId)->findOrFail($orderId);

        return view('frontend.ordersuccess', compact('order'));
    }

    public function placeOrder()
    {
        $user = Auth::user();

        $userId = Auth::id();

        // Lưu thông tin hóa đơn vào cơ sở dữ liệu
        $order = new Orders;
        $order->customer_name = $user->name;;
        $order->phone_number = $user->phone;
        $order->address =  $user->address;;
        $order->user_id = $user->id;

        // Lưu và lấy ID của hóa đơn
        $order->save();
        $orderId = $order->id;

        $selectedProducts = Cart::where('checked', 1)
                                ->where('user_id', $userId)
                                ->get();

        // TỔNG TIỀN CỦA CÁC SẢN PHẨM ĐƯỢC CHECK
        $totalPrice = $selectedProducts->sum(function ($item) {
                return $item->price * $item->quantity;
        });

        // TỔNG TIỀN CỦA CÁC SỐ LƯỢNG ĐƯỢC CHECK
        $totalQuantity = $selectedProducts->sum('quantity');

        $shippingFee = 12000;

        //lƯU THÔNG TIN CHI TIẾT HÓA ĐƠN VÀO CSDL


        $orderDetailsSaved = true;

        foreach ($selectedProducts as $item) {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $orderId;
            $orderDetail->product_id = $item->product_id;
            $orderDetail->quantity = $item->quantity;
            $orderDetail->totalprice = $totalPrice += $shippingFee;
            if (!$orderDetail->save()) {
            $orderDetailsSaved = false;
        }
        }

        // Xóa các đơn hàng đã được đặt khỏi giỏ hàng
        if ($orderDetailsSaved) {
            Cart::where('checked', 1)
                ->where('user_id', $userId)
                ->delete();
        }


        // Điều hướng sang trang đặt hàng thành công và truyền ID của hóa đơn
         return view('frontend.ordersuccess', compact('order', 'selectedProducts', 'totalPrice', 'totalQuantity','shippingFee'));
    }
}
