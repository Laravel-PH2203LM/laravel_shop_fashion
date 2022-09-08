@extends('admin/index')
@section('title','Thêm danh thuộc tính mới')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo danh mục sản phẩm</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i
                                    class="fas fa-folder-plus"></i> Thêm nhà cung cấp</a>
                        </div>
                    </div>
                    @if ($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                <strong>{{$err}}</strong>
                            @endforeach
                        </div>
                    @endif
                    <form class="row" method="POST" action="{{route('attr_add')}}">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Size</label>
                            <input class="form-control" name="size" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Color</label>
                            <input class="form-control" name="color" type="text">
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
                        <a class="btn btn-cancel" href="{{route('index')}}">Hủy bỏ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
