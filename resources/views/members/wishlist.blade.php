@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>My Wishlist</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#!">My Wishlist</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start account wishlist section -->
        <section>
            <div class="container">
                <div class="row justify-content-center">

                    <!-- start left panel -->
                    @include('members.left-panel')
                    <!-- end left panel -->

                    <!-- start right panel -->
                    <div class="col-lg-8">

                        <div class="common-block">

                            <div class="inner-title">
                                <h4 class="no-margin-bottom">My Wishlist</h4>
                            </div>

                            <div class="table-responsive">
                                <table class="table v-align-middle">
                                    <thead>
                                        <tr>
                                            <th>Delete</th>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Stock Status</th>
                                            <th>Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#!"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="#!">
                                                	<img src="{{ asset('assets/img/products/top-rated/1.jpg') }}" alt="..." />
                                                </a>
                                            </td>
                                            <td><a href="#!">Amazon Echo Spot</a></td>
                                            <td class="product-price">$199.00</td>
                                            <td class="product-quantity">In Stock</td>
                                            <td><a href="#!" class="butn-style2 small">Add To Cart</a></td>
                                        </tr>

                                        <tr>
                                            <td><a href="#!"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="#!">
                                                	<img src="{{ asset('assets/img/products/top-rated/2.jpg') }}" alt="..." />
                                                </a>
                                            </td>
                                            <td><a href="#!">Desktop Monitor Stand</a></td>
                                            <td class="product-price">$49.00</td>
                                            <td class="product-quantity">In Stock</td>
                                            <td><a href="#!" class="butn-style2 small">Add To Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="#!">
                                                	<img src="{{ asset('assets/img/products/top-rated/3.jpg') }}" alt="..." />
                                                </a>
                                            </td>
                                            <td><a href="#!">Virtual Reality Headset</a></td>
                                            <td class="product-price">$199.00</td>
                                            <td class="product-quantity">In Stock</td>
                                            <td><a href="#!" class="butn-style2 small">Add To Cart</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <a class="butn-style2 margin-15px-top" href="#!"><span>Clear Wishlist</span></a>
                        </div>

                        <!-- end right panel -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end account wishlist section -->

@endsection