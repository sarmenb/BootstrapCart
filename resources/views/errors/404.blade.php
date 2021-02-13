@extends('layouts.guest')
@section('content')

<!-- start 404 page section -->
        <section class="full-screen bg-img cover-background text-center no-padding background-position-x-60" data-overlay-dark="0" data-background="{{ asset('assets/img/bg/bg-1.jpg') }}">
            <div class="container height-100vh">

                <div class="row align-items-center height-100">
                    <div class="col-md-6">

                        <div class="page-container">
                            <p class="alt-font font-weight-700 title text-extra-dark-gray">404</p>
                            <h2 class="font-size40 xs-font-size22 margin-30px-bottom text-dark-gray">Page not found</h2>

                            <a href="/" class="butn-style2 margin-5px-all"><span><i class="fas fa-arrow-left margin-10px-right"></i>Back to Home</span></a>
                            <a href="contact-us.html" class="butn-style2 margin-5px-all"><span>Contact Us<i class="fas fa-arrow-right margin-10px-left"></i></span></a>
                        </div>

                        <div class="margin-50px-top sm-margin-25px-top">
                            <div class="col-12">
                                &copy; {{ date("Y") }} Bootstrap Store  <a href="#!">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end 404 page section -->

@endsection