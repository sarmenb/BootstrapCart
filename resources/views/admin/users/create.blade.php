@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

            <h4 class="font-weight-bold py-2 mb-1">
              	Create User
            </h4>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                    <li class="breadcrumb-item active">Create User</li>
                </ol>
            </nav>

            <form method="POST" action="{{ route('users.store') }}">
            	@csrf
            <div class="nav-tabs-top nav-responsive-sm py-4">
              
              <div class="tab-content">
                <!-- Basic info -->
                <div class="tab-pane fade show active" id="item-info">

                  <div class="card-body">

                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                      @error('name')
                      	<span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                      @error('email')
                      	<span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>


                    <div class="form-group">
                      <label class="form-label">Password Confirmation</label>
                      <input type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                      @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                  </div>
                  
                  </div>
                </div>
                <!-- / Images -->

              </div>
            

            <div class="text-right mt-3">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
          </div>
          <!-- / Content -->
@endsection