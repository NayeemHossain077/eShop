<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Plaza - eCommerce Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="The Plaza eCommerce Template">
    <meta name="keywords" content="plaza, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset('frontend_assets/img/favicon.ico') }}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<!-- Header section -->
<header class="header-section">
    <div class="container-fluid">
        <!-- logo -->
        <div class="site-logo">
            <img src="{{ asset('frontend_assets/img/logo.png') }}" alt="logo">
        </div>
        <!-- responsive -->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-right">
            <a href="cart.html" class="card-bag"><img src="{{ asset('frontend_assets/img/icons/bag.png') }}" alt=""><span>2</span></a>
            <a href="#" class="search"><img src="{{ asset('frontend_assets/img/icons/search.png') }}" alt=""></a>
        </div>
        <!-- site menu -->
        <ul class="main-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#">Woman</a></li>
            <li><a href="#">Man</a></li>
            <li><a href="#">LookBook</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</header>
<!-- Header section end -->

@yield('content');


<!-- Footer top section -->
<section class="footer-top-section home-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-8 col-sm-12">
                <div class="footer-widget about-widget">
                    <img src="img/logo.png" class="footer-logo" alt="">
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <div class="cards">
                        <img src="img/cards/5.png" alt="">
                        <img src="img/cards/4.png" alt="">
                        <img src="img/cards/3.png" alt="">
                        <img src="img/cards/2.png" alt="">
                        <img src="img/cards/1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h6 class="fw-title">usefull Links</h6>
                    <ul>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Bloggers</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h6 class="fw-title">Sitemap</h6>
                    <ul>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Bloggers</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h6 class="fw-title">Shipping & returns</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Track Orders</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h6 class="fw-title">Contact</h6>
                    <div class="text-box">
                        <p>Your Company Ltd </p>
                        <p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
                        <p>+53 345 7953 32453</p>
                        <p>office@youremail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->

<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</footer>
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/sly.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/main.js') }}"></script>
</body>
</html>