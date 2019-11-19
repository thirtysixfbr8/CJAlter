<!doctype html>
<html class="no-js " lang="en">
    <head>
        <meta charset="utf-8">

        <title>CJA Seguros</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script> window.Laravel = { CsrfToken: '{{ csrf_token() }}' } </script>
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/bootstrap/bootstrap.min.css') }}">    
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/animsition.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/footable/css/footable.core.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/morris/morris.css') }}">    
        <!-- project main css files -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <style>
            #header .branding a.brand {
                background: url("{{ asset('assets/images/falcon-logo-color.png')}}") no-repeat 0 20px;
            }
            .btn-table-option{
                padding: 0 1rem;
                margin: 0 0;
            }
        </style>
    </head>
    <body id="falcon" class="main_Wrapper">    
        <div id="app">
            <router-view :user="{{ json_encode($user) }}" logout="{{ route('logout') }}" img_perfil="{{ asset('assets/images/profile-photo.jpg') }}"></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script> 
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>
        <!--/ vendor javascripts -->
        <script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/d3cripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/raphael.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/morris.bundle.js') }}"></script>
        {{--<script src="{{ asset('assets/bundles/loadercripts.bundle.js') }}"></script>--}}

        <!-- page Js -->
        <script >
            window.csrf_token = "{{ csrf_token() }}"
            $(window).load(function () {
                $('.footable').footable();
            });
        </script>
        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/page/index.js') }}"></script>
    </body>
</html>