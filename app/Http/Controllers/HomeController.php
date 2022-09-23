<?php

namespace App\Http\Controllers;

use App\Helper\ShoppingCart;
use App\Models\Blog;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ShoppingCart $cart)
    {
        $products = Product::where('status','1')->search()->get();
        $products->load('ProductImage');
        $categories = ProductCategory::where('status','1')->get();
        return view('index',compact('categories','products','cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function my_account($id) {
        $orders = Order::where('user_id', $id)->get();
        //$orders_detail = OrderDetail::with('Sizez')->get();
        //dd($orders);
        $user = User::where('id',$id)->get();
        return view('my_account',compact('user','orders'));
    }
}
