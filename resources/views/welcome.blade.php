@extends('layouts.frontendapp')

@section('content')
<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{ asset('frontend_assets/img/bg.jpg') }}">
    <div class="hero-slider owl-carousel">
        <div class="hs-item">
            <div class="hs-left"><img src="{{ asset('frontend_assets/img/slider-img.png') }}" alt=""></div>
            <div class="hs-right">
                <div class="hs-content">
                    <div class="price">from $19.90</div>
                    <h2><span>2018</span> <br>summer collection</h2>
                    <a href="" class="site-btn">Shop NOW!</a>
                </div>
            </div>
        </div>
        <div class="hs-item">
            <div class="hs-left"><img src="{{ asset('frontend_assets/img/slider-img.png') }}" alt=""></div>
            <div class="hs-right">
                <div class="hs-content">
                    <div class="price">from $19.90</div>
                    <h2><span>2018</span> <br>summer collection</h2>
                    <a href="" class="site-btn">Shop NOW!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- Intro section -->
<section class="intro-section spad pb-0">
    <div class="section-title">
        <h2>pemium products</h2>
        <p>We recommend</p>
    </div>
    <div class="intro-slider">
        <ul class="slidee">
            @foreach ($products as $product)
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="{{ asset('frontend_assets/img/intro/1.jpg') }}" alt="#">
                    </figure>
                    <div class="product-info">
                        <h5>{{ $product->product_name }}</h5>
                        <p>${{ $product->product_price }}</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        <a href="{{ url('product/details') }}/{{ $product->id }}" class="site-btn btn-line">View Details</a>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
    <div class="container">
        <div class="scrollbar">
            <div class="handle">
                <div class="mousearea"></div>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->


<!-- Featured section -->
<div class="featured-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="featured-item">
                    <img src="img/featured/featured-1.jpg" alt="">
                    <a href="#" class="site-btn">see more</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="featured-item mb-0">
                    <img src="img/featured/featured-2.jpg" alt="">
                    <a href="#" class="site-btn">see more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured section end -->


<!-- Product section -->
<section class="product-section spad">
    <div class="container">
        <ul class="product-filter controls">
            <li class="control" data-filter=".new">New arrivals</li>
            <li class="control" data-filter="all">Recommended</li>
            <li class="control" data-filter=".best">Best sellers</li>
        </ul>
        <div class="row" id="product-filter">
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/1.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Long red Shirt</h6>
                        <p>$39.90</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 new">
                <div class="product-item">
                    <figure>
                        <img src="img/products/2.jpg" alt="">
                        <div class="bache">NEW</div>
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Hype grey shirt</h6>
                        <p>$19.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/3.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>long sleeve jacket</h6>
                        <p>$59.90</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 new best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/4.jpg" alt="">
                        <div class="bache sale">SALE</div>
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Denim men shirt</h6>
                        <p>$32.20 <span>RRP 64.40</span></p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/5.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Long red Shirt</h6>
                        <p>$39.90</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 new">
                <div class="product-item">
                    <figure>
                        <img src="img/products/6.jpg" alt="">
                        <div class="bache">NEW</div>
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Hype grey shirt</h6>
                        <p>$19.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/7.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>long sleeve jacket</h6>
                        <p>$59.90</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img src="img/products/8.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Denim men shirt</h6>
                        <p>$32.20 <span>RRP 64.40</span></p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product section end -->


<!-- Blog section -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="featured-item">
                    <img src="img/featured/featured-3.jpg" alt="">
                    <a href="#" class="site-btn">see more</a>
                </div>
            </div>
            <div class="col-lg-7">
                <h4 class="bgs-title">from the blog</h4>
                <div class="blog-item">
                    <div class="bi-thumb">
                        <img src="img/blog-thumb/1.jpg" alt="">
                    </div>
                    <div class="bi-content">
                        <h5>10 tips to dress like a queen</h5>
                        <div class="bi-meta">July 02, 2018   |   By maria deloreen</div>
                        <a href="#" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bi-thumb">
                        <img src="img/blog-thumb/2.jpg" alt="">
                    </div>
                    <div class="bi-content">
                        <h5>Fashion Outlet products</h5>
                        <div class="bi-meta">July 02, 2018   |   By Jessica Smith</div>
                        <a href="#" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="bi-thumb">
                        <img src="img/blog-thumb/3.jpg" alt="">
                    </div>
                    <div class="bi-content">
                        <h5>the little black dress just for you</h5>
                        <div class="bi-meta">July 02, 2018   |   By maria deloreen</div>
                        <a href="#" class="readmore">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->


@endsection