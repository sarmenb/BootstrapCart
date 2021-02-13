@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>My Orders</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#!">My Orders</a></li>
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
                                <h4 class="no-margin-bottom">My Orders</h4>
                            </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            #2257
                                        </th>
                                        <td>
                                            10 January 2020
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-primary small mr-1"></span> Pending
                                        </td>
                                        <td>$29</td>
                                        <td>
                                            <a href="#!" class="text-theme-color">Pay</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2256
                                        </th>
                                        <td>
                                            09 January 2020
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$21</td>
                                        <td>
                                            <a href="#!" class="text-theme-color">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2255
                                        </th>
                                        <td>
                                            08 January 2020
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$66</td>
                                        <td>
                                            <a href="#!" class="text-theme-color">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2254
                                        </th>
                                        <td>
                                            07 January 2020
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-success small mr-1"></span> Completed
                                        </td>
                                        <td>$27</td>
                                        <td>
                                            <a href="#!" class="text-theme-color">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            #2253
                                        </th>
                                        <td>
                                            06 January 2020
                                        </td>
                                        <td>
                                            <span class="fas fa-circle text-danger small mr-1"></span> Cancelled
                                        </td>
                                        <td>$23</td>
                                        <td>
                                            <a href="#!" class="text-theme-color">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="butn-style2 margin-15px-top" href="#!"><span>Show All Orders</span></a>
                        </div>
                    </div>
                    <!-- end right panel -->
                </div>
            </div>
        </section>
        <!-- end account-orders section -->

@endsection