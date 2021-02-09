@extends('layouts.admin')
@section('content')

<h4 class="font-weight-bold py-2 mb-1">
  Dashboard
</h4>

            <!-- Counters -->
            <div class="row">
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-cart display-4 text-success"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Monthly sales</div>
                        <div class="text-large">2362</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-earth display-4 text-info"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Monthly visits</div>
                        <div class="text-large">687,123</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-gift display-4 text-danger"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Products</div>
                        <div class="text-large">985</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="lnr lnr-users display-4 text-warning"></div>
                      <div class="ml-3">
                        <div class="text-muted small">Users</div>
                        <div class="text-large">105,652</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

@endsection