@extends('admin/index')
@section('title','Xem sản phẩm')
@section('main')
<table class="table table-hover table-bordered" id="sampleTable">
<thead>
<tr>
    <th>Tên sản phẩm</th>
    <th>Ảnh</th>
    <th>Giá tiền</th>
    <th>Giảm giá</th>
    <th>Danh mục</th>
    <th>Thông tin mô tả</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>{{$product->name}}</td>
        <td>
            @foreach($img as $image)
                <img src="{{asset('uploads'.'/'.$image->path)}}" alt="" width="50px">
            @endforeach
        </td>
        <td>{{$product->price}}</td>
        <td>{{$product->discount}}</td>
        <td>{{$product->ProductCategory->name}}</td>
        <td>{!! $product->description !!}</td>
    </tr>
</tbody>
</table>
@endsection
