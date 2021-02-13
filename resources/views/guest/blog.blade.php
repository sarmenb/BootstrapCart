@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Blog</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#!">Blog Grid</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start blog section -->
        <section>
            <div class="container">
                    <div class="row">

                    @for($i=1;$i<=9;$i++)
                    <!-- start blog -->
                    <div class="col-md-6 col-lg-4 margin-40px-bottom sm-margin-25px-bottom blog-style-one">
                        <div class="item text-center">
                            <div class="post-img">
                                <img src="{{ asset('assets/img/blog/blog-01.jpg') }}" alt="...">
                            </div>
                            <div class="content">
                                <h5 class="margin-10px-bottom font-weight-600">
                                    <a href="{{ route('guest.blog-post') }}">How to improve your store</a>
                                </h5>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <div class="tag alt-font">
                                    
                                    <span class="font-size12 display-inline-block text-theme-color">10 Jan 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end blog -->
                    @endfor

                </div>
            </div>
        </section>
        <!-- end blog section -->

@endsection