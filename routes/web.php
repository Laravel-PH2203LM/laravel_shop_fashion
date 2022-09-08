<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ShopController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\ProductAttrController;

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
    //Route::get('/login',[HomeController::class,'login'])->name('login');
});
Route::group(['prefix'=>'shop/'],function() {
    Route::get('/',[ShopController::class,'index'])->name('index');
    //Route::get('/{categoryName}',[ShopController::class,'category'])->name('category');
    Route::get('/product/{id}',[ShopController::class,'show'])->name('show');
//    Route::get('/search',[ShopController::class,'search'])->name('search');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/trang-chu', [AdminHomeController::class,'index'])->name('index');
    /* Danh mục */
    Route::get('/danh-muc', [CategoriesController::class,'category'])->name('category');
    Route::get('/them-danh-muc', [CategoriesController::class,'create'])->name('category_add');
    Route::post('/them-danh-muc', [CategoriesController::class,'store']);
    Route::get('/sua-danh-muc-{id}',[CategoriesController::class,'edit'])->name('category_edit');
    Route::post('/sua-danh-muc-{id}',[CategoriesController::class,'update'])->name('category_edit');
    Route::get('/xoa-danh-muc-{id}', [CategoriesController::class,'destroy'])->name('category_del');
    /*End */

    /* Sản phẩm */
    Route::get('/san-pham', [ProductController::class,'product'])->name('product');
    Route::get('/xem-san-pham-{id}', [ProductController::class,'show'])->name('product_view');
    Route::get('/them-san-pham', [ProductController::class,'create'])->name('product_add');
    Route::post('/them-san-pham', [ProductController::class,'store']);
    Route::get('/sua-san-pham-{id}', [ProductController::class,'edit'])->name('product_edit');
    Route::post('/sua-san-pham-{id}', [ProductController::class,'update']);
    Route::get('/xoa-san-pham-{id}', [ProductController::class,'destroy'])->name('product_del');
    /* End*/

    /* Thương hiệu */
    Route::get('/thuong-hieu', [BrandController::class,'brand'])->name('brand');
    Route::get('/them-thuong-hieu', [BrandController::class,'create'])->name('brand_add');
    Route::post('/them-thuong-hieu', [BrandController::class,'store']);
    Route::get('/sua-thuong-hieu-{id}', [BrandController::class,'edit'])->name('brand_edit');
    Route::post('/sua-thuong-hieu-{id}', [BrandController::class,'update']);
    Route::get('/xoa-thuong-hieu-{id}', [BrandController::class,'destroy'])->name('brand_del');
    /* End */

    /* Thông tin thêm */
    Route::get('/thuoc-tinh', [ProductAttrController::class,'productAttr'])->name('productAttr');
    Route::get('/them-thuoc-tinh', [ProductAttrController::class,'create'])->name('attr_add');
    Route::post('/them-thuoc-tinh', [ProductAttrController::class,'store']);
    /* End */
    Route::get('/quan-li-nguoi-dung', [CustomerController::class,'index'])->name('index');
});
Route::get('admin/login', [AdminHomeController::class,'login'])->name('login');
Route::post('admin/login', [AdminHomeController::class,'postlogin']);
Route::get('admin/dang-xuat', [AdminHomeController::class, 'logout'])->name('logout');
