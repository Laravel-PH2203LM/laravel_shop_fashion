<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
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
    public function index(Request $request)
    {
        $categories = ProductCategory::all();
        $products = Product::search()->paginate(6);
        $products = $this->filter($products, $request);
        $brands = Brand::all();
        return view('shop',compact('products','categories','brands'));
    }
    public function search() {
        $products = Product::search()->get();
        return view('search',compact('products'));
    }
    public function category($categoryName, Request $request) {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();
        return view('shop',compact('products','categories','brands'));
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

    public function filter($products, Request $request) {
        $brands = $request->brand ?? [];
        $brand_id = array_keys($brands);
        $products = $brand_id != null ? $products->whereIn('brand_id', $brand_id) : $products;
        return $products;
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
