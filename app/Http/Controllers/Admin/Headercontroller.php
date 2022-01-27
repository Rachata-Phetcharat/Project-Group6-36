<?php

namespace App\Http\Controllers\Admin;

use App\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class Headercontroller extends Controller
{
    public function index(){
        $header = Header::all();
        return view('admin.header.index',compact('header'));
    }

    //add
    public function add(){
        return view('admin.header.from_add_headers');
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

        $create_header = new Header;
        $request -> hasFile('image');
        $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path().'/admin/images/',$filename);
        Image::make(public_path().'/admin/images/'.$filename);
        $create_header->image = $filename;
        $create_header->id_admin = Auth::user()->id;

        $create_header->save();
        return redirect()->route('header')->with('success','บันทึกข้อมูลเรียบร้อย');
    }

    public function updateStatus(Request $request)
    {
        $headers = Header::findOrFail($request->id_header);
        $headers->status = $request->status;
        $headers->save();

        // Header::where('id_header', '!=', $request->id_header)->where('status', 'open')->update([
        //     'status' => 'close'
        // ]);

        return response()->json(['success'=>'Status change successfully.']);
    }

    //edit
    // public function edit(){
    //     return view('admin.header.from_edit_headers');
    // }

    //delete
    public function delete($id_header){
        $delete = Header::find($id_header);
        File::delete(public_path().'/admin/images/'.$delete->image);
        $delete->delete();
        return redirect('/Admin/header/index')->with('delete','ลบข้อมูลเรียบร้อย');
    }
}
