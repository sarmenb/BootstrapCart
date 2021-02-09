@extends('layouts.admin')
@section('content')

<div class="container-fluid flex-grow-1">

            <h4 class="font-weight-bold py-2 mb-1">
              Orders
            </h4>

            <div class="card">
              <div class="card-datatable table-responsive">
                <table id="order-list" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Order Number</th>
                      <th>Date</th>
                      <th>Product</th>
                      <th>Sub Total</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  	@for($i=1;$i<=10;$i++)
                  	<tr>
                  		<td><a href="{{ route('order.detail', 111111) }}">11111111</a></td>
                  		<td>10/20/2011</td>
                  		<td>Robotics Due 3</td>
                  		<td>$50.00</td>
                  		<td>
                  			<span class="badge badge-success">
                  				Delivered
                  			</span>
                  		</td>
                  	</tr>
                  	@endfor
                  </tbody>
                </table>
              </div>
            </div>

          </div>

@endsection