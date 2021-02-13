<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- title  -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png') }}">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- custom css -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper mp-pusher" id="mp-pusher">

        <!-- start header section -->
        <header class="fixed header-light-nav">
            <div class="navbar-default">

                <!-- start top search -->
                <div class="top-search bg-theme">
                    <div class="container-fluid">
                        <form class="search-form" action="#!" method="GET">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 xs-font-size16 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid no-padding">
                    <div class="row align-items-center no-gutters">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <!-- category toggler -->
                                    <div class="menu-trigger"></div>
                                    <!-- end category toggler -->

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="/" class="navbar-brand logodefault"><img id="logo" src="{{ asset('assets/img/logos/logo.png') }}" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <!-- menu toggler -->
                                    <div class="navbar-toggler"></div>
                                    <!-- end menu toggler -->

                                    <!-- menu area -->
                                    <ul class="navbar-nav mx-auto" id="nav" style="display: none;">

                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('guest.shop') }}">Shop</a></li>
                                        <li><a href="{{ route('guest.blog') }}">Blog</a></li>

                                        @auth
                                        <li><a href="#!">Account</a>
                                            <ul>
                                                <li><a href="about-us.html">My Profile</a></li>
                                            </ul>
                                        </li>
                                        @endauth

                                        @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        @endguest
                                    </ul>
                                    <!-- end menu area -->




                                     @if(is_array(getCartItems()))
                                    <!-- shopping cart bag dropdown -->
                                    <div class="attr-nav sm-no-margin-right sm-margin-75px-right">
                                        <ul>
                                            <li class="dropdown sm-margin-20px-right">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ti-bag"></i>
                                                    <span class="badge bg-theme">
                                                        {{ count(getCartItems()) }}
                                                    </span>
                                                </a>
                                               
                                                <ul class="dropdown-menu cart-list">
                                                    @foreach(getCartItems() as $item)
                                                    <li>
                                                        <a href="#!" class="photo">
                                                            <img src="{{ asset('storage/images/' . $item['image']) }}" class="cart-thumb" alt="..." />
                                                        </a>
                                                        <h6><a href="#!">{{ $item['name'] }}</a></h6>
                                                        <p>{{ $item['quantity'] }}x - <span class="price">${{ $item['price'] }}</span></p>
                                                    </li>
                                                    @endforeach
                                                    
                                                    <li class="total bg-theme">
                                                        <span class="foat-left pr-2">
                                                            <strong>Total</strong>: 
                                                            ${{ number_format(getCartSubtotal(),2) }}
                                                        </span>
                                                        <a href="{{ route('guest.cart') }}" class="butn-style2 small white float-right w-auto"><span>Cart</span></a>
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                            <li class="search"><a href="#!"><i class="ti-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- end shopping cart bag dropdown -->
                                    @endif

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </header>
        <!-- end header section -->

        
        @yield('content')
        @include('flash::message')
        

        

        <!-- start clients section -->
        <div class="section-clients bg-light-gray">
            <div class="container">
                <div class="owl-carousel owl-theme clients">
                    <div class="item"><img src="{{ asset('assets/img/partners/client-01.png') }}"></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-02.png') }}"></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-03.png') }}"></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-04.png') }}"></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-05.png') }}"></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-06.png') }}"></div>
                </div>
            </div>
        </div>
        <!-- end clients section -->

        <!-- start footer section -->
        <footer>

            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom">
                        <img alt="footer-logo" src="{{ asset('assets/img/logos/logo-footer.png') }}" class="margin-30px-bottom">
                        <ul class="footer-list">
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">74 Guild Street 542B, Great North Town MT.</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">(+44) 123 456 789</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">addyour@emailhere</span>
                            </li>
                        </ul>
                        <div class="footer-social-icons small margin-20px-top">
                            <ul>
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 sm-margin-50px-bottom xs-margin-30px-bottom">
                        <h3 class="footer-title-style2 text-white">Quick Links</h3>
                        <ul class="footer-list">
                            <li><a href="#!">News</a></li>
                            <li><a href="#!">History</a></li>
                            <li><a href="#!">Community</a></li>
                            <li><a href="#!">Portfolio</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 xs-margin-30px-bottom">
                        <h3 class="footer-title-style2 text-white">Information</h3>
                        <ul class="footer-list">
                            <li><a href="#!">Help & Contact</a></li>
                            <li><a href="#!">Shipping & Taxes</a></li>
                            <li><a href="#!">Search Terms</a></li>
                            <li><a href="#!">Affiliates</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <h3 class="footer-title-style2 text-white">My Account</h3>
                        <ul class="footer-list">
                            <li><a href="#!">My Account</a></li>
                            <li><a href="#!">Order History</a></li>
                            <li><a href="#!">Wishlist</a></li>
                            <li><a href="#!">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 text-left sm-text-center sm-margin-15px-bottom">
                            <p class="xs-font-size13">&copy; {{ date("Y") }} Boot Cart</p>
                        </div>
                        <div class="col-lg-4 sm-margin-15px-bottom">
                            <ul class="footer-app no-margin-bottom">
                                <li>
                                    <a href="#!"><img src="{{ asset('assets/img/content/apps/app-01.png') }}" alt="..." /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="{{ asset('assets/img/content/apps/app-02.png') }}" alt="..." /></a>
                                </li>
                                <li>
                                    <a href="#!"><img src="{{ asset('assets/img/content/apps/app-03.png') }}" alt="..." /></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-style-17 text-right sm-text-center">
                                <li><img src="{{ asset('assets/img/content/payment-options/visa.png') }}" alt="..."></li>
                                <li><img src="{{ asset('assets/img/content/payment-options/mastercard.png') }}" alt="..."></li>
                                <li><img src="{{ asset('assets/img/content/payment-options/paypal.png') }}" alt="..."></li>
                                <li><img src="{{ asset('assets/img/content/payment-options/amex.png') }}" alt="..."></li>
                                <li><img src="{{ asset('assets/img/content/payment-options/discover.png') }}" alt="..."></li>
                                <li><img src="{{ asset('assets/img/content/payment-options/jcb.png') }}" alt="..."></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- end footer section -->

    </div>
    <!-- end main-wrapper section -->

    <!-- start scroll to top -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- modernizr js -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>

    <!-- navigation -->
    <script src="{{ asset('assets/js/nav-menu.js') }}"></script>

    <!-- category navigation -->
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/mlpushmenu.js') }}"></script>

    <!-- tab -->
    <script src="{{ asset('assets/js/easy.responsive.tabs.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.counterup.min -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!-- stellar js -->
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>

    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

    <!-- ranger js -->
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>

    <!-- countdown js -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>

    <!-- jquery.magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--  clipboard js -->
    <script src="{{ asset('assets/js/clipboard.min.js') }}"></script>

    <!--  prism js -->
    <script src="{{ asset('assets/js/prism.js') }}"></script>

    

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
 
    @yield('js')

</body>

</html>