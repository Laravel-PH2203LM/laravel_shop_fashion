<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
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
        $brands = Brand::all();
        $attr = ProductDetail::all();
        $category = ProductCategory::all();
        return view('admin/products/products_add',compact('category','brands','attr'));
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
        $product = Product::create([
                'name'=>$request->name,
                'brand_id'=>$request->brand_id,
                'product_category_id'=>$request->product_category_id,
                'description'=>$request->description,
                'price'=>$request->price,
                'qty'=>$request->qty,
                'discount'=>$request->discount,
                'status'=>$request->status,
            ]);
            foreach ($request->id_attr as $value) {
                ProductAttribute::create([
                   'product_id'=>$product->id,
                   'id_attr'=>$value
                ]);
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
                $dataInsert['status'] =  $product->status;
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
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        $attr = ProductDetail::all();
        $category = ProductCategory::all();
        return view('admin.products.products_edit',compact('category','attr','brands','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Todo Code chỉ chạy được, sẽ cần sửa lại để tối ưu hơn
    public function update(StoreRequest $request, $id)
    {
        $product = new Product();
        Product::update([
            'name'=>$request->name,
            'brand_id'=>$request->brand_id,
            'product_category_id'=>$request->product_category_id,
            'description'=>$request->description,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'discount'=>$request->discount,
            'status'=>$request->status
        ]);
        foreach ($request->id_attr as $value) {
            ProductAttribute::update([
                'product_id'=>$product->id,
                'id_attr'=>$value
            ]);
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
                $dataInsert['status'] =  $product->status;
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
        ProductAttribute::where('product_id',$id)->delete();
        Product::find($id)->delete();
        return redirect()->route('index');
    }
}
