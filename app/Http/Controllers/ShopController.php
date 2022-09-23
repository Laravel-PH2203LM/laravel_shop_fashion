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
        return view('shop',compact('products'));
    }
    public function categoryFill($id) {
        $products = Product::where('product_category_id',$id)->search()->paginate(6);
        return view('shop',compact('products'));
    }

    public function brandFill($id) {
        $products = Product::where('brand_id',$id)->search()->paginate(6);
        return view('shop',compact('products'));
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

