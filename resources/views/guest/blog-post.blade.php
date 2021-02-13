@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Blog Post</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="home-shop-1.html">Home</a></li>
                        <li><a href="#!">Blog Post</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start blog post section -->
        <section class="blogs">
            <div class="container">
                <div class="row">

                    <!--  start blog left-->
                    <div class="col-lg-9 col-md-12 padding-30px-right xs-padding-15px-right sm-margin-30px-bottom">
                        <div class="posts">
                            <!--  start post-->
                            <div class="post">
                                <div class="post-img">
                                    <a href="#!" class="width-100">
                                        <img src="{{ asset('assets/img/blog/blog-01.jpg') }}" class="img-style" alt="...">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="post-meta">
                                        <div class="post-title">
                                            <h2>How to improve your store</h2>
                                        </div>
                                        <ul class="meta">
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-user" aria-hidden="true"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i> Designin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fas fa-calendar-alt" aria-hidden="true"></i> 10 Jan 2020 
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-tags" aria-hidden="true"></i> Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-comments" aria-hidden="true"></i> 0 Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-cont">
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                        <p class="special">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident minim veniam.</p>
                                    </div>
                                    <div class="share-post">
                                        <span>Share Post</span>
                                            <ul>
                                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  start post-->

                            <!--  start comment-->
                            <div class="comments-area">

                                <div class="inner-title">
                                <h3 class="no-margin-bottom">Comments</h3>
                            </div>

                            <div class="comment-box no-border-bottom">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/img/avatar/03.png') }}" alt="..." class="rounded-circle width-85 xs-width-100">
                                </div>
                                <div class="comment-info">
                                    <h6><a href="#!">Ivonne Drennen</a></h6>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="reply">
                                        <a href="#!">
                                            <i class="fa fa-reply" aria-hidden="true"></i> Reply
                                        </a>
                                    </div>
                                </div>
                            </div>

                                

                                
                                
                                
                            </div>
                            <!-- end comment-->

                            <!--  start form-->

                            <div class="common-block">

                            <div class="inner-title">
                                <h4 class="no-margin-bottom">Post a Comment</h4>
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

                                    <div class="col-12 mb-4">

                                        <label>Message</label>
                                        <div class="form-group mb-1">
                                            <textarea rows="2" class="form-control" placeholder="Tell us a few words"></textarea>
                                        </div>

                                    </div>

                                </div>

                                <button type="button" class="butn-style2">Send Message</button>

                            </form>

                        </div>

                            <!--  end form-->
                        </div>
                    </div>
                    <!--  end blog left-->

                    <!--  start blog right-->
                    <div class="col-lg-3 col-md-12">
                        <div class="side-bar">
                            <div class="widget search no-padding">
                                <form method='post'>
                                    <input type="hidden" name="form-name" value="form 1" />
                                    <input type="search" name="search" placeholder="Type here ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Recent Posts</h5>
                                </div>
                                <ul>
                                    <li><a href="#!">You don't want Traveling as your enemy!</a></li>
                                    <li><a href="#!">Good City Has Written All Over It.</a></li>
                                    <li><a href="#!">he 20 Best Lightroom Presets You Need.</a></li>
                                    <li><a href="#!">Pride of the Performers For Hundred Years.</a></li>
                                    <li><a href="#!">Time will be for you what you want it to be.</a></li>
                                </ul>
                            </div>
                            
                            
                            
                            <div class="widget">
                                <div class="widget-title">
                                    <h5>Follow Us</h5>
                                </div>
                                <ul class="social-listing">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--  end blog right-->

                </div>
            </div>
        </section>
        <!-- end blog post section -->

@endsection