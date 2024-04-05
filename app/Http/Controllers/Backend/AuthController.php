<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Support\Facades\Auth;
USE Illuminate\Support\Facades\Hash;
USE App\Models\User;
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

    public function register(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:256',
            'email_register' => 'required|string|email|unique:users,email',
            'password_register' => 'required|string|min:8|confirmed'
        ]);


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email_register');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password_register'));
        $user->role = 'user';
        $user->save();

        Auth::login($user);

        return redirect()->route('auth.homepage')->with('success', 'Đăng ký thành công');

    }

    public function login(AuthRequest $request){  
        $credentials = [
            'email' => $request->input('email'), 
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->role === 'admin') {
            return redirect()->route('dashboard.index')
                             ->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->route('auth.homepage')
                                ->with('success', 'Đăng nhập thành công');
            }
            
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