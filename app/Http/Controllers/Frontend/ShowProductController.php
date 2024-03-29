<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\dealtoday;
use App\Models\productdetails;
use App\Models\similarproducts;
use Illuminate\Support\Facades\DB;

class ShowProductController extends Controller
{
    public function product($id){

        $productdetails = Dealtoday::join('productdetails', 'dealtoday.dealtoday_id','=', 'productdetails.dealtoday_id')
                    ->join('similarproducts', 'dealtoday.dealtoday_id','=', 'similarproducts.dealtoday_id')
                    ->where('dealtoday.dealtoday_id', $id)
                    ->first();

        $similarproducts = similarproducts::all();

        $products = DB::table('dealtoday')->get();

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

        
        return view('frontend.productdetails', compact('productdetails','similarproducts','breadcrumb','products'));
    }


}