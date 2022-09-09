@extends('admin/index')
@section('title','Danh sách sản phẩm')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <h3 class="tile-title">Danh sách sản phẩm</h3>
                <div class="row element-button">
                    <div class="col-sm-2">

                      <a class="btn btn-add btn-sm" href="{{route('product_add')}}" title="Thêm"><i class="fas fa-plus"></i>
                        Tạo mới sản phẩm</a>
                    </div>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Giảm giá</th>
                            <th>Danh mục</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{number_format($product->price,0)}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->ProductCategory->name}}</td>
                            <td><span class="badge bg-success">{{$product->status == '1' ? 'Hiển thị' : 'Tạm ẩn'}}</span></td>
                            <td>
                                <a href="{{ route('product_edit', ['id' => $product->id]) }}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{ route('product_del', ['product' => $product->id]) }}"
                                    onclick="return confirm('Bạn có chắc muốn xoá nó khỏi thế giới hay không?');">
                                    <i class="fas fa-trash"></i></a>
                                <a href="{{ route('product_view', ['id' => $product->id]) }}">
                                    <i class="fa fa-eye"></i></a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex">
{{--                {!! $products->appends(['sort' => 'science-stream'])->links() !!}--}}
            </div>
        </div>
    </div>
</div>
@endsection
