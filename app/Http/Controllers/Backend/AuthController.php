<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\ResultType\Success;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

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

            $cartItems = $request->session()->get('cart');
            
            return redirect()->route('auth.homepage')
            ->with('success','Đăng nhập thành công');
            
        }else{
            return redirect()->route('auth.homepage')
            ->with('error','Email hoặc Mật khẩu không chính xác');
        }   
    }

    public function logout(Request $request){

        Auth::logout();

        $cartItems = Cart::content(); 
    
        if ($cartItems->isNotEmpty()) {
            // Lưu dữ liệu giỏ hàng vào Session
            session()->put('cart', $cartItems);

        }

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('auth.homepage');
    }
}