<!-- start left panel -->
                    <div class="col-lg-4 col-sm-9 sm-margin-40px-bottom">

                        <div class="account-pannel">

                            <div class=" padding-25px-all sm-padding-20px-all">

                                <div class="text-center">
                                    <div class="padding-15px-bottom">
                                        <img class="img-fluid rounded-circle img-thumbnail" src="{{ asset('assets/img/avatar/t-3.jpg') }}" alt="...">
                                    </div>
                                    <h6 class="font-size18 sm-font-size16 no-margin-bottom">Peter Parker</h6>
                                    <small>Joined February 06, 2017</small>
                                    
                                </div>
                            </div>

                            <div class="list-group">
                                <a class="list-group-items @if(Route::is('members.orders')) active @endif" href="{{ route('members.orders') }}">
                                    <i class="ti-bag padding-10px-right"></i>Orders
                                    <span class="badge badge-pill">6</span>
                                </a>

                                <a class="list-group-items @if(Route::is('members.profile')) active @endif" href="{{ route('members.profile') }}">
                                    <i class="ti-user padding-10px-right"></i>Profile
                                </a>

                                <a class="list-group-items @if(Route::is('members.addresses')) active @endif" href="{{ route('members.addresses') }}">
                                    <i class="ti-location-pin padding-10px-right"></i>Addresses
                                </a>

                                <a class="list-group-items @if(Route::is('members.wishlist')) active @endif" href="{{ route('members.wishlist') }}">
                                    <i class="ti-heart padding-10px-right"></i>Wishlist
                                    <span class="badge badge-pill">3</span>
                                </a>

                                <a class="list-group-items" href="{{ route('logout') }}">
                                    <i class="ti-logout padding-10px-right"></i>Logout
                                    
                                </a>

                                
                            </div>

                        </div>

                    </div>
                    <!-- end left panel -->