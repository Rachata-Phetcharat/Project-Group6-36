<?php

namespace App\Http\Controllers\front;

use App\Show;
use App\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class workController extends Controller
{
    public function work(){
        return view('front-end.work')->with('shows' , Show::all())->with('headers' , Header::where('status', 'open')->get());
    }
}
