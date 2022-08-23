<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/products/products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $color = Color::all();
//        $size = Size::all();
        $attr = ProductDetail::all();
        $brands = Brand::all();
        $category = ProductCategory::all();
        return view('admin/products/products_add',compact('category','attr','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Todo Code chỉ chạy được, sẽ cần sửa lại để tối ưu hơn
    public function store(StoreRequest $request)
    {
        $data = $request->only('name','brand_id','product_category_id','description','price','qty','discount','status');
        $product = Product::create($data);
        if($request->size) {
            foreach ($request->size as $key => $value) {
                $product->ProductSize()->create([
                    'product_id' => $product->id,
                    'status'=>$product->status,
                    'size_id' => $value,
                ]);
            }
        }
        if($request->color) {
            foreach ($request->color as $key => $value) {
                $product->ProductColor()->create([
                    'product_id' => $product->id,
                    'status'=>$product->status,
                    'color_id' => $value,
                ]);
            }
        }
        if($product){
            $images = $request->images;
            if($images){
                $data = [];
                foreach($images as $file)
                {
                    // Lấy tên + thời gian
                    $name = time().'.'. $file->getClientOriginalName();
                    $file->move(public_path().'/uploads/', $name);
                    $data[] = $name;
                }
                // mã hoá sang strings và lưu vào database
                $dataInsert['path'] = serialize($data);
                $dataInsert['product_id'] =  $product->id;
                $imgs = ProductImage::create($dataInsert);
            }
        }
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->load('ProductImage');
        $productdetail = ProductDetail::find($id);
        $img = unserialize($product->Image->path) ?? [];
        return view('admin/products/products_view',compact('product','img','productdetail',));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreRequest $id)
    {
        $product = Product::find($id);
        $attr = ProductDetail::all();
        $brands = Brand::all();
        $category = ProductCategory::all();
        return view('admin/products/products_edit',compact('category','attr','brands','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Todo Code chỉ chạy được, sẽ cần sửa lại để tối ưu hơn
    public function update( StoreRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->only('name','brand_id','product_category_id','description','price','qty','discount','status');
        $product = Product::create($data);
        if($request->size) {
            foreach ($request->size as $key => $value) {
                $product->ProductSize()->update([
                    'product_id' => $product->id,
                    'status' => $product->status,
                    'size_id' => $value,
                ]);
            }
        }
        if($request->color) {
            foreach ($request->color as $key => $value) {
                $product->ProductColor()->update([
                    'product_id' => $product->id,
                    'status' => $product->status,
                    'color_id' => $value,
                ]);
            }
        }
        if($product){
            $images = $request->images;
            if($images){
                $data = [];
                foreach($images as $file)
                {
                    // Lấy tên + thời gian
                    $name = time().'.'. $file->getClientOriginalName();
                    $file->move(public_path().'/uploads/', $name);
                    $data[] = $name;
                }
                // mã hoá sang strings và lưu vào database
                $dataInsert['path'] = serialize($data);
                $dataInsert['product_id'] =  $product->id;
                $imgs = ProductImage::update($dataInsert);
            }
        }
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductImage::where('product_id',$id)->delete();
        Color::where('product_id',$id)->delete();
        Size::where('product_id',$id)->delete();
        Product::find($id)->delete();
        return redirect()->route('index');
    }
}
