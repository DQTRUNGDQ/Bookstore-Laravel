<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\productdetails;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $config = $this->config();
        $template  = 'backend.product.index';

        $products = Products::all();

        $productDetails = productdetails::all();

        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'products',
            'productDetails'
        ));
    }

    public function AddProduct()
    {
        return view('backend.product.crud.addproduct');
    }

    public function AddProducttoDB(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:256',
        ]);


        $products = new Products();
        $products->name = $request->input('name');
        $products->author = $request->input('author');
        $products->price= $request->input('price');
        $products->rating = $request->input('rating');
        $products->discount_percent = $request->input('discount_percent');
        $products->category_id = $request->input('category_id');
        $products->category = $request->category;
        $products->subcategory = $request->input('subcategory');
        $products->delivery_time = $request->input('delivery_time');
        $products->image = $request->input('image');

        $featureCount = 3;
        for ($i = 1; $i <= $featureCount; $i++) {
                    $featureFieldName = 'feature' . $i;
                    $products->$featureFieldName = $request->input($featureFieldName);
        }

        $thumbnailCount = 4; // Số lượng thumbnail bạn muốn gán
        for ($i = 1; $i <= $thumbnailCount; $i++) {
            $thumbnailFieldName = 'thumbnail' . $i;
            $products->$thumbnailFieldName = $request->input($thumbnailFieldName);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
            $filename = $extension;
            $file->move('upload/img/Products/vanhoc/', $filename);
            // Gán đường dẫn ảnh vào thuộc tính 'image' của đối tượng người dùng
            $products->image = 'upload/img/Products/vanhoc/' . $filename;
        }

        for ($i = 1; $i <= $thumbnailCount; $i++) {
            $thumbnailFieldName = 'thumbnail' . $i;
            if ($request->hasFile($thumbnailFieldName)) {
                $file = $request->file($thumbnailFieldName);
                $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
                $filename = $extension;
                $file->move('upload/img/Products/vanhoc/Thumbnail/' . $thumbnailFieldName .'/', $filename);
                // Gán đường dẫn ảnh vào thuộc tính 'thumbnail1', 'thumbnail2', 'thumbnail3' hoặc 'thumbnail4'
                $products->$thumbnailFieldName = 'upload/img/Products/vanhoc/Thumbnail/' . $thumbnailFieldName . '/' . $filename;
            }
        }

        $products->save();

        toastr()->success('Người dùng đã được thêm thành công!');

        return view('backend.product.crud.addproduct')->with('success', 'Sách đã được thêm thành công.');
    }


    public function EditProducts($id)
    {
        $product = Products::find($id);

        return view('backend.product.crud.editproduct', compact('product'));
    }

    public function DeleteProduct($id)
    {
        $user = User::find($id);

        $avatar = $user->image;

        if (File::exists($avatar)) {
            File::delete(($avatar));
        };

        $user->delete();

        return redirect()->back()->with('success', 'Người dùng đã được xóa vĩnh viễn thành công.');
    }


    private function config()
    {
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