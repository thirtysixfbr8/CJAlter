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
            <div id="wrap" class="animsition">
                <!-- HEADER Content -->
                {{--<div id="header">
                    <header class="clearfix">
                        <!-- Branding -->
                        <div class="branding">
                            <a class="brand" href="index.html">
                                <span>CJA Seguros</span>
                            </a>
                            <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <!-- Branding end -->
    
                        <!-- Left-side navigation -->
                        <ul class="nav-left pull-left list-unstyled list-inline">
                            <li class="leftmenu-collapse">
                                <a role="button" tabindex="0" class="collapse-leftmenu">
                                    <i class="fa fa-outdent"></i>
                                </a>
                            </li>
                            <li class="dropdown leftmenu-collapse">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-plus mr-5"></i>Adicionar
                                </a>
                                <div class="dropdown-menu pull-left panel panel-default" role="menu">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a role="button" class="media">
                                                <span class="pull-left media-object">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">Mediador</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a role="button" class="media">
                                                <span class="pull-left media-object">
                                                    <i class="glyphicon glyphicon-lock"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">Seduro</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a role="button" class="media">
                                                <span class="pull-left media-object">
                                                    <i class="fa fa-building"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">Seguradora</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- Left-side navigation end -->
                        <div class="search" id="main-search">
                            <input type="text" class="form-control underline-input" placeholder="Pesquisar...">
                        </div>
                        <!-- Search end -->
    
                        <!-- Right-side navigation -->
                        <ul class="nav-right pull-right list-inline">
                            <li class="dropdown notifications">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <div class="notify">
                                        <span class="heartbit"></span>
                                        <span class="point"></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu pull-right panel panel-default">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a role="button" tabindex="0" class="media">
                                                <span class="pull-left media-object media-icon">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">User Lucas cancelled account</span>
                                                    <small class="text-muted">12 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a role="button" tabindex="0" class="media">
                                                <span class="pull-left media-object media-icon">
                                                    <i class="fa fa-spotify"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">2 voice mails</span>
                                                    <small class="text-muted">Neque porro quisquam est</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a role="button" tabindex="0" class="media">
                                                <span class="pull-left media-object media-icon">
                                                    <i class="fa fa-whatsapp"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">8 voice messanger</span>
                                                    <small class="text-muted">8 texts</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="panel-footer">
                                        <a role="button" tabindex="0">Show all notifications
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown nav-profile">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/profile-photo.jpg') }}" alt="" class="0 size-30x30"> </a>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <div class="user-info">
                                            <div class="user-name"> {{ auth()->user()->name }} </div>
                                            <div class="user-position online"></div>
                                        </div>
                                    </li>

                                    <li>
                                        <!-- :to="{ name: 'profile }" role=button-->
                                            <span class="label label-success pull-right"></span>
                                            <i class="fa fa-user"></i>Perfil</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}" role="button" tabindex="0" 
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i>Sair</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Right-side navigation end -->
                    </header>
                </div>--}}
                
                <nav-bar logout="{{ route('logout') }}" :user="{{ json_encode($user) }}" img_perfil="{{ asset('assets/images/profile-photo.jpg') }}"></nav-bar>

                <side-bar :user="{{$user}}"></side-bar>    
                
                <router-view :user="{{ json_encode($user) }}"></router-view>
            </div>
            <form-component :user_edit="{{ json_encode($user) }}" :is_edit="true"></form-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script> 
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/footable/footable.all.min.js') }}"></script>

        <!--/ vendor javascripts -->
        <script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/d3cripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/raphael.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/morris.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/loadercripts.bundle.js') }}"></script>

        <!-- page Js -->
        <script >
            $(window).load(function () {
                $('.footable').footable();
            });
        </script>
        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/page/index.js') }}"></script>
    </body>
</html>