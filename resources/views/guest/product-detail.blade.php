@extends('layouts.guest')
@section('content')

        <!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Shop Product Detail</h1>
                </div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>
                            <a href="{{ route('guest.product-detail', $product->slug) }}">
                                {{ $product->slug }}
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start product-detail section -->
        <section>
            <div class="container">

                <!-- Start Product Section -->
                <div class="row margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
                    <div class="col-lg-5 sm-text-center sm-margin-30px-bottom">

                        <!-- product left start -->
                        <div class="xzoom-container">

                            <img class="xzoom5 margin-30px-bottom" 
                            id="xzoom-magnific" 
                            src="{{ asset('storage/images/' . $product->images['0']->image ) }}" 
                            xoriginal="{{ asset('storage/images/' . $product->images['0']->image ) }}" alt="..." />

                            <div class="xzoom-thumbs no-margin">

                                @foreach($product->images as $image)
                                <a href="{{ asset('storage/images/' . $image->image) }}">
                                    <img class="xzoom-gallery5" width="80" 
                                    src="{{ asset('storage/images/' . $image->image) }}" 
                                    xpreview="{{ asset('storage/images/' . $image->image) }}" 
                                    title="">
                                </a>
                                @endforeach

                            </div>
                        </div>
                        <!-- product left end -->

                    </div>
                    <div class="col-lg-7 padding-40px-left sm-padding-15px-lr">
                        <div class="product-detail">
                            <h2 class="margin-8px-bottom">{{ $product->name }}</h2>
                            <div class="bg-theme separator-line-horrizontal-full margin-20px-bottom"></div>
                            <p class="rating-text">
                                <span>Sku:</span>
                                <span class="font-500 theme-color">{{ $product->sku }}</span>
                            </p>
                            <p>
                                {{ $product->description }}
                            </p>

                            <div class="margin-20px-bottom">
                                <span class="font-size24 font-weight-700 text-theme-color">
                                    ${{ $product->price }}
                                </span>
                            </div>

                            <div class="margin-20px-bottom">

                                <div class="display-inline-block margin-15px-right padding-15px-right border-right border-color-extra-medium-gray">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>

                                <div class="display-inline-block">
                                    <a class="text-theme-color" href="#!">Write a review</a>
                                </div>

                            </div>
                            

                            <!-- PRODUCT VARIANTS START -->
                            <!-- <div class="row">
                                <div class="col-4 col-lg-2 col-md-2">
                                    <label>Size:</label>

                                    <select class="margin-20px-bottom form-control medium">
                                        <option value="S">8 GB</option>
                                        <option value="M">16 GB</option>
                                        <option value="L">64 GB</option>
                                        <option value="XL">128 GB</option>
                                    </select>

                                </div>
                                <div class="col-6 col-lg-3 col-md-2">
                                    <div class="product-color">
                                        <label>Color:</label>
                                        <select class="margin-20px-bottom form-control medium">
                                            <option value="Red">Red</option>
                                            <option value="Black">Black</option>
                                            <option value="Beige">Beige</option>
                                            <option value="White">White</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <!-- PRODUCT VARIANTS END -->

                        <form method="POST" action="{{ route('product.addCart', $product->slug)}}">
                        @csrf
                            <div class="row">
                                <div class="col-4 col-lg-2">
                                    <label>Qty:</label>
                                    
                                    <select name="quantity" class="form-control medium margin-20px-bottom">
                                        @for($i=1;$i<=10;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    
                                </div>

                            </div>

                            <div class="row margin-20px-bottom">
                                <div class="col-lg-12">
                                <button class="butn-style2 margin-15px-right xs-margin-10px-bottom">
                                    <span>
                                        <i class="fas fa-shopping-cart margin-5px-right"></i>
                                        Add to Cart
                                    </span>
                                </button>

                                <button class="butn-style2 dark">
                                    <span>
                                        <i class="fas fa-heart margin-5px-right"></i>
                                        Add to wishlist
                                    </span>
                                </button>
                                </div>
                            </div>

                            @if(Session::has('success'))
                                <span class="text-red">{{ Session::get('success') }}
                            @endif
                        </form>





                            <div class="row">

                                <div class="col-lg-7">

                                    <label class="font-weight-600">Share on:</label>
                                    <ul class="social-icon-style1">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Section -->

                <!-- start product description -->
                <div class="row justify-content-center margin-70px-bottom sm-margin-50px-bottom">

                    <div class="col-12">
                        <div class="horizontaltab tab-style-two">
                            <ul class="resp-tabs-list hor_1 text-left">
                                <li>
                                    <i class="ti-line-dashed display-block xs-display-none"></i>Description
                                </li>
                               
                                <li>
                                    <i class="ti-star display-block xs-display-none"></i>
                                    Reviews (2)
                                </li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>

                                    <p>{{ $product->description }}</p>

                                </div>
                                
                                <div>
                                    <div class="row">

                                        <div class="col-lg-6 order-lg-2 sm-margin-30px-bottom">
                                            <div class="common-block">

                                                <div class="margin-40px-bottom padding-35px-bottom border-bottom">

                                                    <div class="media margin-20px-bottom product-review">
                                                        <img class="mr-3 rounded-circle width-60px" 
                                                        src="{{ asset('assets/img/avatar/t-1.jpg') }}" alt="...">
                                                        <div class="media-body">
                                                            <a href="#!" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Jonal Doe</a>
                                                            <span class="d-block text-theme-color">
                                                            Sep 15, 2018</span>
                                                        </div>

                                                        <span class="text-theme-color">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>

                                                    </div>

                                                    <p class="no-margin-bottom">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>

                                                </div>

                                                

                                                <div class="text-left">
                                                    <a href="#!" class="butn-style2 small">Load More Reviews</a>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-lg-6 order-lg-1">

                                            <div class="common-block">

                                                <div class="inner-title">
                                                    <h4 class="no-margin-bottom">Leave Review</h4>
                                                    <p class="no-margin-bottom">Leave review takes it to the next level.</p>
                                                </div>

                                                <form>

                                                    <div class="row">

                                                        <div class="col-sm-6 mb-2">

                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Your name here">
                                                            </div>

                                                        </div>

                                                        <div class="col-sm-6 mb-2">

                                                            <div class="form-group">
                                                                <label>Your Email</label>
                                                                <input type="email" class="form-control" name="email" placeholder="Your email here">
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-sm-12 mb-2">

                                                            <div class="form-group">
                                                                <label>Rating</label>
                                                                <select class="form-control">
                                                                    <option>5 Stars</option>
                                                                    <option>4 Stars</option>
                                                                    <option>3 Stars</option>
                                                                    <option>2 Stars</option>
                                                                    <option>1 Star</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-12 mb-4">

                                                            <label>Comment</label>
                                                            <div class="form-group mb-1">
                                                                <textarea rows="2" class="form-control" placeholder="Tell us a few words"></textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <button type="button" class="butn-style2">Submit Review</button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end product description -->

                

            </div>
        </section>
        <!-- end product-detail section -->


        @include('guest.section-blog')

@endsection