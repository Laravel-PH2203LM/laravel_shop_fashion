<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    dinhsan200@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +84 972.580.430
                </div>
            </div>
            <div class="ht-right">
                <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('fontend/img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form action="{{route('search')}}" method="get">
                        <div class="advanced-search">
                            <button type="submit" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" name="search" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="{{url('cart')}}">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('fontend/img/select-product-1.jpg')}}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('fontend/img/select-product-2.jpg')}}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Bedside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{url('cart')}}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{url('checkout')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All departments</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Women’s Clothing</a></li>
                        <li><a href="#">Men’s Clothing</a></li>
                        <li><a href="#">Underwear</a></li>
                        <li><a href="#">Kid's Clothing</a></li>
                        <li><a href="#">Brand Fashion</a></li>
                        <li><a href="#">Accessories/Shoes</a></li>
                        <li><a href="#">Luxury Brands</a></li>
                        <li><a href="#">Brand Outdoor Apparel</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/shop')}}">Shop</a></li>
                    <li><a href="#">Collection</a>
                        <ul class="dropdown">
                            <li><a href="#">Men's</a></li>
                            <li><a href="#">Women's</a></li>
                            <li><a href="#">Kid's</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="{{url('cart')}}">Shopping Cart</a></li>
                            <li><a href="{{url('checkout')}}">Checkout</a></li>
                            <li><a href="./faq.html">Faq</a></li>
                            <li><a href="./register.html">Register</a></li>
                            <li><a href="./login.html">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Body-->
@yield('main')
<!-- Body End-->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="img/footer-logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 236 Hoang Quoc Viet</li>
                        <li>Phone: +84 972.580.430</li>
                        <li>Email: dinhsan200@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="{{url('/')}}">About Us</a></li>
                        <li><a href="{{url('checkout')}}">Checkout</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{url('/')}}">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{url('/cart')}}">Shopping Cart</a></li>
                        <li><a href="{{url('/shop')}}">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());
                        </script> All rights reserved |
                        <i class="fa fa-heart-o" aria-hidden="true">
                        </i> by <a href="#" target="_blank">Đinh Trọng San</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('fontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('fontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('fontend/js/owlcarousel2-filter.min.js')}}"></script>
<script src="{{asset('fontend/js/main.js')}}"></script>
</body>

</html>
