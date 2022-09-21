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
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng</th>
                                            <th class="product_remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart->items as $item)
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="{{asset('uploads/'.'/'.$item->image)}}" alt=""></a></td>
                                            <td class="product_name"><a href="{{url('shop/product',$item->id)}}">{{$item->name}}</a></td>
                                            <td class="product-price">{{$item->price}}</td>
                                            <td class="product_quantity">
                                            <form action="{{route('cart.update',$item->id)}}">
                                                <input value="{{$item->quantity}}" name="quantity" type="number">
                                                <button class="btn btn-sm btn-danger">Cập nhật</button></a>
                                            </form>
                                            </td>
                                            <td class="product_total">{{number_format($item->quantity * $item->price),0,0}}đ</td>
                                            <td class="product_remove"><a href="{{route('cart.delete',$item->id)}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <a href="{{route('cart.clear')}}" style="color:black;">Xóa giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Giỏ hàng</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Tổng hóa đơn tạm</p>
                                       <p class="cart_amount">{{{number_format($cart->totalAmount),0,0}}}đ</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Vận chuyển</p>
                                       <p class="cart_amount"><span>Phí vận chuyển:</span>{{number_format($cart->shipping),0,0}}đ</p>
                                   </div>

                                   <div class="cart_subtotal">
                                       <p>Tổng hóa đơn</p>
                                       <p class="cart_amount">{{number_format($cart->totalAmount += $cart->shipping),0,0}}đ</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="{{url('checkout')}}">Tiếp tục thanh toán</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->

            </form>
        </div>
    </div>
    <!-- shopping cart area end -->
@endsection
