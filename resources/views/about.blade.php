@extends('layout.master')
@section('main')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/index')}}">Trang chủ</a></li>
                            <li>/</li>
                            <li>Giới thiệu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--about section area -->
    <div class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about_content">
                        <h1>Chào mừng bạn đến với The Reid !</h1>
                        <p> Từ đầu năm 2016, THE Reid bắt đầu cho ra những sản phẩm made in Vietnam mang xu hướng mới mẻ
                            cùng chất lượng tốt nhất và được bán trên toàn quốc.</p>
                        <p>Các sản phẩm của THE Reid hầu như được lấy cảm hứng từ văn hóa thời trang đường phố, tự do
                            hoặc mang hơi hướng retro.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="{{asset('fontend/img/about/about1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end-->

@endsection
