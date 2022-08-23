<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use function MongoDB\BSON\toJSON;

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
        $proDetail = ProductDetail::all();
        $products->load('ProductCategory');
        $products->load('brand');
        $products->load('Image');
        //$products->load('ProductDetail');
        //return view('shop',compact('products','categories','brands','proDetail'));
        return response()->json($products);
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
        $products = Product::find($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($products->ProductComment->toArray(),'rating'));
        $countRating = count($products->ProductComment);
        if($countRating != 0) {
            $avgRating = $sumRating/$countRating;
        }
        $products->load('ProductCategory');
        $products->load('brand');
        $products->load('ProductComment');
        $products->load('ProductSize');
        $products->load('ProductColor');
        $products->load('Image');
        //return view('product',compact('products','avgRating'));
        return response()->json($products);
    }

    public function filter($products, Request $request) {
        $brands = $request->brand ?? [];
        $brand_id = array_keys($brands);
        $size = $request->size ?? [];
        $size_id = array_keys($size);
        $color = $request->color ?? [];
        $color_id = array_keys($color);
        $products = $color_id != null ? $products->whereIn('color_id', $color_id) : $products;
        $products = $size_id != null ? $products->whereIn('size_id', $size_id) : $products;
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
