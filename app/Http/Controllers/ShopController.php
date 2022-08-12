<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ShopController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop',compact('products'));
    }
    public function search() {
        $products = Product::all();
        if(request('search')) {
            $search = request('search');
            $products = Product::where('name','like','%'.$search.'%')->get();
        }
        //dd($products);
        return view('search',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Products = Product::find($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($Products->ProductComment->toArray(),'rating'));
        $countRating = count($Products->ProductComment);
        if($countRating != 0) {
            $avgRating = $sumRating/$countRating;
        }
        return view('product',compact('Products','avgRating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
