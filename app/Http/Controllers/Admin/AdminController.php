<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Header;
use App\Show;
use App\Type_product;

class AdminController extends Controller
{
    public function index(){
        $product = Product::all();
        $type_product = Type_product::all();
        $header = Header::all();
        $show = Show::all();
        return view('admin.index' , compact('product' , 'type_product' , 'header' , 'show'));
    }
}
