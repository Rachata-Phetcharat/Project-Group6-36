<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Header;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        $products = Product::query()
            ->where('image', '!=', 'NOPIC.png')
            ->get();

        $count = ceil($products->count() / 3);

        // $new = [];

        // for($i = 0; $i < $count; $i++) {
        //     foreach($products->skip($i*3)->take(3) as $items){
        //         $new[$i][] = $items;
        //     }
        // }

        // dd($new);

        return view('welcome', compact('products', 'count'))->with('headers' , Header::where('status', 'open')->get());
    }
}
