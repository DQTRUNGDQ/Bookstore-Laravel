<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\productdetails;
use App\Models\similarproducts;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

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

        $totalQuantity = Cart::count();


        return view('frontend.productdetails',
            compact(
                'productdetails',
                'breadcrumb',
                'totalQuantity',
            ));
    }
}
