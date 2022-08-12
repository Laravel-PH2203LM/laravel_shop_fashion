<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ShopController;

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
// Xử lí tất cả liên quan đến trang chủ
Route::group(['prefix' => '/'], function() {
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blog-detail',[HomeController::class,'blog_detail'])->name('blog_detail');
    Route::get('/cart',[HomeController::class,'cart'])->name('cart');
    Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::get('/shop',[ShopController::class,'index'])->name('index');
    Route::get('/search',[ShopController::class,'search'])->name('search');
    Route::get('/product/{id}',[ShopController::class,'show'])->name('show');
});
