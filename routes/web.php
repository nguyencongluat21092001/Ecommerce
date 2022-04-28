<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Storage;

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
//     // return view('front.index');
//     // return \App\Models\Product::find(1)->productcategory;
//     // return \App\Models\Product::all();
//     //-----      Models + name function   ---- //
// });


Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ShopController::class,'product']);
Route::get('/blog',[ShopController::class,'blog']);

Route::get('/productdetail/{id}',[ShopController::class,'showdetail'])->name('detail');
Route::post('/productdetail/{id}',[ShopController::class,'postComment']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listproduct', [App\Http\Controllers\HomeController::class, 'listproduct'])->name('listproduct');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');


//blog
Route::get('/listBlog', [App\Http\Controllers\HomeController::class, 'listblog'])->name('post.blog');
Route::get('/addBlog', [App\Http\Controllers\HomeController::class, 'addBlog']);
Route::post('/storeblog', [App\Http\Controllers\HomeController::class, 'store'])->name('store.blog');
