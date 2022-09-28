@extends('admin/index')
@section('title','Danh sách đơn hàng')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th width="10"><input type="checkbox" id="all"></th>
                            <th>ID SP</th>
                            <th>Tên SP</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->orders as $orderdt)
                            <tr>
                                <td width="10"><input type="checkbox" id="all"></td>
                                <td>{{$orderdt->product_id}}</td>
                                <td>{{$orderdt->prod->name}}</td>
                                <td>{{$orderdt->quantity}}</td>
                                <td>{{number_format($orderdt->quantity * $orderdt->amount)}}đ</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Tổng tiền:</strong></td>
                            <td><strong>{{number_format($order->getTotalAmount())}}đ</strong></td>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
