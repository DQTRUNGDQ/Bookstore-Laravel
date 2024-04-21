<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use App\Models\similarproducts;
use Illuminate\Support\Facades\DB;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ShowProductController extends Controller
{
    public function product($id){

        $productdetails = Products::join('product_details', 'products.id','=', 'product_details.product_id')
                    ->where('products.id', $id)
                    ->first();

        $category = $productdetails->category;

        $subcategory = $productdetails->subcategory;


        // Tạo biến breadcrumb
        $breadcrumb['category'] = $category;
        $breadcrumb['subcategory'] = $subcategory;
        $breadcrumb['name'] = $productdetails->name;


        if(!$productdetails){
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }

        // HIỂN THỊ TỔNG SỐ SẢN PHẨM TRONG GIỎ HÀNG LÊN TRANG CHỦ

        // $totalQuantity = Cart::count();

        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalQuantity = 0;

        foreach ($cartItems as $item) {
                $totalQuantity += $item->quantity;
        }

        //Ấn vào breadcrumb sẽ điều hướng về trang chi tiết danh mục mà sản phẩm ấy thuộc về
        $product = Products::find($id);

        $categoryId = $product->category_id;

        return view('frontend.productdetails',
            compact(
                'productdetails',
                'breadcrumb',
                'totalQuantity',
                'categoryId'
            ));
    }
}
