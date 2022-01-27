<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index1')->name('welcome');


Auth::routes();

Route::middleware(['auth', 'vetifyisadmin'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    //Admin
    Route::get('/Admin/index', 'Admin\AdminController@index')->name('admin');

    //Product
    Route::get('/Admin/product/index', 'Admin\ProductController@index')->name('product');
    Route::get('/Admin/product/add_products', 'Admin\ProductController@add')->name('add_product');

    Route::post('/Admin/product/create', 'Admin\ProductController@create')->name('create_product');
    Route::post('/Admin/product/update/{id}', 'Admin\ProductController@update');
    Route::get('/Admin/product/edit_products/{id}', 'Admin\ProductController@edit');
    Route::get('/Admin/product/delete/{id}', 'Admin\ProductController@delete');

    //Type_product
    Route::get('/Admin/type_product/index', 'Admin\Type_product_Controller@index')->name('type_product');
    Route::get('/Admin/type_product/from_add_type_products', 'Admin\Type_product_Controller@add')->name('add_type');

    Route::post('/Admin/type_product/create', 'Admin\Type_product_Controller@create')->name('create_type');
    Route::post('/Admin/type_product/update/{id}', 'Admin\Type_product_Controller@update');
    Route::get('/Admin/type_product/edit_type/{id}', 'Admin\Type_product_Controller@edit');
    Route::get('/Admin/type_product/delete/{id}', 'Admin\Type_product_Controller@delete');

    //Show
    Route::get('/Admin/show/index', 'Admin\Showcontroller@index')->name('show');
    Route::get('/Admin/show/add_shows', 'Admin\Showcontroller@add')->name('add_show');

    Route::post('/Admin/show/create', 'Admin\Showcontroller@create')->name('create_show');
    Route::post('Admin/show/update/{id}', 'Admin\Showcontroller@update');
    // Route::get('/Admin/show/edit_show/{id}' , 'Admin\Showcontroller@edit');
    Route::get('/Admin/show/delete/{id}', 'Admin\Showcontroller@delete');

    //Body
    Route::get('/Admin/content/index', 'Admin\Contentcontroller@index')->name('content');
    Route::get('/Admin/content/from_add_bodys', 'Admin\Contentcontroller@add')->name('add_body');

    Route::post('/Admin/content/create', 'Admin\Contentcontroller@create')->name('create_content');
    Route::post('/Admin/content/update/{id}', 'Admin\Contentcontroller@update');
    Route::get('/Admin/content/edit_create/{id}', 'Admin\Contentcontroller@edit');
    Route::get('/Admin/content/delete/{id}', 'Admin\Contentcontroller@delete');

    //Header
    Route::get('/Admin/header/index', 'Admin\Headercontroller@index')->name('header');
    Route::get('/Admin/header/from_add_headers', 'Admin\Headercontroller@add')->name('add_header');
    Route::get('/Admin/header/from_edit_headers', 'Admin\Headercontroller@edit')->name('edit_header');
    Route::get('/Admin/header/delete/{id}', 'Admin\Headercontroller@delete');
    Route::get('/status/update', 'Admin\Headercontroller@updateStatus')->name('header.update.status');

    Route::post('/Admin/header/create', 'Admin\Headercontroller@create')->name('create_header');
});

//front-end
// Route::get('/welcome', 'front\indexController@index')->name('index');
Route::get('/product', 'front\productController@product')->name('product.f');
Route::get('/word', 'front\workController@work')->name('work');
Route::get('/contact', 'front\contactController@contect')->name('contact');
