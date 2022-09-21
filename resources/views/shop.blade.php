@extends('layout.master')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>/</li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Product categories</h2>
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="{{url('shop',$category->id)}}">{{$category->name}}</a> </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget_list widget_categories">
                                <h2>Manufacturer</h2>
                                <ul>
                                    @foreach($brands as $brand)
                                    <li><a href="#">{{$brand->name}}</a> </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Select By Color</h2>
                                <ul>
                                    <li><a href="#">Black <span>6</span></a> </li>
                                    <li><a href="#"> Blue <span>10</span></a> </li>
                                    <li><a href="#">Brown <span>4</span></a> </li>
                                    <li><a href="#"> Green <span>4</span></a> </li>
                                    <li><a href="#">Pink <span>7</span></a> </li>
                                    <li><a href="#">White<span>8</span></a> </li>
                                    <li><a href="#">Yellow <span>5</span></a> </li>

                                </ul>
                            </div>
                        </div>
                        <!--sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_title">
                            <h1>shop</h1>
                        </div>
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">

                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                                <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                                <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5"></button>

                            </div>
                            <div class="nice-nice-select">
                                <form>
                                    <select name="sort_by" id="short" onchange="this.form.submit();">
                                        <option selected value="">Tìm kiếm theo</option>
                                        <option value="name-ASC">Tìm theo tên A-Z</option>
                                        <option  value="name-DESC">Tìm theo tên Z-A</option>
                                        <option value="price-ASC">Tìm theo giá: thấp tới cao</option>
                                        <option value="price-DESC">Tìm theo giá: cao tới thấp</option>
                                    </select>
                                </form>

                            </div>
                            <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div>
                        </div>
                         <!--shop toolbar end-->

                         <div class="row shop_wrapper">
                             @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('shop/product',$product->id)}}">
                                            <img src="uploads/{{$product->ProductImage[0]->path}}" alt=""></a>
                                        <a class="secondary_img" href="{{url('/shop/product',$product->id)}}">
                                            <img src="uploads/{{$product->ProductImage[1]->path}}" alt=""></a>

                                        <div class="quick_button">
                                            <a href="{{url('shop/product',$product->id)}}" title="quick_view">Xem sản phẩm</a>
                                        </div>

                                        <div class="double_base">
                                            <div class="product_sale">
                                                @if($product->discount != null)
                                                <span>Sale</span>
                                                @endif
                                            </div>
                                            <div class="label_product">
                                                <span>new</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product_content grid_content">
                                        <h3><a href="{{url('shop/product',$product->id)}}">{{$product->name}}</a></h3>
                                        @if($product->discount != null)
                                            <span class="current_price">{{number_format($product->discount),0,0}}đ</span>
                                            <span class="old_price">{{number_format($product->price),0,0}}đ</span>
                                        @else
                                            <span>{{number_format($product->price),0,0}}đ</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>
                    </div>

                        <div class="shop_toolbar t_bottom">
                                                {{ $products->appends(['sort' => 'science-stream'])->links()}}
                        </div>
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                    </div>
                </div>
            </div>
        </div>
    <!--shop  area end-->
@endsection
