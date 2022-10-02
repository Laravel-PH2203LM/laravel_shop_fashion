@extends('layout.master')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area product_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">Trang chủ</a></li>
                            <li>/</li>
                            <li>Chi tiết sản phẩm</li>
                            <li>/</li>
                            <li>{{ $products->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset('uploads' . '/' . $products->ProductImage[0]->path) }}"
                                    data-zoom-image="{{ asset('uploads' . '/' . $products->ProductImage[0]->path) }}">
                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @foreach ($products->ProductImage as $productImg)
                                    <li>
                                        <a href="#" class="elevatezoom-gallery"
                                            data-update="{{ asset('uploads' . '/' . $productImg->path) }}"
                                            data-image="{{ asset('uploads' . '/' . $productImg->path) }}"
                                            data-zoom-image="{{ asset('uploads' . '/' . $productImg->path) }}">
                                            <img src="{{ asset('uploads' . '/' . $productImg->path) }}" alt="zo-th-1" />
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                        <form action="{{ route('cart.add', $products->id) }}">

                            <h1>{{ $products->name }}</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> 1 review </a></li>
                                    <li class="review"><a href="#"> Write a review </a></li>
                                </ul>
                            </div>
                            <div class="product_price">
                                <span class="current_price">{{ number_format($products->price), 0, 0 }}đ</span>
                            </div>
                            <div class="product_desc">
                                <p>{!! $products->description !!}</p>
                            </div>
                            <div class="product_variant color">
                                <h3>Kích thước</h3>
                                <select class="niceselect_option" id="get_size" name="size">
                                    <option selected value="0">--- Chọn kích thước ---</option>
                                    @foreach ($products->ProductSize as $productSize)
                                        <option value="{{ $productSize->id }}">{{ $productSize->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="product_variant size">
                                <h3>Màu sắc</h3>
                                <select class="niceselect_option" id="get_color" name="color">
                                    <option selected value="0">--- Chọn màu sắc ---</option>
                                </select>
                            </div>
                            <div class="product_variant quantity">
                                <label>Quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>
                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i> Add to Wish List</a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-sliders"
                                                aria-hidden="true"></i> Compare this Product</a></li>
                                </ul>
                            </div>
                        </form>
                        <div class="priduct_social">
                            <h3>Share on:</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                        aria-selected="false">Mô tả sản phẩm</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Đánh giá</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{{ $products->content }}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{{ $products->content }}</p>
                                </div>
                                <div class="product_info_inner">
                                    <div class="product_ratting mb-10">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                        <strong>Posthemes</strong>
                                        <p>09/07/2018</p>
                                    </div>
                                    <div class="product_demo">
                                        <strong>demo</strong>
                                        <p>That's OK!</p>
                                    </div>
                                </div>
                                <div class="product_review_form">
                                    <form action="#">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author" type="text">

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email" type="text">
                                            </div>
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->
    <!--product section area start-->
    <section class="product_section related_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Related Products</h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div>
            </div>
            <div class="product_area">
                <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        @foreach($products->category_relate as $item)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{ url('/shop/product',$item->id) }}"><img
                                            src="{{asset('uploads/' . $item->ProductImage[0]->path)}}" alt=""></a>
                                    <a class="secondary_img" href="{{ url('/shop/product',$item->id) }}"><img
                                            src="{{asset('uploads/' . $item->ProductImage[1]->path)}}" alt=""></a>
                                    <div class="quick_button">
                                        <a href="{{ url('/shop/product',$item->id) }}" title="quick_view">+ quick view</a>
                                    </div>

                                    <div class="product_sale">
                                        @if($item->discount != null)
                                            <span>-@php $sale = 100-($item->discount / $item->price) * 100; echo ceil($sale)@endphp%</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product_content">
                                    <h3><a href="{{ url('/shop/product',$item->id) }}">{{$item->name}}</a></h3>
                                    @if($item->discount != null)
                                        <span class="current_price">{{number_format($item->discount),0,0}}đ</span>
                                        <span class="old_price">{{number_format($item->price),0,0}}đ</span>
                                    @else
                                        <span>{{number_format($item->price),0,0}}đ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->
@endsection
@section('js')
    <script type="text/javascript">
        $('#get_size').change(function() {
            var nid = $(this).val();
            var pid = '{{ $products->id }}';
            var api = `{{ url('/shop/product/getcolor') }}/${pid}/${nid}`;
            // alert(api)
            if (nid) {
                $.ajax({
                    type: "get",
                    url: `{{ url('/shop/product/getcolor') }}/${pid}/${nid}`,
                    success: function(res) {
                        var _opt = '';
                        if (res) {
                            $.each(res, function(key, value) {
                                _opt += '<option value="' + value.color_id + '">' + value.attr
                                    .name + '</option>';
                            });

                            $("#get_color").html(_opt);
                        }
                    }
                });
            }
        });
    </script>
@stop()
