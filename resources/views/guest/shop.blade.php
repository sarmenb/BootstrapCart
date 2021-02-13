@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" 
        data-background="{{ asset('assets/img/page-title.jpg') }}">
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
                                            @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('shop.category', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>

                                                @if($category->product->count() > 0)
                                                    <span class="badge badge-success float-right">
                                                        {{ $category->product->count() }}
                                                    </span>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- <div class="widget">
                            <div class="widget-title">
                                <h5>Price Range</h5>
                            </div>
                            <input type="text" class="price-range" name="my_range" value="">
                            <a href="#!" class="butn-style2 small margin-30px-top">Filter</a>
                        </div> -->


                    </div>
                    <!-- end sidebar panel -->

                    <!-- start right panel section -->
                    <div class="col-lg-9 col-12 padding-30px-left md-padding-15px-lr order-1 order-lg-2 sm-margin-35px-bottom">

                        
                        <!-- start product listing -->
                        <div class="row">
                            @if(count($products) == 0)
                            <p class="text-center">No Products Found</p>
                            @endif
                            @foreach($products as $product)
                            <div class="col-11 col-sm-6 col-xl-4 margin-30px-bottom">
                                <div class="product-grid">
                                    <div class="product-img">
                                        <a href="{{ route('guest.productDetail', $product->slug) }}">
                                        <img src="{{ asset('storage/images/' . $product->images['0']->image) }}">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h3>
                                            <a href="{{ route('guest.productDetail', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        <h4 class="price">
                                            <span class="offer-price">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="product-buttons">
                                        <ul>
                                            <!-- <li>
                                                <a href="#!" class="btn-link" title="Add To Wishlist">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li> -->
                                            <li>
                                                <button class="butn-style2" type="submit">Add to Cart</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            

                        </div>

                        <!-- start pagination -->
                        <div class="pagination text-small text-uppercase text-extra-dark-gray margin-20px-top sm-margin-15px-top">
                            {{ $products->links() }}
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