<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        
    }

    public function AddUser(){
        return view('backend.user.crud.adduser');
    }

    public function index(){
        $config = $this->config();
        $template  = 'backend.user.index';

        $users = User::all();
        
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users'
        ));
    }


    private function config(){
        return [
            'js' => [
                'temp/js/plugins/switchery/switchery.js'
            ],

            'css' => [
                'temp/css/plugins/switchery/switchery.css'
            ]
        ];
    }

}