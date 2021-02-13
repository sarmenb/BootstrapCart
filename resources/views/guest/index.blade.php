@extends('layouts.guest')
@section('content')

<section>
            <div class="container">
                <div class="text-center margin-40px-bottom sm-margin-35px-bottom">
                    <h3 class="no-margin-bottom">Featured Products</h3>
                </div>

                <div class="row justify-content-center">
                    @foreach($products as $product)
                    
                    <div class="col-10 col-sm-6 col-lg-3 py-4">
                        <a href="{{ route('guest.product-detail', $product->slug) }}">
                            <img src="{{ asset('storage/images/' . $product->images['0']->image) }}">
                        </a>
                        <h5 class="margin-20px-top sm-margin-15px-top margin-10px-bottom sm-margin-5px-bottom font-size16 xs-font-size15 letter-spacing-1 text-uppercase text-left">
                            <a href="{{ route('guest.product-detail', $product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h5>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>


        @include('guest.section-blog')

@endsection