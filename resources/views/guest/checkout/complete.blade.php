@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Shop Checkout</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
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

                            <a class="step" href="{{ route('guest.checkout.payment') }}">
                                <i class="ti-wallet"></i>
                                <h4 class="step-title">3. Payment</h4>
                            </a>

                            <a class="step active" href="{{ route('guest.checkout.complete') }}">
                                <i class="ti-check-box"></i>
                                <h4 class="step-title">Complete</h4>
                            </a>
                        </div>
                    </div>

                    <!-- start left pannel section -->
                    <div class="col-lg-8 col-md-8 mx-auto sm-margin-35px-bottom">

                        <div class="common-block text-center">

                            <div class="inner-title">
                                <h3 class="no-margin-bottom">Thank you for your order!</h3>
                            </div>

                            <p class="lead margin-25px-bottom">
                                Thank you for your payment. An automated payment receipt will be sent to your registered email.
                            </p>

                            <a href="order-tracking.html" class="butn-style2 wide margin-5px-all">Track your order</a>
                            <a href="/" class="butn-style2 wide margin-5px-all">Back to home</a>
                        </div>

                    </div>
                    <!-- end left pannel section -->

                    
                    </div>
                    <!-- end right pannel section -->

                </div>
            </div>
        </section>
        <!-- end checkout section -->

@endsection