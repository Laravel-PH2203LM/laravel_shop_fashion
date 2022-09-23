<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\ProductAttrController;
use App\Http\Controllers\CartController;

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

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'postLogin']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'postregister']);

Route::prefix('/')->group(function (){
    Route::get('',[HomeController::class,'index'])->name('index');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/cart',[CartController::class,'view'])->name('view');
    Route::get('/update_cart/{id}',[CartController::class,'update'])->name('cart.update');
    Route::get('/delete_cart/{id}',[CartController::class,'delete'])->name('cart.delete');
    Route::get('/cart_clear/',[CartController::class,'clear'])->name('cart.clear');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');
    Route::post('/order',[CartController::class,'order'])->name('order');
    Route::get('/my-account/{id}',[HomeController::class,'my_account'])->middleware('auth');
    Route::post('/my-account{id}',[HomeController::class,'my_account_add'])->middleware('auth');
});

Route::group(['prefix'=>'shop/'],function() {
    Route::get('',[ShopController::class,'shop'])->name('shop');
    Route::get('category/{id}',[ShopController::class,'categoryFill'])->name('categoryFill');
    Route::get('brand/{id}',[ShopController::class,'brandFill'])->name('brandFill');
    Route::get('product/{id}',[ShopController::class,'show'])->name('show');
    Route::post('product/rating/{id}',[ShopController::class,'rating'])->name('rating');
    Route::get('product/getcolor/{pid}/{sid}',[ShopController::class,'getColor'])->name('getColor');
    Route::get('addcart/{pro}',[CartController::class,'add'])->name('cart.add');
});

Route::prefix('admin')->middleware(\App\Http\Middleware\CheckAdminLogin::class)->group(function () {
    Route::get('/trang-chu', [AdminHomeController::class,'home'])->name('home');
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
    Route::get('/xoa-san-pham-{product}', [ProductController::class,'destroy'])->name('product_del');
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
    //Route::get('/quan-li-nguoi-dung', [AuthController::class,'index'])->name('index');
});
//Route::get('admin/login', [AdminHomeController::class,'login'])->name('login');
//Route::post('admin/login', [AdminHomeController::class,'postlogin']);
//Route::get('admin/register', [AdminHomeController::class,'register'])->name('register');
//Route::post('admin/register', [AdminHomeController::class,'postregister']);
//Route::get('admin/dang-xuat', [AdminHomeController::class, 'logout'])->name('logout');
