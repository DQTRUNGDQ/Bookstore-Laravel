<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\ResultType\Success;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function homepage()
    {
        if(Auth::id() > 0){
            return redirect()->route('dashboard.index');
        }
        else{
             return view('backend.homepage');
        }
       
    }

    public function product()
    {
        if(Auth::id() > 0){
            return redirect()->route('dashboard.index');
        }
        else{
             return view('frontend.productdetails');
        }
       
    }

    public function login(AuthRequest $request){  
        $credentials = [
            'email' => $request->input('email'), 
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')
            ->with('success','Đăng nhập thành công');
        }else{
            return redirect()->route('auth.homepage')
            ->with('error','Email hoặc Mật khẩu không chính xác');
        }   
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('auth.homepage');
    }
}