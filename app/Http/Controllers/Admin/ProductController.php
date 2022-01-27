<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Type_product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware("vetifyIsType")->only(['add']);
    }

    public function index(){
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }

    //add
    public function add(){
        $Type_product =  Type_product::all();
        return view('admin.product.form_add_products',compact('Type_product'));
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'heading' => 'required',
            'desctiption' => 'required',
            'type_product' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'heading.required' => 'กรุณกรอกชื่อสินค้า',
            // 'heading.unique' => 'มีชื่อสินค้านี้แล้ว',
            'desctiption.required' => 'กรุณกรอกรายละเอียดสินค้า',
            'type_product.required' => 'กรุณเลือกประเภทสินค้า',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        $create_product = new Product;
        $create_product->heading = $request->heading;
        $create_product->text = $request->desctiption;
        $create_product->id_type = $request->type_product;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $create_product->image = $filename;
        }
        else{
            $create_product->image = 'NOPIC.png';
        }

        $create_product->id_admin = Auth::user()->id;
        $create_product->save();
        return redirect()->route('product')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //edit
    public function edit($id){
        $edit_product = Product::find($id);
        $Type_product =  Type_product::all();
        return view('admin.product.from_edit_products',compact('edit_product','Type_product'));
    }

    public function update(Request $request, $id_product){

        $validatedData = $request->validate([
            'heading' => 'required',
            'desctiption' => 'required',
            'type_product' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'heading.required' => 'กรุณกรอกชื่อสินค้า',
            'desctiption.required' => 'กรุณกรอกรายละเอียดสินค้า',
            'type_product.required' => 'กรุณเลือกประเภทสินค้า',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        if($request->hasFile('image')){
            $update_product = Product::find($id_product);
            if ($update_product->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$update_product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $update_product->image = $filename;

            $update_product->heading = $request->heading;
            $update_product->text = $request->desctiption;
            $update_product->id_type = $request->type_product;
        }
        else{

            $update_product = Product::find($id_product);

            $update_product->heading = $request->heading;
            $update_product->text = $request->desctiption;
            $update_product->id_type = $request->type_product;
        }

        $update_product->save();
        return redirect()->route('product')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //delete
    public function delete($id_product){
        $delete = Product::find($id_product);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/Admin/product/index')->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
