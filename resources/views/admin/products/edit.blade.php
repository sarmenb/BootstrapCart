@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">
<h4 class="font-weight-bold py-2 mb-1">
    Edit Product
</h4>

<nav class="py-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
        <li class="breadcrumb-item active">Edit Product</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-12">
        <div class="nav-tabs-top mb-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#product-description">
                        Product Description
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-images">
                        Product Images
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-description">
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->slug) }}" enctype='multipart/form-data'>
                          @csrf
                          @method('PUT')
                          @include('admin.products.tabs.product-information')
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="product-images">
                    <div class="card-body">
                        @include('admin.products.tabs.product-images')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection