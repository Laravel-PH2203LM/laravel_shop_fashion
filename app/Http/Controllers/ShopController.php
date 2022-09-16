<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Attribute;
use App\Models\Size;
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
    public function index(Request $request)
    {
        // $data = [];
        // $products = Product::where('status','1')->search()->get();
        // $products = $this->filter($products, $request);
        // foreach ($products as $product) {
        //     //$product->load('Image');
        //     $data[] = [
        //       'id' => $product->id,
        //         'category'=>$product->ProductCategory->name,
        //         'brand'=>$product->brand->name,
        //         'name'=>$product->name,
        //         'description'=>$product->description,
        //         'price'=>$product->price,
        //         'qty' =>$product->qty,
        //         'discount'=>$product->discount,
        //         'status'=>$product->status,
        //         'size'=>$product->Detail->size,
        //         'color'=>$product->Detail->color,
        //         'images'=>$product->ProductImage
        //     ];
        // }
        // return response()->json($data);
        return view('shop');
    }
    public function category($categoryName, Request $request) {
        $categories = ProductCategory::category()->get();
        $brands = Brand::all();
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();
        return view('shop',compact('categories','brands'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//         $product = Product::find($id);
// //        $avgRating = 0;
// //        $sumRating = array_sum(array_column($product->ProductComment->toArray(), 'rating'));
// //        $countRating = count($product->ProductComment);
// //        if ($countRating != 0) {
// //            $avgRating = $sumRating / $countRating;
// //        }
//             $data[] = [
//                 'id' => $id,
//                 'category' => $product->ProductCategory->name,
//                 'brand' => $product->brand->name,
//                 'name' => $product->name,
//                 'description' => $product->description,
//                 'price' => $product->price,
//                 'qty' => $product->qty,
//                 'discount' => $product->discount,
//                 'status' => $product->status,
//                 'size' => $product->Detail->size,
//                 'color' => $product->Detail->color,
//                 'images' => $product->ProductImage,
// //                'rateting' => $avgRating
//             ];
            // return response()->json($data);
            return view('product');
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

