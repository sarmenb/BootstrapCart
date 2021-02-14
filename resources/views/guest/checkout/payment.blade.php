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

                            <a class="step" href="{{ route('guest.checkout.shipping') }}">
                                <i class="ti-truck"></i>
                                <h4 class="step-title">2. Shipping</h4>
                            </a>

                            <a class="step active" href="{{ route('guest.checkout.payment') }}">
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
                                <h4 class="no-margin-bottom">Choose Payment Method</h4>
                            </div>

                            <div id="accordion" class="accordion-style3">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="no-margin-bottom">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="far fa-credit-card padding-10px-right font-size16"></i>Pay with Credit Card</button>
                                    </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <h6 class="font-size14 font-weight-600 margin-10px-bottom">We accept following credit cards:</h6>

                                            <ul class="list-style-17 margin-25px-bottom">
                                                <li><img src="{{ asset('assets/img/content/payment-options/visa.png') }}" alt="..."></li>
                                                <li><img src="{{ asset('assets/img/content/payment-options/mastercard.png') }}" alt="..."></li>
                                                <li><img src="{{ asset('assets/img/content/payment-options/amex.png') }}" alt="..."></li>
                                                <li><img src="{{ asset('assets/img/content/payment-options/discover.png') }}" alt="..."></li>
                                            </ul>

                                            <form>

                                                <div class="row">

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Your name here">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>Card Number</label>
                                                            <input type="text" class="form-control" name="cardnumber" placeholder="Your card number here">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>Month / Year</label>
                                                            <input type="text" class="form-control" name="month" placeholder="MM/YY">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>CVC</label>
                                                            <input type="text" class="form-control" name="cvc" placeholder="CVC">
                                                        </div>

                                                    </div>

                                                </div>

                                                <a href="#!" class="butn-style2 margin-15px-top">Submit</a>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="no-margin-bottom">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fab fa-paypal padding-10px-right font-size16"></i>Pay with PayPal </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">

                                            <h6 class="font-size14 font-weight-600 margin-20px-bottom">Paypal takes good care of you.</h6>

                                            <form>

                                                <div class="row">

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Your email address here">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-6 mb-2">

                                                        <div class="form-group">
                                                            <label>Password </label>
                                                            <input type="password" class="form-control" name="password" placeholder="Your password here">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <a href="#!" class="m-link-muted">Forgot password?</a>
                                                    </div>

                                                </div>

                                                <button type="button" class="butn-style2 margin-15px-top">Login</button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="no-margin-bottom">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fas fa-award padding-10px-right font-size16"></i>Redeem Reward Points </button>
                                    </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">

                                            <div class="custom-control custom-checkbox d-block">
                                                <input class="custom-control-input" type="checkbox" id="reward_points">
                                                <label class="custom-control-label" for="reward_points">Use my reward points to pay for this order.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons-set">
                                <a href="{{ route('guest.checkout.shipping') }}" class="butn-style2 wide"><i class="fas fa-arrow-left margin-5px-right"></i> Back</a>
                                <a href="{{ route('guest.checkout.complete') }}" class="butn-style2 wide">Complete Order <i class="fas fa-arrow-right margin-5px-left"></i></a>
                            </div>

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