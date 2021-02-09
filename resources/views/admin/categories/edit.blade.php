@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">



            <h4 class="font-weight-bold py-2 mb-1">
              	Edit Category
            </h4>

             <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Edit Category</li>
                </ol>
            </nav>

            <form method="POST" action="{{ route('categories.update', $category->slug) }}">
            	@csrf
              @method('PUT')
            <div class="nav-tabs-top nav-responsive-sm py-4">
              
              <div class="tab-content">
                <!-- Basic info -->
                <div class="tab-pane fade show active" id="item-info">

                  <div class="card-body">

                    <div class="form-group">
                      <label class="form-label">Category</label>
                      <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                      @error('name')
                      	<span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label">Slug</label>
                      <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                      @error('slug')
                      	<span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                  </div>
                  
                  </div>
                </div>
                <!-- / Images -->

              </div>
            

            <div class="text-right mt-3">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
          </div>
          <!-- / Content -->
@endsection