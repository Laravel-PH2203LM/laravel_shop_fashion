<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $categories = ProductCategory::paginate(6);
        return view('admin.category.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->only('name','status');
        if(ProductCategory::create($data)) {
            return redirect()->route('category')->with('success','Thêm danh mục mới thành công');
        } else {
            return redirect()->route('category')->with('error','Thêm danh mục không mới thành công');
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
        $category = ProductCategory::find($id);
        return view('admin/category/category_edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->only('name','status');
        if($data) {
            $category = ProductCategory::find($id);
            $category->name = $data['name'];
            $category->status = $data['status'];
            $category->save();
            return redirect()->route('category')->with('success','Cập nhật danh mục thành công');
        } else {
            return redirect()->route('category')->with('error','Cập nhật danh mục không thành công');
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
        $category = ProductCategory::find($id);
        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->route('category')->with('error','Bạn không thể xóa danh mục này');
        }
        return redirect()->route('category')->with('success','Xóa danh mục thành công');
    }
}
