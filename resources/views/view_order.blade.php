@extends('layout.master')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/')}}">home</a></li>
                            <li>/</li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-16">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product_name">Sản phẩm</th>
                                    <th class="product_name">Size</th>
                                    <th class="product_name">Color</th>
                                    <th class="product-price">Giá</th>
                                    <th>Số lượng</th>
                                    <th class="product_remove">Trạng thái</th>
                                </tr>
                                </thead>
                                    <tbody>
                                    @foreach($orders_detail as $order_dt)
                                        <tr>
                                            <td class="product_name">{{$order_dt->name}}</td>
                                            <td class="product_size">{{$order_dt->size->name}}</td>
                                            <td class="product_color">{{$order_dt->color->name}}</td>
                                            <td class="product-price">{{number_format($order_dt->amount)}}đ</td>
                                            <td>{{$order_dt->quantity}}</td>
                                            <td class="product_total">
                                                @if($order_dt->get_ord->status == 0)
                                                    <span>Đang xử lý</span>
                                                @elseif($order_dt->get_ord->status == 1)
                                                    <span>Đang giao hàng</span>
                                                @elseif($order_dt->get_ord->status == 2)
                                                    <span>Đã giao hàng</span>
                                                @else($order_dt->get_ord->status == 3)
                                                    <span>Đã hủy đơn</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="font-size: 15px">Phí ship:</td>
                                    <td style="font-size: 15px">{{number_format($order_dt->get_ord->price_shipping)}}đ</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="font-size: 15px">Tổng:</td>
                                    <td style="font-size: 15px">{{number_format($countAmount + $order_dt->get_ord->price_shipping)}}đ</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- shopping cart area end -->
@endsection
