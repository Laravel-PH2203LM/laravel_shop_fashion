<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
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
    public function index()
    {
        $products = Product::where('status','1')->search()->get();
        $products->load('ProductImage');
        $categories = ProductCategory::where('status','1')->get();
        return view('index',compact('categories','products'));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog_detail()
    {
        return view('blog_detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request) {
        $data = $request->only('email','password','remember_token');
        if (Auth::attempt($data)) {
            if(Auth::user()->level === 0)
            return redirect()->intended('admin/trang-chu')->with('Đăng nhập thành công');
        } if (Auth::user()->level === 1){
            return redirect()->route('index');
        }
        return redirect()->route('login');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request){
        $request->validate([
            'email'=> 'required|min:3|max:100' ,
            'name'=> 'required|min:3|max:100',
            'password'=> 'required|min:3|max:100'
        ]);
        $data = $request->only('email','name','password');
        $register = new User();
        $register->name = $data['name'];
        $register->email = $data['email'];
        $register->password = Hash::make($data['password']);
        $register->level = 1;
        $register->save();
        return redirect()->route('login');
    }

    public function about()
    {
        return view('about');
    }
    public function my_account() {
        return view('my_account');
    }
}
