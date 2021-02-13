@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Shop</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('guest.shop') }}">Shop</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start product-grid section -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- start sidebar panel -->
                    <div class="col-lg-3 col-12 side-bar order-2 order-lg-1">
                        <div class="widget">
                            <div class="widget-title">
                                <h5>Categories</h5>
                            </div>
                            <div id="accordion" class="accordion-style2">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#!">Casual Shirts</a></li>
                                            <li><a href="#!">Formal Shirts</a></li>
                                            <li><a href="#!">Longline Shirts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="widget">
                            <div class="widget-title">
                                <h5>Price Range</h5>
                            </div>
                            <input type="text" class="price-range" name="my_range" value="">
                            <a href="#!" class="butn-style2 small margin-30px-top">Filter</a>
                        </div>

                        

                        

                        <div class="offer-slider owl-carousel owl-theme">

                            <div class="offer-banner-slider" style="background-image:url('{{ asset('assets/img/offer-banner/offer-slide-01.jpg') }}');">
                                <div class="offer-text">
                                    <h6 class="margin-5px-bottom text-white font-weight-500">Men's</h6>
                                    <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500">
                                        <a href="">Up to 50% Off</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                    <a class="butn-style2 small" href="#!"><span>Buy Now</span></a>
                                </div>
                            </div>

                            <div class="offer-banner-slider" style="background-image:url('{{ asset('assets/img/offer-banner/offer-slide-02.jpg') }}');">
                                <div class="offer-text">
                                    <h6 class="margin-5px-bottom text-white font-weight-500">Women's</h6>
                                    <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500"><a href="#!" class="text-white">Up to 70% Off</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                    <a class="butn-style2 small" href="#!"><span>Buy Now</span></a>
                                </div>
                            </div>

                            <div class="offer-banner-slider" style="background-image:url(img/offer-banner/offer-slide-03.jpg);">
                                <div class="offer-text">
                                    <h6 class="margin-5px-bottom text-white font-weight-500">Electronics</h6>
                                    <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500"><a href="#!" class="text-white">Mega Sale Offer</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                    <a class="butn-style2 small" href="#!"><span>Buy Now</span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end sidebar panel -->

                    <!-- start right panel section -->
                    <div class="col-lg-9 col-12 padding-30px-left md-padding-15px-lr order-1 order-lg-2 sm-margin-35px-bottom">

                        
                        <!-- start product listing -->
                        <div class="row justify-content-center">
                            @for($i=1;$i<=18;$i++)
                            <div class="col-11 col-sm-6 col-xl-4 margin-30px-bottom">
                                <div class="product-grid">
                                    <div class="product-img">
                                        <a href="{{ route('guest.product-detail') }}">
                                        <img src="{{ asset('assets/img/products/product-grid/product-01.jpg') }}">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h3><a href="{{ route('guest.product-detail') }}">Smart Watch</a></h3>
                                        <h4 class="price">
                                                <span class="offer-price">$90.00</span>
                                        </h4>
                                    </div>
                                    <div class="product-buttons">
                                        <ul>
                                            <li><a href="#!" class="btn-link" title="Add To Wishlist"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#!" class="butn-style2" title="Add to Cart">Add to Cart</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            

                        </div>

                        <!-- start pagination -->
                        <div class="pagination text-small text-uppercase text-extra-dark-gray margin-20px-top sm-margin-15px-top">
                            <ul>
                                <li><a href="#!"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li><a href="#!">2</a></li>
                                <li><a href="#!">3</a></li>
                                <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination -->

                    </div>
                    <!-- end right panel section -->

                </div>
            </div>
        </section>
        <!-- end product-grid section -->

        @include('guest.section-blog')

@endsection