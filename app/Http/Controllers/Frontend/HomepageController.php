<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\banner;
use App\Models\dealtoday;
use App\Models\Populartool;
use App\Models\QA;
use App\Models\quicktool;
use App\Models\suggestionwidget;
use App\Models\bestproduct;
use App\Models\brandofficial;
use App\Models\careproduct;
use App\Models\productdetails;

class HomepageController extends Controller
{
    public function data(){
        
        $categories = Category::all();
        $populartools = populartool::all();
        $banners = banner::all();
        $bestproducts = bestproduct::all();
        $careproducts = careproduct::all();
        $deals = dealtoday::all();
        $QAs = QA::all();
        $quicktools = quicktool::all();
        $sgproducts = suggestionwidget::all();
        $brandproducts = brandofficial::all();
        $productdetails = productdetails::all();

        return view('backend.homepage', 
        compact(
            'categories','populartools','banners',
            'bestproducts','careproducts','deals','QAs',
            'quicktools','sgproducts','brandproducts', 'productdetails'
            )
        );
    }

}