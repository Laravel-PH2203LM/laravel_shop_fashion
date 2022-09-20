<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Resources\ProductResource;
class ShopController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop(Request $request)
    {
        $products = Product::where('status','1')->search()->paginate(6);
        $categories = ProductCategory::where('status','1')->get();
        $brands = Brand::where('status','1')->get();
        return view('shop',compact('products','categories','brands'));
    }
    public function category($categoryName, Request $request) {
        $categories = ProductCategory::category()->get();
        $brands = Brand::all();
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();
        return view('shop',compact('categories','brands'));
    }

    public function getColor($pid, $sid) {
        $data = ProductAttribute::where(['product_id'=> $pid, 'size_id' => $sid])->distinct('color_id')->with('attr')->get();

        return response()->json($data);
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
            return view('product', compact('products'));
    }
    //TODO BAD CODE, NHÌN KHÔNG KHÁC GÌ TRASH
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
    public function search()
    {
        return view('search');
    }
}

