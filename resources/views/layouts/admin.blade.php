<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/ionicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/open-iconic.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/pe-icon-7-stroke.css') }}">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/appwork.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-corporate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/colors.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/uikit.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

  <style type="text/css">
    .pagination {
     justify-content: center;
    }
  </style>
  @yield('css')

  <script src="{{ asset('assets/vendor/js/material-ripple.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/layout-helpers.js') }}"></script>

  

  <!-- Core scripts -->
  <script src="{{ asset('assets/vendor/js/pace.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Libs -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-2">
    <div class="layout-inner">

      <!-- Layout sidenav -->
      <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <div class="app-brand demo">
          <span class="app-brand-logo demo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(255, 255, 255, 1);transform:;-ms-filter:"><path d="M5,22h14c1.104,0,2-0.896,2-2V9c0-0.553-0.447-1-1-1h-3V7.223c0-2.609-1.903-4.945-4.5-5.198C9.52,1.733,7,4.078,7,7v1H4 C3.447,8,3,8.447,3,9v11C3,21.104,3.896,22,5,22z M17,10v2h-2v-2H17z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M7,10h2v2H7V10z"></path></svg>
          </span>
          <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Boot Cart</a>
          <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
          </a>
        </div>

        <div class="sidenav-divider mt-0"></div>

        <!-- Links -->
        <ul class="sidenav-inner py-1">

          <!-- Dashboards -->

          <li class="sidenav-item {{ Route::is('admin.dashboard') ? 'open active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="sidenav-link">
              <i class="sidenav-icon ion ion-md-speedometer"></i>
              <div>Dashboards</div>
            </a>
          </li>

          <li class="sidenav-item {{ Route::is('admin.orders') ? 'open active' : '' }}">
            <a href="{{ route('admin.orders') }}" class="sidenav-link">
              <i class="sidenav-icon ion ion-ios-filing d-block"></i>
              <div>Orders</div>
              <div class="pl-1 ml-auto">
                <div class="badge badge-primary">50</div>
              </div>
            </a>
          </li>

          <li class="sidenav-divider mb-1"></li>
          <li class="sidenav-header small font-weight-semibold">Main</li>


          <li class="sidenav-item {{ Route::is('categories.index') ? 'open active' : '' }}">
            <a href="javascript:void(0)" class="sidenav-link sidenav-toggle">
              <i class="sidenav-icon ion ion-md-git-network d-block"></i>
              <div>Inventory</div>
            </a>

            <ul class="sidenav-menu {{ Route::is('categories.index') ? 'active' : '' }}">
              <li class="sidenav-item">
                <a href="{{ route('categories.index') }}" class="sidenav-link">
                  <div>Categories</div>
                </a>
              </li>

              <li class="sidenav-item {{ Route::is('products.index') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}" class="sidenav-link">
                  <div>Products</div>
                </a>
              </li>

            </ul>
          </li>


          <li class="sidenav-item {{ Route::is('users.index') ? 'open active' : '' }}">
            <a href="{{ route('users.index') }}" class="sidenav-link">
              <i class="sidenav-icon fas fa-users d-block"></i>
              <div>Users</div>
            </a>
          </li>


          <li class="sidenav-item">
            <a href="" class="sidenav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="sidenav-icon fas fa-sign-out-alt d-block"></i>
              <div>Logout</div>
            </a>

            <form method="POST" action="{{ route('logout') }}" id="logout-form">
              @csrf
            </form>
          </li>
           
        </ul>
      </div>
      <!-- / Layout sidenav -->

      <!-- Layout container -->
      <div class="layout-container">
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

          <!-- Brand demo (see assets/css/demo/demo.css) -->
          <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
            <span class="app-brand-logo demo">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M5,22h14c1.104,0,2-0.896,2-2V9c0-0.553-0.447-1-1-1h-3V7.223c0-2.609-1.903-4.945-4.5-5.198C9.52,1.733,7,4.078,7,7v1H4 C3.447,8,3,8.447,3,9v11C3,21.104,3.896,22,5,22z M17,10v2h-2v-2H17z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M7,10h2v2H7V10z"></path></svg>
            </span>
            <span class="app-brand-text demo font-weight-normal ml-2">Boot Cart</span>
          </a>

          <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
          <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
            <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:void(0)">
              <i class="ion ion-md-menu text-large align-middle"></i>
            </a>
          </div>

        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

          <!-- Content -->
          <div class="container-fluid flex-grow-1 container-p-y">
            @include('flash::message')
            @yield('content')
          </div>
          <!-- / end container -->

          <!-- Layout footer -->
          <nav class="layout-footer footer bg-footer-theme">
            <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
              <div class="pt-3">
                <span class="footer-text font-weight-bolder">Boot Cart</span> ©
              </div>
              
            </div>
          </nav>
          <!-- / Layout footer -->

        </div>
        <!-- Layout content -->

      </div>
      <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core scripts -->
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/sidenav.js') }}"></script>

  <!-- Libs -->
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/chartjs/chartjs.js') }}"></script>

  <!-- Demo -->
  <script src="{{ asset('assets/js/demo.js') }}"></script>
  <script src="{{ asset('assets/js/dashboards_dashboard-1.js') }}"></script>

  <script>
    $('#flash-overlay-modal').modal();
</script>
@yield('js')
</body>

</html>