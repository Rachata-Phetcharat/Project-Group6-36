<?php

namespace App\Http\Middleware;

use Closure;
use App\Type_product;

class VerifType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Type_product::all()->count() == 0){
            return redirect()->route('type_product')->with('type','ต้องมีประเภทสินค้าอย่างน้อย 1 ประเภท');
        }
        return $next($request);
    }
}
