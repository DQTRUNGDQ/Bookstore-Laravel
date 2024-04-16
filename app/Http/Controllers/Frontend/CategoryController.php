<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoryController extends Controller
{
    public function products($id){
        $products = Category::join('products', 'category.id','=', 'products.id')
            ->where('category.id', $id)
            ->first();

        $category = $products->title;

        // Tạo biến breadcrumb
        $breadcrumb['category'] = $category;

        $totalQuantity = Cart::count();

        return view('frontend.categories',
            compact(
                'products',
                'breadcrumb',
                'totalQuantity'
            ));
    }
}