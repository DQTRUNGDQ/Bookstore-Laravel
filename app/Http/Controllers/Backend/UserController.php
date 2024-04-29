<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function AddUser()
    {
        return view('backend.user.crud.adduser');
    }

    public function AddUsertoDB(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:256',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => ['nullable', 'string', 'regex:/^0\d{9,10}$/', Rule::unique('users')->ignore($request->user)],
        ]);


        $user = new User();
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->birthday = $request->input('birthday');
        $user->phone = $request->input('phone');
        $user->province = $request->province;
        $user->address = $request->input('address');
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

        toastr()->success('Người dùng đã được thêm thành công!');

        return view('backend.user.crud.adduser')->with('success', 'Người dùng đã được thêm thành công.');
    }

    public function EditUser($id)
    {
        $user = User::find($id);

        return view('backend.user.crud.edituser', compact('user'));
    }

    public function updateUserToDB(Request $request, $id)
    {

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->birthday = $request->input('birthday');
        $user->phone = $request->input('phone');
        $user->province = $request->province;
        $user->address = $request->input('address');
        $user->image = $request->input('file');
        $user->description = $request->input('productdesc');
        $user->province_id = $request->input('province_id');
        $user->district_id = $request->input('district_id');
        $user->ward_id = $request->input('ward_id');

        if ($request->hasFile('avatar')) {
            //Có file đính kèm trong form Update thì sẽ tìm file ảnh cũ và xóa nó đi

            $oldimage = 'upload/img/users/' . $user->image;
            if (File::exists($oldimage)) {
                File::delete(($oldimage));
            };

            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
            $filename = $extension;
            $file->move('upload/img/users/', $filename);
            // Gán đường dẫn ảnh vào thuộc tính 'image' của đối tượng người dùng
            $user->image = 'upload/img/users/' . $filename;
        }

        $user->update();

        return redirect()->back()->with('success', 'Người dùng đã được cập nhật thành công.');
    }

    public function DeleteUser($id)
    {
        $user = User::find($id);

        $avatar = $user->image;

        if (File::exists($avatar)) {
            File::delete(($avatar));
        };

        $user->delete();

        return redirect()->back()->with('success', 'Người dùng đã được xóa vĩnh viễn thành công.');
    }



    public function index()
    {
        $template  = 'backend.user.index';

        $users = User::all();

        return view('backend.dashboard.layout', compact(
            'template',
            'users'
        ));
    }


}