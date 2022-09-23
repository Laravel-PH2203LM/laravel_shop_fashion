@extends('layout.master')
@section('main')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area other_bread">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>/</li>
                        <li>my account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Bảng điều khiển</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn đặt hàng</a></li>
                            <li><a href="#downloads" data-toggle="tab" class="nav-link">Tải xuống</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link">Địa chỉ</a></li>
                            <li><a href="{{url('logout')}}" class="nav-link">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3>Bảng điều khiển </h3>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Kích thước</th>
                                        <th>Màu sắc</th>
                                        <th>Tổng đơn hàng</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        @foreach($order->orders as $listord)
                                    <tr>
                                        <td>{{$listord->order_id}}</td>
                                        <td>{{$listord->name}}</td>
                                        <td><image src="{{asset('uploads'.'/'.$listord->images)}}" width="150px"></image></td>
                                        <td>{{$listord->size_id}}</td>
                                        <td>{{$listord->color_id}}</td>
                                        <td>{{$listord->total}}</td>
                                        <td><span class="success">Completed</span></td>
                                    </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="downloads">
                            <h3>Downloads</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Downloads</th>
                                        <th>Expires</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Shopnovilla - Free Real Estate PSD Template</td>
                                        <td>May 10, 2018</td>
                                        <td><span class="danger">Expired</span></td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                    <tr>
                                        <td>Organic - ecommerce html template</td>
                                        <td>Sep 11, 2018</td>
                                        <td>Never</td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            @foreach($user as $use)
                            <p>Địa chỉ mặc định khi thanh toán đơn hàng của bạn.</p>
                            <h4 class="billing-address">Địa chỉ thanh toán</h4>
                            <p><strong>{{$use->full_name}}</strong></p>
                                <p><strong>{{$use->phone}}</strong></p>
                            <address>
                                {{$use->address}}
                            </address>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->
@endsection
