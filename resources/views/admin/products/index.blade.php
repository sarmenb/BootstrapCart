@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

<h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-2 mb-1">
      <div>Products</div>
      <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Create Product</a>
</h4>

<div class="row py-4">
@forelse($products as $product)

<div class="col-sm-4 col-xl-4">
                <div class="card mb-4">
                  <div class="w-100">
                    <a href="javascript:void(0)" class="card-img-top d-block ui-rect-60 ui-bg-cover" style="background-image: url('{{ asset('storage/images/' . $product->images['0']->image ) }}');">
                      <div class="d-flex justify-content-between align-items-end ui-rect-content p-3">
                        
                        <div class="text-big">
                          <div class="badge badge-dark font-weight-bold">${{ $product->price }}</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="mb-3 text-center"><a href="javascript:void(0)" class="text-body">{{ $product->name }}</a></h5>
                    
                    <div class="media">
                      <div class="media-body">
                        
                        <a href="{{ route('products.edit', $product->slug) }}" class="btn btn-info btn-sm">Edit</a>
                      </div>
                      <div class="text-muted small">
                        <form method="POST" action="{{ route('products.destroy', $product->slug) }}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @empty
            <span class="text-secondary">No Products Found</span>
            @endforelse


</div>

  <div class="row">
    {{ $products->links() }}
  </div>
</div>

@endsection