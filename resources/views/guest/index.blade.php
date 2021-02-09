<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 60 }}">
    <meta name="keywords" content="Multipurpose Business and Admin HTML5 Template" />
    <meta name="description" content="Smartshop - Multipurpose eCommerce Template" />

    <!-- title  -->
    <title>Smartshop</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png') }}">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png') }}">

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">


    <!-- custom css -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

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

            <div id="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3 col-md-6">
                            <div class="top-bar-info">
                                <ul>
                                    <li><a href="tel:01234567890"><i class="ti-mobile"></i><span class="d-none d-md-inline-block padding-10px-left">(+123) 456 7890</span></a></li>
                                    <li><a href="mailto:addyour@emailhere"><i class="ti-email"></i><span class="d-none d-md-inline-block padding-10px-left">addyour@emailhere</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-9 col-md-6">
                            <ul class="top-nav">
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="far fa-user"></i></a>
                                    <ul class="dropdown-menu padding-20px-all">
                                        <li class="margin-10px-bottom">
                                            <div class="media align-items-center">
                                                <img class="width-40px rounded-circle mr-3" src="{{ asset('assets/img/avatar/01.png') }}" alt="...">
                                                <div class="media-body">Nancy Miller</div>
                                            </div>

                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item">My Profile</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item">Order List</a>
                                        </li>
                                        <li>
                                            <a href="#!" class="dropdown-item">Log Out</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                <li>
                                    <select>
                                        <option>English</option>
                                        <option>Deutsch</option>
                                        <option>Italiano</option>
                                    </select>
                                </li>
                                <li>
                                    <select>
                                        <option>$ USD</option>
                                        <option>€ EUR</option>
                                        <option>£ UKP</option>
                                        <option>¥ JPY</option>
                                    </select>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

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
                                    <a href="#!" id="trigger" class="menu-trigger"><i class="ti-menu"></i></a>
                                    <!-- end category toggler -->

                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="home-shop-1.html" class="navbar-brand logodefault"><img id="logo" src="{{ asset('assets/img/logos/logo.png') }}" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                    <!-- menu toggler -->
                                    <div class="navbar-toggler"></div>
                                    <!-- end menu toggler -->

                                    <!-- menu area -->
                                    <ul class="navbar-nav mx-auto" id="nav" style="display: none;">

                                        <li><a href="#!">Home</a>
                                            <ul>
                                                <li><a href="home-shop-1.html">Home 01</a></li>
                                                <li><a href="home-shop-2.html">Home 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="contact-us.html">Contacts</a></li>
                                                <li><a href="help-faq.html">Help / FAQ</a></li>
                                                <li><a href="product-comparison.html">Product Comparison</a></li>
                                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                                <li><a href="order-tracking-detail.html">Order Tracking Detail</a></li>
                                                <li><a href="search-results.html">Search Results</a></li>
                                                <li><a href="404-page.html">404 Not Found</a></li>
                                                <li><a href="comingsoon.html">Coming Soon</a></li>
                                                <li><a href="newsletter.html">Newsletter</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Account</a>
                                            <ul>
                                                <li><a href="login-register.html">Login / Register</a></li>
                                                <li><a href="account-password-recovery.html">Password Recovery</a></li>
                                                <li><a href="account-orders.html">Orders List</a></li>
                                                <li><a href="account-wishlist.html">Wishlist</a></li>
                                                <li><a href="account-profile.html">Profile Page</a></li>
                                                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                                                <li><a href="account-tickets.html">My Tickets</a></li>
                                                <li><a href="account-single-ticket.html">Single Ticket</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Mega Menu</a>
                                            <ul class="row megamenu">
                                                <li class="col-lg-3 col-sm-12">
                                                    <span class="margin-10px-bottom display-block sm-no-margin sm-padding-10px-tb sm-padding-30px-lr text-uppercase sub-title">Categories 01</span>
                                                    <ul>
                                                        <li><a href="#!">Internal SSD</a></li>
                                                        <li><a href="#!">Memory Cards</a></li>
                                                        <li><a href="#!">Home Theatres</a></li>
                                                        <li><a href="#!">Unique Routers</a></li>
                                                        <li><a href="#!">Security cameras</a></li>
                                                        <li><a href="#!">Effective Laptops</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 col-sm-12">
                                                    <span class="margin-10px-bottom display-block sm-no-margin sm-padding-10px-tb sm-padding-30px-lr text-uppercase sub-title">Categories 02</span>
                                                    <ul>
                                                        <li><a href="#!">Winterwear</a></li>
                                                        <li><a href="#!">Sportswear</a></li>
                                                        <li><a href="#!">Innerwear</a></li>
                                                        <li><a href="#!">Ethnic Wear</a></li>
                                                        <li><a href="#!">Cotton Lounge Wear</a></li>
                                                        <li><a href="#!">Essential Swimwear</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 col-sm-12">
                                                    <span class="margin-10px-bottom display-block sm-no-margin sm-padding-10px-tb sm-padding-30px-lr text-uppercase sub-title">Categories 03</span>
                                                    <ul>
                                                        <li><a href="#!">Computer Speakers</a></li>
                                                        <li><a href="#!">Compact Headphones</a></li>
                                                        <li><a href="#!">Best Choice Printers</a></li>
                                                        <li><a href="#!">PC Gaming</a></li>
                                                        <li><a href="#!">Power banks</a></li>
                                                        <li><a href="#!">Musical Instruments</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 col-sm-12 sm-display-none">
                                                    <span class="margin-10px-bottom display-block sm-no-margin sm-padding-10px-tb sm-padding-30px-lr text-uppercase sub-title">Current Offers</span>

                                                    <div class="offer-slider owl-carousel owl-theme">

                                                        <div class="offer-banner-slider" style="background-image:url(img/offer-banner/offer-slide-01.jpg);">
                                                            <div class="offer-text">
                                                                <h6 class="margin-5px-bottom text-white font-weight-500">Men's</h6>
                                                                <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500"><a href="#!">Up to 50% Off</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <a class="butn-style1 fill small" href="#!"><span>Buy Now</span></a>
                                                            </div>
                                                        </div>

                                                        <div class="offer-banner-slider" style="background-image:url(img/offer-banner/offer-slide-02.jpg);">
                                                            <div class="offer-text">
                                                                <h6 class="margin-5px-bottom text-white font-weight-500">Women's</h6>
                                                                <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500"><a href="#!" class="text-white">Up to 70% Off</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <a class="butn-style1 fill small" href="#!"><span>Buy Now</span></a>
                                                            </div>
                                                        </div>

                                                        <div class="offer-banner-slider" style="background-image:url(img/offer-banner/offer-slide-03.jpg);">
                                                            <div class="offer-text">
                                                                <h6 class="margin-5px-bottom text-white font-weight-500">Electronics</h6>
                                                                <h4 class="font-size36 md-font-size32 sm-font-size30 font-weight-500"><a href="#!" class="text-white">Mega Sale</a></h4>
                                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                                <a class="butn-style1 fill small" href="#!"><span>Buy Now</span></a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </li>

                                            </ul>
                                        </li>
                                        <li><a href="#!">Blog</a>
                                            <ul>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Shop</a>
                                            <ul>
                                                <li><a href="shop-categories.html">Shop Categories</a></li>
                                                <li><a href="shop-product-grid.html">Product Grid</a></li>
                                                <li><a href="shop-product-list.html">Product List</a></li>
                                                <li><a href="shop-product-full-three-coulmn.html">Product Three Coulmns</a></li>
                                                <li><a href="shop-product-full-four-coulmn.html">Product Four Coulmns</a></li>
                                                <li><a href="shop-product-detail.html">Product Detail</a></li>
                                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                                <li><a href="shop-checkout-address.html">Shop Checkout</a>
                                                    <ul>
                                                        <li><a href="shop-checkout-address.html">Address</a></li>
                                                        <li><a href="shop-checkout-shipping.html">Shipping</a></li>
                                                        <li><a href="shop-checkout-payment.html">Payment</a></li>
                                                        <li><a href="shop-checkout-review.html">Review</a></li>
                                                        <li><a href="checkout-complete.html">Complete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Elements</a>
                                            <ul>
                                                <li><a href="accordions.html">Aaccordions</a></li>
                                                <li><a href="alerts.html">Alerts</a></li>
                                                <li><a href="buttons.html">Buttons</a></li>
                                                <li><a href="carousel-slider.html">Carousel Slider</a></li>
                                                <li><a href="countdown.html">Countdown</a></li>
                                                <li><a href="forms.html">Forms</a></li>
                                                <li><a href="google-map.html">Google Map</a></li>
                                                <li><a href="progress-bars.html">Progress Bars</a></li>
                                                <li><a href="tables.html">Tables</a></li>
                                                <li><a href="tabs.html">Tabs</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="responsive-videos.html">Responsive-videos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav sm-no-margin-right sm-margin-75px-right">
                                        <ul>
                                            <li class="dropdown sm-margin-20px-right">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ti-bag"></i>
                                                    <span class="badge bg-theme">3</span>
                                                </a>
                                                <ul class="dropdown-menu cart-list">
                                                    <li>
                                                        <a href="#!" class="photo"><img src="{{ asset('assets/img/products/cart-thumbs/cart-thumb-01.jpg') }}" class="cart-thumb" alt="..." /></a>
                                                        <h6><a href="#!">Men's Football Boots </a></h6>
                                                        <p>2x - <span class="price">$30.00</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="photo"><img src="{{ asset('assets/img/products/cart-thumbs/cart-thumb-02.jpg') }}" class="cart-thumb" alt="..." /></a>
                                                        <h6><a href="#!">Sun Protection Cap</a></h6>
                                                        <p>1x - <span class="price">$10.20</span></p>
                                                    </li>
                                                    <li>
                                                        <a href="#!" class="photo"><img src="{{ asset('assets/img/products/cart-thumbs/cart-thumb-03.jpg') }}" class="cart-thumb" alt="..." /></a>
                                                        <h6><a href="#!">Heel Character Shoes</a></h6>
                                                        <p>2x - <span class="price">$39.00</span></p>
                                                    </li>
                                                    <li class="total bg-theme">
                                                        <span class="foat-left"><strong>Total</strong>: $79.20</span>
                                                        <a href="shop-cart.html" class="butn-style2 small white float-right w-auto"><span>View Cart</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="search"><a href="#!"><i class="ti-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </header>
        <!-- end header section -->

        <!-- category mp-menu -->
        <div id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <h2>All Categories</h2>
                <ul>
                    <li class="mp-has-sub">
                        <a href="#">Devices</a>
                        <div class="mp-level">
                            <h2>Devices</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li class="mp-has-sub">
                                    <a href="#">Mobiles Phones</a>
                                    <div class="mp-level">
                                        <h2>Mobile Phones</h2>
                                        <a class="mp-back" href="#">back</a>
                                        <ul>
                                            <li><a href="#">Apple Mobile</a></li>
                                            <li><a href="#">OnePlus Mobile</a></li>
                                            <li><a href="#">Lenovo Mobile</a></li>
                                            <li><a href="#">Micromax Mobile</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mp-has-sub">
                                    <a href="#">Laptops</a>
                                    <div class="mp-level">
                                        <h2>Laptops</h2>
                                        <a class="mp-back" href="#">back</a>
                                        <ul>
                                            <li><a href="#">Thin Laptops</a></li>
                                            <li><a href="#">2-in-1 Laptops</a></li>
                                            <li><a href="#">Gaming Laptops</a></li>
                                            <li><a href="#">Budget Laptops</a></li>
                                            <li><a href="#">Light Laptops</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mp-has-sub">
                                    <a href="#">Televisions</a>
                                    <div class="mp-level">
                                        <h2>Televisions</h2>
                                        <a class="mp-back" href="#">back</a>
                                        <ul>
                                            <li><a href="#">Smart TV</a></li>
                                            <li><a href="#">Full HD TV</a></li>
                                            <li><a href="#">Android TV</a></li>
                                            <li><a href="#">4K TV</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mp-has-sub">
                        <a href="#">Beauty &amp; Health</a>
                        <div class="mp-level">
                            <h2>Beauty &amp; Health</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="#">Grooming</a></li>
                                <li><a href="#">Luxury Beauty</a></li>
                                <li><a href="#">Make-up</a></li>
                                <li><a href="#">Personal Care</a></li>
                                <li><a href="#">Nutrition Care</a></li>
                                <li><a href="#">Health Care</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mp-has-sub">
                        <a href="#">Store</a>
                        <div class="mp-level">
                            <h2>Store</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li class="mp-has-sub">
                                    <a class="icon icon-t-shirt" href="#">Clothes</a>
                                    <div class="mp-level">
                                        <h2 class="icon icon-t-shirt">Clothes</h2>
                                        <a class="mp-back" href="#">back</a>
                                        <ul>
                                            <li>
                                                <a class="icon icon-female" href="#">Women's Clothing</a>
                                            </li>
                                            <li>
                                                <a class="icon icon-male" href="#">Men's Clothing</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="icon icon-diamond" href="#">Watches</a>
                                </li>
                                <li>
                                    <a class="icon icon-music" href="#">Shoes</a>
                                </li>
                                <li>
                                    <a class="icon icon-food" href="#">Jewellery</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Books &amp; Audible</a></li>
                    <li><a href="#">Movies &amp; Games</a></li>
                </ul>

            </div>
        </div>
        <!-- end category mp-menu -->

        

        <!-- start categories section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                    <h3 class="no-margin-bottom">Categories</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-6 col-lg-3 sm-margin-30px-bottom">
                        <a href="shop-product-grid.html"><img src="{{ asset('assets/img/product-categories/category-09.jpg') }}" alt="..."></a>
                        <h5 class="margin-20px-top sm-margin-15px-top margin-10px-bottom sm-margin-5px-bottom font-size16 xs-font-size15 letter-spacing-1 text-uppercase"><a href="shop-product-grid.html">Men</a></h5>
                        <ul class="categories-style">
                            <li><a href="shop-product-grid.html">Jackets‎</a></li>
                            <li><a href="shop-product-grid.html">Jeans</a></li>
                            <li>
                                <div><span><a href="shop-product-grid.html">More</a></span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-10 col-sm-6 col-lg-3 sm-margin-30px-bottom">
                        <a href="shop-product-grid.html"><img src="{{ asset('assets/img/product-categories/category-12.jpg') }}" alt="..."></a>
                        <h5 class="margin-20px-top sm-margin-15px-top margin-10px-bottom sm-margin-5px-bottom font-size16 xs-font-size15 letter-spacing-1 text-uppercase"><a href="shop-product-grid.html">Footware</a></h5>
                        <ul class="categories-style">
                            <li><a href="shop-product-grid.html">Shoes</a></li>
                            <li><a href="shop-product-grid.html">Sandals</a></li>
                            <li>
                                <div><span><a href="shop-product-grid.html">More</a></span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-10 col-sm-6 col-lg-3 mobile-margin-30px-bottom">
                        <a href="shop-product-grid.html"><img src="{{ asset('assets/img/product-categories/category-10.jpg') }}" alt="..."></a>
                        <h5 class="margin-20px-top sm-margin-15px-top margin-10px-bottom sm-margin-5px-bottom font-size16 xs-font-size15 letter-spacing-1 text-uppercase"><a href="shop-product-grid.html">Women</a></h5>
                        <ul class="categories-style">
                            <li><a href="shop-product-grid.html">T-shirt</a></li>
                            <li><a href="shop-product-grid.html">Jeans</a></li>
                            <li>
                                <div><span><a href="shop-product-grid.html">More</a></span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-10 col-sm-6 col-lg-3">
                        <a href="shop-product-grid.html"><img src="{{ asset('assets/img/product-categories/category-11.jpg') }}" alt="..."></a>
                        <h5 class="margin-20px-top sm-margin-15px-top margin-10px-bottom sm-margin-5px-bottom font-size16 xs-font-size15 letter-spacing-1 text-uppercase"><a href="shop-product-grid.html">Accessories</a></h5>
                        <ul class="categories-style">
                            <li><a href="shop-product-grid.html">Mirror</a></li>
                            <li><a href="shop-product-grid.html">Jewellery</a></li>
                            <li>
                                <div><span><a href="shop-product-grid.html">More</a></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end categories section -->

        <!-- start offer banner section -->
        <section class="padding-25px-tb sm-padding-15px-tb xs-no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs-margin-25px-bottom">
                        <div class="bg-img cover-background padding-60px-tb padding-30px-lr xs-padding-45px-tb xs-padding-20px-lr" data-background="img/offer-banner/product-banner-02.jpg') }}">
                            <h4 class="margin-30px-bottom">Men's Fashion<br><span class="text-theme-color">- Collection</span></h4>
                            <a href="shop-product-grid.html" class="butn-style1 fill"><span>shop now</span></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-img cover-background padding-60px-tb padding-30px-lr xs-padding-45px-tb xs-padding-20px-lr" data-background="img/offer-banner/product-banner-01.jpg') }}">
                            <h4 class="margin-30px-bottom">Women's Fashion<br><span class="text-theme-color">- Collection</span></h4>
                            <a href="shop-product-grid.html" class="butn-style1 fill"><span>shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end offer banner section -->

        <!-- start services section -->
        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 xs-margin-25px-bottom">
                        <div class="border padding-25px-all sm-padding-25px-tb sm-padding-15px-lr h-100">
                            <i class="ti-headphone-alt font-size34"></i>
                            <h5 class="font-size17 sm-font-size16 letter-spacing-1 margin-15px-tb">24/7 Free Support</h5>
                            <p class="width-80 sm-width-95 center-col no-margin-bottom">Please feel free to contact us and we provide best service.</p>
                        </div>
                    </div>
                    <div class="col-md-4 xs-margin-25px-bottom">
                        <div class="border padding-25px-all sm-padding-25px-tb sm-padding-15px-lr h-100">
                            <i class="ti-money font-size34"></i>
                            <h5 class="font-size17 sm-font-size16 letter-spacing-1 margin-15px-tb">Money Back Return</h5>
                            <p class="width-80 sm-width-95 center-col no-margin-bottom">If you are not satisfied with product then we provide refunds.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border padding-25px-all sm-padding-25px-tb sm-padding-15px-lr h-100">
                            <i class="ti-truck font-size34"></i>
                            <h5 class="font-size17 sm-font-size16 letter-spacing-1 margin-15px-tb">Free Worldwide Shipping</h5>
                            <p class="width-80 sm-width-95 center-col no-margin-bottom">We're very pleased to be able to worldwide shipping.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end service section -->

        <!-- start offer section -->
        <section class="bg-img cover-background background-position-x-25" data-background="img/offer-banner/product-banner-04.jpg') }}">
            <div class="container">
                <div class="text-center">

                    <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                        <span class="font-weight-600 text-theme-color font-size16">Get <span class="text-danger">70%</span> off to your order</span>
                        <h3 class="no-margin-bottom">Limited Time Offer!</h3>
                    </div>

                    <ul class="countdown count-style-one text-center no-padding no-margin">
                        <!-- start days -->
                        <li><span class="days">00</span>
                            <p class="timeRefDays text-center">days</p>
                        </li>
                        <!-- end days -->
                        <!-- start hours -->
                        <li><span class="hours">00</span>
                            <p class="timeRefHours">hours</p>
                        </li>
                        <!-- end hours -->
                        <!-- start minutes -->
                        <li><span class="minutes">00</span>
                            <p class="timeRefMinutes">minutes</p>
                        </li>
                        <!-- end minutes -->
                        <!-- start seconds -->
                        <li><span class="seconds">00</span>
                            <p class="timeRefSeconds">seconds</p>
                        </li>
                        <!-- end seconds -->
                    </ul>
                    <a href="shop-product-grid.html" class="butn-style1 fill margin-40px-top sm-margin-35px-top"><span>Shop Now</span></a>
                </div>

            </div>
        </section>
        <!-- end offer section -->

        <!-- start featured product section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                    <h3 class="no-margin-bottom">Featured Products</h3>
                </div>
                <div class="featured-product owl-carousel owl-theme">

                    <div class="product-grid-two">
                        <div class="product-img">
                            <a href="shop-product-grid.html"><img src="{{ asset('assets/img/products/featured-products/product-01.jpg') }}" alt="..."></a>
                        </div>
                        <div class="product-block">
                            <a href="shop-product-grid.html">Floral Fit and Flare Dress</a>
                            <span class="price">$21.10</span>
                        </div>
                        <div class="product-hover">
                            <div class="cart-button">
                                <div class="display-inline-block">
                                    <a href="#!">+ Add to cart</a>
                                </div>
                                <div class="btn-group float-right">
                                    <a href="#!"><i class="ti-fullscreen"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid-two">
                        <div class="product-img">
                            <a href="shop-product-grid.html"><img src="{{ asset('assets/img/products/featured-products/product-02.jpg') }}" alt="..."></a>
                        </div>
                        <div class="product-block">
                            <a href="shop-product-grid.html">Slim Fit Formal Shirt</a>
                            <span class="price">$18.22</span>
                        </div>
                        <div class="product-hover">
                            <div class="cart-button">
                                <div class="display-inline-block">
                                    <a href="#!">+ Add to cart</a>
                                </div>
                                <div class="btn-group float-right">
                                    <a href="#!"><i class="ti-fullscreen"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid-two">
                        <div class="product-img">
                            <a href="shop-product-grid.html"><img src="{{ asset('assets/img/products/featured-products/product-03.jpg') }}" alt="..."></a>
                        </div>
                        <div class="product-block">
                            <a href="shop-product-grid.html">Women's Winter Coat</a>
                            <span class="price">$25.40</span>
                        </div>
                        <div class="product-hover">
                            <div class="cart-button">
                                <div class="display-inline-block">
                                    <a href="#!">+ Add to cart</a>
                                </div>
                                <div class="btn-group float-right">
                                    <a href="#!"><i class="ti-fullscreen"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid-two">
                        <div class="product-img">
                            <a href="shop-product-grid.html"><img src="{{ asset('assets/img/products/featured-products/product-04.jpg') }}" alt="..."></a>
                        </div>
                        <div class="product-block">
                            <a href="shop-product-grid.html">Fit Stretchable Jeans</a>
                            <span class="price">$14.90</span>
                        </div>
                        <div class="product-hover">
                            <div class="cart-button">
                                <div class="display-inline-block">
                                    <a href="#!">+ Add to cart</a>
                                </div>
                                <div class="btn-group float-right">
                                    <a href="#!"><i class="ti-fullscreen"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-grid-two">
                        <div class="product-img">
                            <a href="shop-product-grid.html"><img src="{{ asset('assets/img/products/featured-products/product-05.jpg') }}" alt="..."></a>
                        </div>
                        <div class="product-block">
                            <a href="shop-product-grid.html">Men's Sleeveless Jacket</a>
                            <span class="price">$21.50</span>
                        </div>
                        <div class="product-hover">
                            <div class="cart-button">
                                <div class="display-inline-block">
                                    <a href="#!">+ Add to cart</a>
                                </div>
                                <div class="btn-group float-right">
                                    <a href="#!"><i class="ti-fullscreen"></i></a>
                                    <a href="#!"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end featured product section -->

        <!-- start new arrivals section -->
        <section class="padding-25px-tb sm-padding-15px-tb xs-no-padding">
            <div class="container">
                <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                    <h3 class="no-margin-bottom">New Arrivals</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 xs-margin-35px-bottom">
                        <div class="line-title">
                            <h4>Featured</h4>
                        </div>

                        <div class="media margin-20px-bottom">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-06.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Men's Football Boots</a>
                                <span class="d-block">$15.00</span>
                            </div>
                        </div>

                        <div class="media margin-20px-bottom">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-01.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Leather Motorcycle Gloves</a>
                                <span class="d-block">$12.10</span>
                            </div>
                        </div>

                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-02.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray"> Sun Protection Cap </a>
                                <span class="d-block">$10.20</span>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 xs-margin-35px-bottom">
                        <div class="line-title">
                            <h4>Top Rated</h4>
                        </div>
                        <div class="media margin-20px-bottom">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-03.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Ray Ban Sunglasses</a>
                                <span class="d-block">$10.20</span>
                            </div>
                        </div>

                        <div class="media margin-20px-bottom">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-04.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Smart Pocket Volets</a>
                                <span class="d-block">$20.65</span>
                            </div>
                        </div>

                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-05.jpg') }}" alt="...">
                            <div class="media-body">
                                <a href="shop-product-detail.html" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Heel Character Shoes</a>
                                <span class="d-block">$19.50</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="line-title">
                            <h4>Trending</h4>
                        </div>
                        <div class="media">
                            <a href="shop-product-detail.html"><img src="{{ asset('assets/img/offer-banner/product-banner-03.jpg') }}" alt="..."></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end new arrivals section -->

        <!-- start blog section -->
        <section>
            <div class="container">
                <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                    <h3 class="no-margin-bottom">Latest News</h3>
                </div>
                <div class="row">

                    <!-- start blog -->
                    <div class="col-lg-4 sm-margin-25px-bottom blog-style-one">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="{{ asset('assets/img/blog/blog-01.jpg') }}" alt="...">
                            </div>
                            <div class="content">
                                <h5 class="margin-10px-bottom font-weight-600"><a href="blog-post.html">How to improve your store</a></h5>
                                <div class="tag alt-font">
                                    <a href="blog-right-sidebar.html">Store</a>
                                    <span class="font-size12 display-inline-block text-theme-color">10 Jan 2020</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end blog -->

                    <!-- start blog -->
                    <div class="col-lg-4 sm-margin-25px-bottom blog-style-one">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="{{ asset('assets/img/blog/blog-02.jpg') }}" alt="...">
                            </div>
                            <div class="content">
                                <h5 class="margin-10px-bottom font-weight-600"><a href="blog-post.html">Deals to generate more sales</a></h5>
                                <div class="tag alt-font">
                                    <a href="blog-right-sidebar.html">Sales</a>
                                    <span class="font-size12 display-inline-block text-theme-color">04 Jan 2020</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end blog -->

                    <!-- start blog -->
                    <div class="col-lg-4 blog-style-one">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="{{ asset('assets/img/blog/blog-03.jpg') }}" alt="...">
                            </div>
                            <div class="content">
                                <h5 class="margin-10px-bottom font-weight-600"><a href="blog-post.html">Gift ideas for everyone</a></h5>
                                <div class="tag alt-font">
                                    <a href="blog-right-sidebar.html">Ideas</a>
                                    <span class="font-size12 display-inline-block text-theme-color">01 Jan 2020</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end blog -->

                </div>
            </div>
        </section>
        <!-- end blog section -->

        <!-- start clients section -->
        <div class="section-clients bg-light-gray">
            <div class="container">
                <div class="owl-carousel owl-theme clients">
                    <div class="item"><img src="{{ asset('assets/img/partners/client-01.png') }}" alt="..."></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-02.png') }}" alt="..."></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-03.png') }}" alt="..."></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-04.png') }}" alt="..."></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-05.png') }}" alt="..."></div>
                    <div class="item"><img src="{{ asset('assets/img/partners/client-06.png') }}" alt="..."></div>
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
                            <p class="xs-font-size13">&copy; 2020 Smartshop is Powered by Chitrakoot Web</p>
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

    <!-- all js include end -->

</body>

</html>