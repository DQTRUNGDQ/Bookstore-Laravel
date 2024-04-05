<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        
    }

    public function AddUser(){
        return view('backend.user.crud.adduser');
    }

    public function AddUsertoDB(Request $request){
    

        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->birthday = $request->input('birthday');
        $user->phone = $request->input('phone');
        $user->province = $request->province;
        $user->image = $request->input('file');
        $user->description = $request->input('productdesc');
        $user->province_id = $request->input('province_id');
        $user->district_id = $request->input('district_id');
        $user->ward_id = $request->input('ward_id');

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
            $filename = $extension;
            $file->move('upload/img/users/', $filename);
            // Gán đường dẫn ảnh vào thuộc tính 'image' của đối tượng người dùng
            $user->image = 'upload/img/users/' . $filename;
        }

        $user->save();

        return view('backend.user.crud.adduser')->with('success', 'Người dùng đã được thêm thành công.');
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