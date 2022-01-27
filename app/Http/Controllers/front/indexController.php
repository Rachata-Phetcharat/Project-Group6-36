<?php

namespace App\Http\Controllers\front;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
