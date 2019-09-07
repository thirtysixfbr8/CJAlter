<!doctype html>
<html class="no-js" lang="">
  <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>CJA</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name="csrf-token" content="{{csrf_token()}}"/>
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/bootstrap/bootstrap.min.css') }}">
        <!--  Fonts and icons -->
        <!-- CSS Files -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  </head>
  <body id="falcon" class="authentication">
    <!-- Application Content -->
    @yield('content')
    <!--/ Application Content -->
    <!--  Vendor JavaScripts -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <!-- Custom Js -->
    <!--VueJS-->
    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
