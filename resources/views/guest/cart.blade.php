@extends('layouts.guest')
@section('content')

<!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-background="{{ asset('assets/img/bg/page-title.jpg') }}">
            <div class="container">

                <div class="title-info">
                    <h1>Shop Cart</h1></div>
                <div class="breadcrumbs-info">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#!">Shop Cart</a></li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <!-- start cart table section -->
        <section>
            <div class="container">

                <div class="row">

                    <!-- Start Product Table -->
                    <div class="col-12 shop-cart-table">
                        <table class="table shop-cart text-center">
                            <colgroup>
                                <col width="100">
                                    <col>
                                        <col width="1">
                                            <col>
                                                <col width="100">
                                                    <col width="1">
                            </colgroup>

                            <thead>
                                <tr>
                                    <th class="first"></th>
                                    <th class="text-left text-uppercase font-weight-500">Product</th>
                                    <th class="text-left text-uppercase font-weight-500">Price</th>
                                    <th class="text-center text-uppercase font-weight-500">Qty</th>
                                    <th class="text-left text-uppercase font-weight-500">Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $item)
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="#!">
                                        <img src="{{ asset('storage/images/' . $item['image']) }}" >
                                        </a>
                                    </td>
                                    <td class="text-left">
                                        <a href="#!">{{ $item['name'] }}</a>
                                        
                                    </td>
                                    <td class="text-left">
                                        ${{ number_format($item['price'], 2) }}
                                    </td>
                                    <td class="product-quantity">
                                        <input type="text" name="quantity" value="{{ $item['quantity'] }}" />
                                    </td>
                                    <td class="product-subtotal text-left">
                                        ${{ $item['quantity'] * $item['price'] }}
                                    </td>
                                    <td class="product-remove text-center">
                                        <a href="#!"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Product Table -->

                    <!-- Start Button Set -->
                    <div class="col-12 border-bottom border-top padding-40px-tb sm-padding-20px-tb sm-margin-20px-bottom xs-margin-15px-bottom">
                        <button class="butn-style2 small bg-color xs-margin-10px-bottom">
                            <span>Empty Cart</span>
                        </button>
                        <button class="butn-style2 small bg-color float-right margin-10px-left xs-margin-10px-bottom">
                            <span>Continue Shopping</span>
                        </button>
                        <button class="butn-style2 small bg-color float-right margin-10px-left">
                            <span>Update Shopping Cart</span>
                        </button>
                    </div>
                    <!-- End Button Set -->

                    <!-- Start Total Block Set -->
                    <div class="col-12 cart-total padding-40px-top sm-padding-20px-tb">
                        <div class="row">

                            <div class="col-lg-12 offset-md-0">
                                <table class="table cart-sub-total">
                                    <tbody>
                                        <tr>
                                            <th class="text-right no-padding-right text-uppercase">
                                            Cart Subtotal</th>
                                            <td class="text-uppercase text-right no-padding-right">
                                                ${{ number_format($cartSubTotal, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right no-padding-right text-uppercase">
                                                Shipping and Handling
                                            </th>
                                            <td class="text-uppercase text-right no-padding-right">
                                                ${{ number_format($cartShipping, 2) }}
                                            </td>
                                        </tr>
                                        
                                        <tr class="total">
                                            <th class="text-uppercase text-right no-padding-right xs-no-padding">Taxes</th>
                                            <td class="text-uppercase text-right no-padding-right xs-no-padding">
                                                ${{ number_format($cartTaxes, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="no-padding-right xs-no-padding" colspan="2">
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th class="text-uppercase text-right no-padding-right xs-no-padding">Order Total</th>
                                            <td class="text-uppercase text-right no-padding-right xs-no-padding">
                                                ${{ number_format($cartTotal, 2) }}
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="no-padding-right xs-no-padding" colspan="2">
                                                <hr class="no-margin-bottom">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a class="butn-style2 float-right" href="{{ route('guest.checkout.address') }}"><span>Proceed to Checkout</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Total Block Set -->

                </div>

            </div>
        </section>
        <!-- end cart table section -->

@endsection