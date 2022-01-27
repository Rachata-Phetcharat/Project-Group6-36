<?php

namespace App\Http\Controllers\Admin;

use App\Show;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class Showcontroller extends Controller
{
    public function index(){
        $show = Show::all();
        return view('admin.show.index', compact('show'));
    }

    //add
    public function add(){
        return view('admin.show.from_add_shows');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'image.required' => 'กรุณใส่รูปภาพ',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
            // 'image.size' => 'อัพโหลดรูปภาพได้ไม่เกิน 10 MB',
        ]
        );

        $show_product = new show;
        $request -> hasFile('image');
        $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path().'/admin/images/',$filename);
        Image::make(public_path().'/admin/images/'.$filename);
        $show_product->image = $filename;
        $show_product->id_admin = Auth::user()->id;

        $show_product->save();
        return redirect()->route('show')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    //edit
    // public function edit($id_show){
    //     $edit = Show::find($id_show);
    //     return view('admin.show.from_edit_shows' , compact('edit'));
    // }

    //delete
    public function delete($id_show){
        $delete = Show::find($id_show);
        File::delete(public_path().'/admin/images/'.$delete->image);
        $delete->delete();
        return redirect('/Admin/show/index')->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
