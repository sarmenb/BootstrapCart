@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>My Profile</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#!">My Profile</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start account-orders section -->
        <section>
            <div class="container">
                <div class="row justify-content-center">

                    @include('members.left-panel')

                    <!-- start right panel -->
                    <div class="col-lg-8">

                        <div class="common-block">

                            <div class="inner-title">
                                <h4 class="no-margin-bottom">My Profile</h4>
                                <p class="no-margin-bottom">Time for a Sharp My profile.</p>
                            </div>

                            <form method="post">

                                <div class="row">

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Your name here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Your User Name</label>
                                            <input type="text" class="form-control" name="username" placeholder="Your user name here">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your email here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" name="phone" placeholder="+40-123 456 789">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Your password here">
                                        </div>

                                    </div>

                                    <div class="col-sm-6 mb-2">

                                        <div class="form-group">
                                            <label>Re-Password</label>
                                            <input type="password" class="form-control" name="re-password" placeholder="Your re-password here">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12 mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="terms-condition">
                                            <label class="custom-control-label" for="terms-condition">I agree to the <a href="#!" class="text-theme-color">Terms & Conditions</a></label>
                                        </div>
                                    </div>

                                </div>

                                <button type="button" class="butn-style2 margin-20px-top">Update Profile</button>

                            </form>

                        </div>

                    </div>
                    <!-- end right panel -->
                </div>
            </div>
        </section>
        <!-- end account-orders section -->

@endsection