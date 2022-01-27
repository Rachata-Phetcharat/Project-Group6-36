<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/product' ,[\App\Http\Controllers\Api\ProductApiController::class, 'index'] );

Route::get('/type_product' ,[\App\Http\Controllers\Api\Type_productApiController::class, 'index'] );

Route::get('/show' ,[\App\Http\Controllers\Api\ShowApiController::class, 'index'] );

Route::get('/header' ,[\App\Http\Controllers\Api\HeaderApiController::class, 'index'] );
