@extends('layout.master')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>/</li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                </div>
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form method="POST">
                            @csrf
                            <p>
                                <label>Name  <span>*</span></label>
                                <input type="text" name="name">
                            </p>
                            <p>
                                <label>Email address  <span>*</span></label>
                                <input type="text" name="email">
                             </p>
                             <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password">
                             </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection
