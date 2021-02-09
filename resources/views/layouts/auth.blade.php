<!DOCTYPE html>

<html lang="en" class="light-style">

<head>
  <title>Boot Cart</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">


  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/appwork.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-corporate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/colors.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/uikit.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

  <!-- Libs -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/authentication.css') }}">
  @yield('css')
</head>

<body>
  <div class="page-loader">
    <div class="bg-primary"></div>
  </div>

  <!-- Content -->

  @yield('content')

  <!-- / Content -->

  <!-- Core scripts -->
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

  <!-- Libs -->
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <!-- Demo -->
  <script src="{{ asset('assets/js/demo.js') }}"></script>
  @yield('js')

</body>

</html>

