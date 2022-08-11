<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::group(['prefix' => '/'], function() {
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/shop',[HomeController::class,'shop'])->name('shop');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blog-detail',[HomeController::class,'blog_detail'])->name('blog_detail');

});
