@extends('admin/index')
@section('title','Sửa danh mục sản phẩm')
@section('main')
<div class="row">
  <div class="col-md-12">
      <div class="tile">
          <h3 class="tile-title">Sửa danh mục sản phẩm</h3>
          <form class="row" method="POST" action="{{route('category_edit',$category->id)}}">
                @csrf
                  <div class="form-group col-md-3">
                      <label class="control-label">Tên danh mục</label>
                      <input class="form-control" name="name" value="{{$category->name}}" type="text">
                  </div>
                  <div class="form-group col-md-3">
                      <label for="exampleSelect1" class="control-label">Trạng thái</label>
                      <select class="form-control" name="status" id="exampleSelect1">
                          <option>-- Chọn danh mục --</option>
                          <option value="1">Hiển thị</option>
                          <option value="0">Tạm ẩn</option>
                      </select>
                  </div>
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="">Hủy bỏ</a>
          </form>
      </div>
  </div>
</div>
@endsection
