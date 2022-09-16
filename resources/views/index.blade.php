@extends('layout.master')
@section('main')
    <!--slider area start-->
    <div class="slider_area slider_style home_three_slider owl-carousel">
        <div class="single_slider" data-bgimg="{{asset('fontend/img/slider/slider4.jpg')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_one">
                            <img src="{{asset('fontend/img/slider/content3.png')}}" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="{{url('/shop')}}">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
        <div class="single_slider" data-bgimg="{{asset('fontend/img/slider/slider5.jpg')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_two">
                            <img src="{{asset('fontend/img/slider/content4.png')}}" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="{{url('/shop')}}">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider" data-bgimg="{{asset('fontend/img/slider/slider6.jpg')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_three">
                            <img src="{{asset('fontend/img/slider/content5.png')}}" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="{{url('/shop')}}">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="{{url('/shop')}}"><img src="{{asset('fontend/img/bg/banner8.jpg')}}" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="{{url('/shop')}}"><img src="{{asset('fontend/img/bg/banner9.jpg')}}" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area bottom">
                        <div class="banner_thumb">
                            <a href="{{url('/shop')}}"><img src="{{asset('fontend/img/bg/banner10.jpg')}}" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section womens_product">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm của chúng tôi</h2>
                       <p>Các sản phẩm thiết kế hiện đại,mới nhất</p>
                   </div>
                </div> 
            </div>    
            <div class="product_area"> 
                <div class="row">
                    <div class="col-12">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#clothing" role="tab" aria-controls="clothing" aria-selected="true">Women’s</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#handbag" role="tab" aria-controls="handbag" aria-selected="false">Men’s</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#shoes" role="tab" aria-controls="shoes" aria-selected="false">Kid's</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">Shoes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                 <div class="tab-content">
                      <div class="tab-pane fade show active" id="clothing" role="tabpanel">
                             <div class="product_container">
                                <div class="row product_column4">
                                    <!-- Sản phẩm -->
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{url('/shop/product')}}"><img src="{{asset('fontend/img/product/product6.jpg')}}" alt=""></a>
                                                <a class="secondary_img" href="{{url('/shop/product')}}"><img src="{{asset('fontend/img/product/product5.jpg')}}" alt=""></a>

                                                <div class="quick_button">
                                                    <a href="#" title="quick_view">Xem sản phẩm</a>
                                                </div>

                                            </div>
                                            <div class="product_content">
                                                <h3><a href="{{url('/shop/product')}}">Beats Solo2 Solo 2</a></h3>
                                                <span class="current_price">£60.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                </div>
            </div>
               
        </div>
    </section>
    <!--product section area end-->
    
    <!--banner area start-->
    <section class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-6 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="{{url('/shop')}}"><img src="{{asset('fontend/img/bg/banner11.jpg')}}" alt="#"></a>
                            <div class="banner_content">
                               <h1>Handbag <br> Men’s Collection</h1>
                                <a href="{{url('/shop')}}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="{{url('/shop')}}"><img src="{{asset('fontend/img/bg/banner12.jpg')}}" alt="#"></a>
                            <div class="banner_content">
                               <h1>Sneaker <br> Men’s Collection</h1>
                                <a href="{{url('/shop')}}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->
    
    <!--product section area start-->
    <section class="product_section womens_product bottom">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm thịnh hành</h2>
                       <p>Sản phẩm ấn tượng và bán chạy nhất</p>
                   </div>
                </div> 
            </div>    
            <div class="product_area"> 
                 <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('/shop/product')}}"><img src="{{asset('fontend/img/product/product21.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('/shop/product')}}"><img src="{{asset('fontend/img/product/product22.jpg')}}" alt=""></a>

                                    <div class="quick_button">
                                        <a href="#" title="quick_view">Xem sản phẩm</a>
                                    </div>

                                    <div class="product_sale">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <h3><a href="{{url('/shop/product')}}">Giày thể thao</a></h3>
                                    <span class="current_price">300.000</span>
                                    <span class="old_price">420.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
        </div>
    </section>
@endsection
