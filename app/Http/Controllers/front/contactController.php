<?php

namespace App\Http\Controllers\front;

use App\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contect(){
        return view('front-end.contact')->with('headers' , Header::where('status', 'open')->get());
    }
}
