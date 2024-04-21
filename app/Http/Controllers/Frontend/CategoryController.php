<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
//use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\CategoryDetail;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CategoryController extends Controller
{
    public function products($id){

        // Lấy ra chi tiết danh mục và sản phẩm tương ứng với danh mục mình chọn
        $category_details = Category::join('products', 'category.id','=', 'products.category_id')
            ->where('category.id', $id)
            ->first();


        // Lấy tất cả dữ liệu trong bảng category_details dựa vào category_id
        $categoryDetails = CategoryDetail::where('category_id', $id)->get();


        $category = $category_details->title;

        //Lấy ra tất cả sản phẩm
        $product = Products::all();

        // Tạo biến breadcrumb
        $breadcrumb['category'] = $category;


        // HIỂN THỊ TỔNG SỐ SẢN PHẨM TRONG GIỎ HÀNG LÊN TRANG CHỦ

        // $totalQuantity = Cart::count();

        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalQuantity = 0;

        foreach ($cartItems as $item) {
                $totalQuantity += $item->quantity;
        }

        return view('frontend.categories',
            compact(
                'category_details',
                'breadcrumb',
                'totalQuantity',
                'categoryDetails',
                'product',
                'totalQuantity'
            ));
    }
}
