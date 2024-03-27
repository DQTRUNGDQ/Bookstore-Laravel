<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\dealtoday;


class ShowProductController extends Controller
{
    public function product($id){

        $productdetails = Dealtoday::join('productdetails', 'dealtoday.dealtoday_id','=', 'productdetails.dealtoday_id')
                    ->where('dealtoday.dealtoday_id', $id)
                    ->first();

        
            
        if(!$productdetails){
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }
        
        // $productdetails = productdetails::findOrFail($id);
        // $dealtoday = dealtoday::where('dealtoday_id', $productdetails->dealtoday_id);
        return view('frontend.productdetails', compact('productdetails'));
    }

}