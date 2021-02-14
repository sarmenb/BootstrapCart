@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Shop Checkout</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#!">Shop Checkout</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start checkout section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="process-steps margin-50px-bottom sm-margin-35px-bottom">
                            <a class="step" href="{{ route('guest.checkout.address') }}">
                                <i class="ti-direction-alt"></i>
                                <h4 class="step-title">1. Address</h4>
                            </a>

                            <a class="step active" href="{{ route('guest.checkout.shipping') }}">
                                <i class="ti-truck"></i>
                                <h4 class="step-title">2. Shipping</h4>
                            </a>

                            <a class="step" href="{{ route('guest.checkout.payment') }}">
                                <i class="ti-wallet"></i>
                                <h4 class="step-title">3. Payment</h4>
                            </a>

                            <a class="step" href="{{ route('guest.checkout.complete') }}">
                                <i class="ti-check-box"></i>
                                <h4 class="step-title">Complete</h4>
                            </a>
                        </div>
                    </div>

                    <!-- start left pannel section -->
                    <div class="col-lg-9 col-md-12 padding-40px-right sm-padding-15px-lr sm-margin-35px-bottom">

                        <div class="common-block">

                            <div class="inner-title">
                                <h4 class="no-margin-bottom">Choose Shipping Method</h4>
                            </div>

                            <form method="POST" action="{{ route('guest.checkout.shippingPost') }}">
                                @csrf
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-left">Shipping method</th>
                                            <th>Delivery time</th>
                                            <th>Handling fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rates as $rate)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-radio mb-0">
                                                    <input
                                                    type="radio" 
                                                    name="shippingMethod"
                                                    value="{{ $rate->object_id }}">

                                                    <input 
                                                    type="hidden" 
                                                    name="rate_{{ $rate->object_id }}" 
                                                    value="{{ number_format($rate->amount, 2) }}">

                                                    <input 
                                                    type="hidden" 
                                                    name="service_{{ $rate->object_id }}" 
                                                    value="{{ $rate->servicelevel->name }}">
                                                </div>
                                            </td>
                                            <td class="text-left">
                                                <span class="text-gray-dark">
                                                    {{ $rate->provider }}
                                                </span>
                                            </td>
                                            <td>{{ $rate->servicelevel->name }}</td>
                                            <td>${{ number_format($rate->amount, 2) }}</td>
                                        </tr>
                                        @endforeach
                           
                                    </tbody>
                                </table>
                            </div>

                            <div class="buttons-set">
                                <a href="{{ route('guest.checkout.address') }}" class="butn-style2 wide">
                                    <i class="fas fa-arrow-left margin-5px-right"></i> 
                                    Back
                                </a>
                                
                                <button type="submit" class="butn-style2 wide">
                                    <i class="fas fa-arrow-right margin-5px-left"></i>
                                    Continue
                                </button>

                            </div>

                        </form>

                        </div>

                    </div>
                    <!-- end left pannel section -->

                    <!-- start right pannel section -->
                    <div class="col-lg-3 col-12 side-bar">

                        <div class="widget">

                            <div class="widget-title">
                                <h5>Order Summary</h5>
                            </div>

                            <table class="table classic">
                                <tbody>
                                    <tr>
                                        <th>Cart Subtotal:</th>
                                        <td class="text-gray-dark">${{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td class="text-gray-dark">${{ number_format($shipping, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Estimated tax:</th>
                                        <td class="text-gray-dark">${{ number_format($tax, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td class="text-lg text-gray-dark">${{ number_format($total, 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="widget">

                            <div class="widget-title">
                                <h5>Popular Products</h5>
                            </div>

                            <div class="media margin-20px-bottom">
                                <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-06.jpg') }}" alt="...">
                                <div class="media-body">
                                    <a href="#!" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Men's Football Boots</a>
                                    <span class="d-block">$15.00</span>
                                </div>
                            </div>

                            <div class="media margin-20px-bottom">
                                <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-01.jpg') }}" alt="...">
                                <div class="media-body">
                                    <a href="#!" class="margin-5px-bottom font-weight-600 text-extra-dark-gray">Leather Motorcycle Gloves</a>
                                    <span class="d-block">$12.10</span>
                                </div>
                            </div>

                            <div class="media">
                                <img class="mr-3" src="{{ asset('assets/img/products/thumbs/thumb-02.jpg') }}" alt="...">
                                <div class="media-body">
                                    <a href="#!" class="margin-5px-bottom font-weight-600 text-extra-dark-gray"> Sun Protection Cap </a>
                                    <span class="d-block">$10.20</span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end right pannel section -->

                </div>
            </div>
        </section>
        <!-- end checkout section -->

@endsection