@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

            <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-2 mb-1">
              <div>Users</div>
              


              <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary rounded-pill d-block"><span class="ion ion-md-add"></span>&nbsp; Create User</a>
            </h4>

            <div class="card mt-4">
              <div class="card-datatable table-responsive">
                <table id="order-list" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Created</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($users as $user)
                  	<tr>
                  		<td>{{ $user->name }}</td>
                  		<td>{{ $user->email }}</td>
                      <td>
                        @if($user->hasRole('admin'))
                          <span class="badge badge-primary">Admin</span>
                        @elseif($user->hasRole('customer'))
                          <span class="badge badge-secondary">Customer</span>
                        @endif
                      </td>
                      <td>{{ $user->created_at->diffForHumans() }}</td>
                  		<td>
                        <div class="d-flex form-inline align-items-center">
                  			<a href="{{ route('users.edit', $user->slug) }}" class="btn btn-sm btn-info mr-3">
                  				Edit
                  			</a>

                        @if(Auth::user()->id == $user->id)
                        @else
                  			<form method="POST" action="{{ route('users.destroy', $user->slug) }}">
        				    			@csrf
        				    			@method('DELETE')
        				    			<button class="btn btn-danger btn-sm" type="submit">Delete</button>
				    		        </form>
                        @endif
                        </div>
				    	       </td>
				          </tr>
				          @endforeach
                </table>
                
              </div>
            </div>

            {{ $users->links() }}

          </div>
          @endsection