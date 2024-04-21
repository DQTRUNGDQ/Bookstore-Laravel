<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:256',
            'email_register' => 'required|string|email|unique:users,email',
            'password_register' => 'required|min:1|confirmed',
            'phone'=> 'min:10|max:10'
        ]);

        // Nếu validation fails, redirect lại với thông báo lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Tạo tài khoản không thành công.');
        }

        $user = User::create([
                'name' => $request->name,
                'email' => $request->email_register,
                'role' => 'user',
                'password' => Hash::make($request->password_register),
                'phone' => $request->phone, // Chắc chắn rằng bạn đã có trường phone từ dữ liệu POST
        ]);
        toastr()->success('Đã tạo tài khoản thành công');
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
