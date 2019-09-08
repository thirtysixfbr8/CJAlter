<!doctype html>
<html class="no-js " lang="en">
    <head>
        <meta charset="utf-8">

        <title>{{$appContents['app']['title']}}</title>
        <link rel="icon" type="image/ico" href="{{ asset($appContents['app']['icon']) }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/bootstrap/bootstrap.min.css') }}">    
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/animsition.min.css') }}">
        <link rel="stylesheet" href="assets/js/vendor/footable/css/footable.core.min.css">
        <link rel="stylesheet" href="{{ asset('assets/js/vendor/morris/morris.css') }}">    
        <!-- project main css files -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <style>
            #header .branding a.brand {
                background: url("{{ asset($appContents['app']['logo'])}}") no-repeat 0 20px;
            }
            .btn-table-option{
                padding: 0 1rem;
                margin: 0 0;
            }
        </style>
    </head>
    <body id="falcon" class="main_Wrapper">   
        
        <div id="wrap" class="animsition">
            <!-- HEADER Content -->
            <div id="header">
                <header class="clearfix">
                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="index.html">
                            <span>{{$appContents['app']['title']}}</span>
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
                            <i class="fa fa-plus mr-5"></i>{{$appContents['add']}}
                            </a>
                            <div class="dropdown-menu pull-left panel panel-default" role="menu">
                                <ul class="list-group">

                                    @foreach ($appContents['newOptions'] as $item)
                                        <li class="list-group-item">
                                            <a role="button" class="media">
                                                <span class="pull-left media-object">
                                                    <i class="{{ $item['icon'] }}"></i>
                                                </span>
                                                <div class="media-body">
                                                    <span class="block">{{ $item['option'] }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Left-side navigation end -->
                    <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" placeholder="{{$appContents['search']}}">
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
                                        <div class="user-name">Alexander</div>
                                        <div class="user-position online"></div>
                                    </div>
                                </li>
                                @foreach ($appContents['userOptions'] as $item)
                                    @if($appContents['userOptions'][0]==$item)
                                        <li>
                                            <a href="profile.html" role="button" tabindex="0">
                                                <span class="label label-success pull-right"></span>
                                                <i class="fa fa-user"></i>{{$item['option']}}</a>
                                        </li>
                                        <li class="divider"></li>
                                    @else
                                        <li>
                                            <a href="login.html" role="button" tabindex="0">
                                                <i class="fa fa-sign-out"></i>{{$item['option']}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <!-- Right-side navigation end -->
                </header>
            </div>
            <!--/ HEADER Content  -->
            @section('sidebar')
            <div id="controls">
                <aside id="leftmenu">
                    <div id="leftmenu-wrap">
                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <!--  NAVIGATION Content -->
                                        <ul id="navigation">
                                            @foreach ($appContents['admin_rightSide'] as $item)

                                                @if(!empty($item['submenu']))
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="{{ $item['icon'] }}"></i>
                                                            <span>{{ $item['title'] }}</span>
                                                        </a>
                                                        <ul>
                                                            @foreach ($item['submenu'] as $subItem)
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="{{$subItem['icon']}}"></i> {{$subItem['title']}}
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @else
                                                    @if($appContents['admin_rightSide'][0]==$item)
                                                        <li class="active open">
                                                            <a href="index.html">
                                                                <i class="{{ $item['icon'] }}"></i>
                                                                <span>{{ $item['title'] }}</span>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a role="button" tabindex="0">
                                                                <i class="{{ $item['icon'] }}"></i>
                                                                <span>{{ $item['title'] }}</span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                    </div>
                                </div>
                            </div>
                            <div class="panel settings panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#leftmenuControls">{{$appContents['generalSettings'][0]}}
                                            <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class="milestone-sidbar">
                                    <div class="text-center-folded">
                                        <span class="pull-right pull-none-folded">60%</span>
                                        <span class="hidden-folded">{{$appContents['generalSettings'][1]}}</span>
                                    </div>
                                    <div class="progress progress-xxs m-t-sm dk">
                                        <div class="progress-bar progress-bar-info" style="width: 60%;"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            @show
            <!-- Application Content -->
            @yield('content')
            <!--/ Application Content -->
        </div>
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
        <script src="assets/js/vendor/footable/footable.all.min.js"></script>

        <!--/ vendor javascripts -->
        <script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/d3cripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/raphael.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/morris.bundle.js') }}"></script>
        <script src="{{ asset('assets/bundles/loadercripts.bundle.js') }}"></script>

        <!-- page Js -->
        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
        <script >
            $(window).load(function () {
                $('.footable').footable();
            });
        </script>

        <script src="{{ asset('assets/js/page/index.js') }}"></script>     
        
    </body>
</html>