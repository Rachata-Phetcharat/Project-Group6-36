<?php

namespace App\Http\Controllers\front;

use App\Product;
use App\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        return view('front-end.product')->with('products' , product::all())->with('headers' , Header::where('status', 'open')->get());
    }
}
