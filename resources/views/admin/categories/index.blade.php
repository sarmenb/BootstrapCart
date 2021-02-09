@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

            <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
              <div>Categories</div>
              <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Create Category</a>
            </h4>

            @if(count($categories) == 0)
              <span class="text-secondary">No Categories Found</span>
            @else
            <div class="card">
              
              <div class="card-datatable table-responsive">
                <table id="order-list" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Slug</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($categories as $category)
                  	<tr>
                  		<td>{{ $category->name }}</td>
                  		<td>{{ $category->slug }}</td>
                  		<td>
                        <div class="d-flex form-inline align-items-center">
                  			<a href="{{ route('categories.edit', $category->slug) }}" class="btn btn-sm btn-info mr-3">
                  				Edit
                  			</a>

                  			<form method="POST" action="{{ route('categories.destroy', $category->slug) }}">
        				    			@csrf
        				    			@method('DELETE')
        				    			<button class="btn btn-danger btn-sm" type="submit">Delete</button>
				    		        </form>
                        </div>
				    	       </td>
				          </tr>
				          @endforeach
                </table>      
              </div>
            </div>
            @endif

            {{ $categories->links() }}

          </div>
          @endsection