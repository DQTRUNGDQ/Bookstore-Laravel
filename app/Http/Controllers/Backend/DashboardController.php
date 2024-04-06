<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {

    }


    public function index(){
        
        $config = $this->config();
            
        $template = 'backend.dashboard.home.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config'
        ));
    }

    private function config(){
        return [
            'js' => [
                'temp/js/plugins/flot/jquery.flot.js',
                'temp/js/plugins/flot/jquery.flot.tooltip.min.js',
                'temp/js/plugins/flot/jquery.flot.spline.js',
                'temp/js/plugins/flot/jquery.flot.resize.js',
                'temp/js/plugins/flot/jquery.flot.pie.js',
                'temp/js/plugins/flot/jquery.flot.symbol.js',
                'temp/js/plugins/flot/jquery.flot.time.js',
                'temp/js/plugins/peity/jquery.peity.min.js',
                'temp/js/demo/peity-demo.js',
                'temp/js/inspinia.js',
                'temp/js/plugins/pace/pace.min.js',
                'temp/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'temp/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                'temp/js/plugins/easypiechart/jquery.easypiechart.js',
                'temp/js/plugins/sparkline/jquery.sparkline.min.js',
                'temp/js/demo/sparkline-demo.js'
            ]
        ];
    }
}