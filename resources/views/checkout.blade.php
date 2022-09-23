@extends('layout.master')
@section('main')
     <!--breadcrumbs area start-->
     <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>/</li>
                            <li>checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section" id="accordion">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Bạn là khách hàng cũ?
                            <a class="Returning" href="{{route('login')}}">Ấn vào đây để đăng nhập</a>

                        </h3>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{route('order')}}" method="POST">
                            @csrf
                            <h3>Billing Details</h3>
                            <div class="row">
                                @auth
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                <div class="col-lg-12 mb-20">
                                    <label>Họ và Tên <span>*</span></label>
                                    <input type="text" value="{{Auth::user()->full_name}}" name="full_name" placeholder="Nguyễn Văn A">
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Địa chỉ <span>*</span></label>
                                    <input type="text" value="{{Auth::user()->address}}" name="address" placeholder="Số nhà,đường,quận,huyện">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="0972580430">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label> Email Address <span>*</span></label>
                                    <input type="email" name="email" value="{{Auth::user()->email}}" placeholder="mail@gmail.com">
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                        <label for="account" data-toggle="collapse" data-target="#collapseOne"
                                               aria-controls="collapseOne">Nếu chưa có tài khoản, bạn có thể tạo tại đây</label>
                                        <a class="Returning" href="{{url('register')}}">Đăng ký</a>
                                </div>
                            </div>
                            @endauth
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Kích thước</th>
                                            <th>Màu sắc</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    @foreach($cart->items as $item)
                                    <tbody>
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->size->name}}</td>
                                            <td>{{$item->color->name}}</td>
                                            <td>x{{$item->quantity}}</td>
                                            <td>{{number_format($item->quantity * $item->price),0,0}}đ</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <th>Tổng</th>
                                            <td>{{number_format($cart->totalAmount),0,0}}đ</td>
                                        </tr>
                                        <tr>
                                            <th>Phí vận chuyển</th>
                                            <td>{{number_format($cart->shipping),0,0}}đ</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Tổng đơn hàng</th>
                                            <td><strong>{{number_format($cart->totalAmount += $cart->shipping)}}đ</strong></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <input name="order" type="radio"
                                        data-target="createp_account" />
                                    <label>Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="order_button">
                                    <button type="submit">Proceed to PayPal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->

@endsection
