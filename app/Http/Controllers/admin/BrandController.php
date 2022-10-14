<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Toastr;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function brand()
    {
        $brand = Brand::all();
        return view('admin.brands.brand',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.brand_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $data = $request->only('name','status');
        if(Brand::create($data)) {
            return redirect()->route('brand')->with('success','Thêm thương hiệu thành công');
        } else {
            return redirect()->route('brand')->with('error','Thêm thương hiệu không thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brands.brand_edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $data = $request->only('name','status');
        if($data) {
            $brand = Brand::findOrFail($id);
            $brand->name = $data['name'];
            $brand->status = $data['status'];
            $brand->save();
            return redirect()->route('brand')->with('success','Cập nhật thương hiệu thành công');
        } else {
            return redirect()->route('brand')->with('error','Cập nhật thương hiệu không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        try {
            $brand->delete();
        } catch (\Exception $exception) {
            return redirect()->route('brand')->with('error','Bạn không thể xóa thương hiệu này');
        }
        return redirect()->route('brand')->with('success','Xóa thương hiệu thành công');
    }
}
