@extends('admin/index')
@section('title','Danh sách đơn hàng')
@section('main')
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">

                                <a class="btn btn-add btn-sm" href="form-add-don-hang.html" title="Thêm"><i class="fas fa-plus"></i>
                                    Tạo mới đơn hàng</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                                        class="fas fa-file-upload"></i> Tải từ file</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                        class="fas fa-print"></i> In dữ liệu</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                                        class="fas fa-copy"></i> Sao chép</a>
                            </div>

                            <div class="col-sm-2">
                                <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                                        class="fas fa-file-pdf"></i> Xuất PDF</a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                        class="fas fa-trash-alt"></i> Xóa tất cả </a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>SDT</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                @foreach($order->orders as $listord)
                                <td width="10"><input type="checkbox" id="all"></td>
                                <td>{{$listord->order_id}}</td>
                                <td>{{$order->full_name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$listord->name}}</td>
                                <td>{{$listord->qty}}</td>
                                <td>{{number_format($listord->amount),0,0}}đ</td>
                                <td>{{number_format($listord->total += $listord->price_shipping),0,0}}đ</td>
                                <td><span class="badge bg-success">{{$listord->status === 0 ? 'Đang xử lí' : 'Đã hoàn thành'}}</span></td>
                                <form action="">
                                <td>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                                </td>
                                </form>
                                    <form>
                                        <td>
                                            <button class="btn btn-primary btn-sm trash" type="submit" title="Xóa"><i class="fas fa-trash-alt"></i> </button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    {{ $orders->appends(['sort' => 'science-stream'])->links()}}
                </div>
            </div>
        </div>
@endsection
