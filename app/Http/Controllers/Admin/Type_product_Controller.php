<?php

namespace App\Http\Controllers\Admin;

use App\Type_product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Type_product_Controller extends Controller
{
    public function index(){
        $type_product = Type_product::all();
        return view('admin.type_product.index' , compact('type_product'));
    }

    //add
    public function add(){
        return view('admin.type_product.from_add_type_products');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:type_products|max:255'
        ],
        [
            'name.required' => 'กรุณกรอกประเภทสินค้า',
            'name.unique' => 'มีประเภทสินค้านี้แล้ว',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร'
        ]
        );

        $create_type = new Type_product;
        $create_type->name = $request->name;
        $create_type->id_admin = Auth::user()->id;
        $create_type->save();
        return redirect('/Admin/type_product/index')->with('success','บันทึกข้อมูลเรียบร้อย');
    }


    //edit
    public function edit($id_type){
        $edit = Type_product::find($id_type);
        return view('admin.type_product.from_edit_type_products' , compact('edit'));
    }

    public function update(Request $request,$id_type){

        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ],
        [
            'name.required' => 'กรุณกรอกประเภทสินค้า',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร'
        ]
        );

        $update_type = Type_product::find($id_type);
        $update_type->name = $request->name;
        $update_type->save();
        return redirect('/Admin/type_product/index')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //delete
    public function delete($id_type){
        $type = Type_product::find($id_type);
        if($type->product->count() > 0){
            return redirect()->back()->with('error','ไม่สามารถลบประเภทสินค้าได้เนื่องจากมีสินค้าอยู่');
        }
        Type_product::destroy($id_type);
        return redirect('/Admin/type_product/index')->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
