<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->
        <title>BUP</title>
        
        <!-- Scripts -->
        <!-- start: JavaScript-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="{{asset('dashboard/js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery-migrate-1.0.0.min.js')}}"></script>
        
        <script src="{{asset('dashboard/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
        
        <script src="{{asset('dashboard/js/jquery.ui.touch-punch.js')}}"></script>
        
        <script src="{{asset('dashboard/js/modernizr.js')}}"></script>
        
        <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
        
        <script src="{{asset('dashboard/js/jquery.cookie.js')}}"></script>
        
        <script src='{{asset('dashboard/js/fullcalendar.min.js')}}'></script>
        
        <script src='{{asset('dashboard/js/jquery.dataTables.min.js')}}'></script>
        <script src="{{asset('dashboard/js/excanvas.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.flot.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.chosen.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.cleditor.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.noty.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.elfinder.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.raty.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.iphone.toggle.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.uploadify-3.1.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.gritter.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.imagesloaded.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.masonry.min.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.knob.modified.js')}}"></script>
        <script src="{{asset('dashboard/js/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('dashboard/js/counter.js')}}"></script>
        <script src="{{asset('dashboard/js/retina.js')}}"></script>
        <script src="{{asset('dashboard/js/custom.js')}}"></script>
        <!-- end: JavaScript-->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link id="base-style" href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
        <link id="base-style-responsive" href="{{asset('dashboard/css/style-responsive.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->
    </head>
    <body>
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><span>BUP Hall Food Management System</span></a>
                    
                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        </span>
                        <ul class="nav pull-right">
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white warning-sign"></i>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="dropdown-menu-title">
                                        <span>Feature will be updated soon</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon blue"><i class="icon-user"></i></span>
                                            <span class="message">New user registration</span>
                                            <span class="time">1 min</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-sub-footer">
                                        <a>View all notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- start: Notifications Dropdown -->
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white tasks"></i>
                                </a>
                                <ul class="dropdown-menu tasks">
                                    <li class="dropdown-menu-title">
                                        <span>Feature will be updated soon</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="header">
                                                <span class="title">iOS Development</span>
                                                <span class="percent"></span>
                                            </span>
                                            <div class="taskProgress progressSlim red">80</div>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class="dropdown-menu-sub-footer">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: Notifications Dropdown -->
                            <!-- start: Message Dropdown -->
                            <li class="dropdown hidden-phone">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white envelope"></i>
                                </a>
                                <ul class="dropdown-menu messages">
                                    <li class="dropdown-menu-title">
                                        <span>You have 3 messages</span>
                                        <a href="#refresh"><i class="icon-repeat"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="{{asset('dashboard/img/avatar.jpg')}}" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Mussadik Habib
                                                </span>
                                                <span class="time">
                                                    6 min
                                                </span>
                                            </span>
                                            <span class="message">
                                                Food Shortage in Lunch
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="{{asset('dashboard/img/avatar2.jpg')}}" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Ragib Aseb
                                                </span>
                                                <span class="time">
                                                    56 min
                                                </span>
                                            </span>
                                            <span class="message">
                                                Taste needs to be improved
                                            </span>
                                        </a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="{{asset('dashboard/img/avatar5.jpg')}}" alt="Avatar"></span>
                                            <span class="header">
                                                <span class="from">
                                                    Munna Khandakar
                                                </span>
                                                <span class="time">
                                                    Jul 25, 2012
                                                </span>
                                            </span>
                                            <span class="message">
                                                Poor quality of food
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-menu-sub-footer">View all messages</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: Message Dropdown -->
                            <li>
                                <a class="btn" href="#">
                                    <i class="halflings-icon white wrench"></i>
                                </a>
                            </li>
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="{{route('home')}}"><i class="halflings-icon home"></i> Home</a></li>
                                    <li><a href="{{ route('register') }}"><i class="halflings-icon edit"></i> Register</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="halflings-icon off"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->
                    
                </div>
            </div>
        </div>
        <!-- start: Header -->
        <div class="container-fluid-full">
            <div class="row-fluid">
                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="{{route('admin.home')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-list-alt"></i><span class="hidden-tablet"> Food Menu</span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{route('add_menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Menu</span></a></li>
                                    <li><a class="submenu" href="{{route('show_menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Show Menu</span></a></li>
                                </ul>
                            </li>
                            
                            <li><a href="{{route('add_food_items')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Item</span></a></li>

                            <li><a href="{{route('show_orders')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Order</span></a></li>

                            <li><a href="{{route('add_cost')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Cost</span></a></li>

                            <li><a href="{{route('show_bill')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Bill</span></a></li>

                            <li><a href="{{route('show_users')}}"><i class="icon-user"></i><span class="hidden-tablet">Users</span></a></li>

                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->
                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>
                <!-- start: Content -->
                @yield('content')
                <!-- end: Content -->
                <div class="clearfix"></div>
                <footer>
                </footer>
                @endguest
            </body>
        </html>