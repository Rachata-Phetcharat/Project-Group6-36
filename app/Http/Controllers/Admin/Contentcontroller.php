<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class Contentcontroller extends Controller
{
    //index
    public function index(){
        $content = Content::all();
        return view('admin.body.index',compact('content'));
    }

    //add
    public function add(){
        return view('admin.body.from_add_bodys');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'heading' => 'required',
            'text' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'heading.required' => 'กรุณกรอกชื่อสินค้า',
            'text.required' => 'กรุณกรอกรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        $create_content = new Content;
        $create_content->heading = $request->heading;
        $create_content->text = $request->text;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $create_content->image = $filename;
        }
        else{
            $create_content->image = 'NOPIC.png';
        }

        $create_content->id_admin = Auth::user()->id;
        $create_content->save();
        return redirect()->route('content')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //edit
    public function edit($id){
        $edit_content = Content::find($id);
        return view('admin.body.from_edit_bodys',compact('edit_content'));
    }

    public function update(Request $request, $id_content ){

        $validatedData = $request->validate([
            'heading' => 'required',
            'text' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'heading.required' => 'กรุณกรอกชื่อสินค้า',
            'text.required' => 'กรุณกรอกรายละเอียดสินค้า',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        if($request->hasFile('image')){
            $update_content = Content::find($id_content);
            if ($update_content->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$update_content->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            Image::make(public_path().'/admin/images/'.$filename);
            $update_content->image = $filename;

            $update_content->heading = $request->heading;
            $update_content->text = $request->text;
        }
        else{

            $update_content = Content::find($id_content);

            $update_content->heading = $request->heading;
            $update_content->text = $request->text;
        }

        $update_content->save();
        return redirect()->route('content')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //delete
    public function delete($id_content){
        $delete = Content::find($id_content);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/Admin/content/index')->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
