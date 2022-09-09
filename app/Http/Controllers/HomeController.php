<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

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
        $data = [];
        foreach ($products as $product) {
            $data[] = [
              'id' => $product->id,
               'brand'=>$product->brand->name,
                'category'=>$product->ProductCategory->name,
                'name'=> $product->name,
                'description' => $product->description,
                'price' =>$product->price,
                'qty'=>$product->qty,
                'discount'=>$product->discount,
                'status'=>$product->status,
                'size'=>$product->Detail->size,
                'color'=>$product->Detail->color,
                'images' => $product->ProductImage,
            ];
        }
        return response()->json($data);
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

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function shop()
//    {
//        return view('shop');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $blogs = Blog::limit(6)->get();
        $blog_recents = Blog::orderBy('id','DESC')->limit(3)->get();
        return view('blog',compact('blogs','blog_recents'));
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
}
