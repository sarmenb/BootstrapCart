@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

            <h4 class="font-weight-bold py-2 mb-1">
                Create Product
            </h4>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item active">Create Product</li>
                </ol>
            </nav>

            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            <div class="card-body bg-white">
              
                @csrf
              <div class="form-group">
                <label class="form-label">Category</label>
                <select name="category" class="form-control">
                  <option value="">Choose an option</option>
                @foreach($categories as $category)
                  <option value="{{ $category->slug }}">{{ $category->name }}</option>
                @endforeach
              </select>
              @error('category')
                <span class="text-danger">{{ $message }}</span>
              @enderror
              </div>

              <div class="form-group">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-label">Slug</label>
                <input name="slug" type="text" class="form-control">
                @error('slug')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-label">Price</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                  </div>
                  <input name="price" type="text" class="form-control">
                </div>
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>

              <div class="form-group">
                <label class="form-label">Sku</label>
                <input name="sku" type="text" class="form-control">
                @error('sku')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-label">Images</label>
                <input name="images[]" type="file" class="form-control" multiple>
                @error('images')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>


              <div class="form-group">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

            </div>

                
            <div class="text-right mt-3">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            </form>

          </div>
          @endsection