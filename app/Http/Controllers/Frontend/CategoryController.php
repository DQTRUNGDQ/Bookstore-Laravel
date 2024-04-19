<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\CategoryDetail;
use App\Models\Products;

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

        $totalQuantity = Cart::count();

        return view('frontend.categories',
            compact(
                'category_details',
                'breadcrumb',
                'totalQuantity',
                'categoryDetails',
                'product'
            ));
    }
}