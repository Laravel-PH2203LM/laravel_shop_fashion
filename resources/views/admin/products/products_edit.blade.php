@extends('admin/index')
@section('title','Sửa sản phẩm')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{route('category_add')}}"><i
                                    class="fas fa-folder-plus"></i> Thêm danh mục</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <img src="images/{{ Session::get('image') }}">
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Lỗi</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="row" method="POST" enctype="multipart/form-data" action="{{route('product_edit',$product->id)}}">
                    @csrf
                    <div class="form-group col-md-3">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" value="{{$product->name}}" type="text" name="name">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="exampleSelect1" class="control-label">Danh mục</label>
                        <select class="form-control" name="brand_id" id="exampleSelect1">
                            <option>-- Chọn danh mục --</option>
                            @foreach ($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleSelect1" class="control-label">Thương hiệu</label>
                        <select class="form-control" name="product_category_id" id="exampleSelect1">
                            <option>-- Chọn danh mục --</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Giá bán</label>
                        <input class="form-control" value="{{$product->price}}" type="text" name="price">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Giảm giá</label>
                        <input class="form-control" value="{{$product->discount}}" type="text" name="discount">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Số lượng</label>
                        <input class="form-control" type="text" value="{{$product->qty}}" name="qty">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleSelect1" class="control-label">Trạng thái</label>
                        <select class="form-control" name="status" id="exampleSelect1">
                            <option>-- Chọn danh mục --</option>
                            <option value="1">Hiển thị</option>
                            <option value="0">Tạm ẩn</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Size</label>
                        <div class="checkbox">
                            @foreach($attr as $value)
                                <label>
                                    <input type="checkbox" value="{{$value->id}}" name="color[]">
                                    {{$value->color}}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Size</label>
                        <div class="checkbox">
                            @foreach($attr as $value)
                                <label>
                                    <input type="checkbox" value="{{$value->id}}" name="size[]">
                                    {{$value->size}}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Ảnh mô tả sản phẩm</label>
                        <div id="myfileupload">
                            <input type="file" id="uploadfile" name="images[]" multiple/>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="description" id="content"></textarea>
                        <script>
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                    <button class="btn btn-save" type="submit">Lưu lại</button>
                    <a class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</a>
                </form>
            </div>
@endsection
