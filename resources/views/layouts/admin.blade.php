<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistema Medico</title>
    <!-- Favicon-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/Recursos/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/Recursos/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/Recursos/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/Recursos/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/Recursos/css/style.css" rel="stylesheet">
    <link href="/Recursos/css/styles.css" rel="stylesheet">
    @yield('head')
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/Recursos/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue-grey">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por Favor Espere...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"> Sistema Medico</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">                    
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->            
            <div class="user-info">                
                <div class="image">                    
                    <img src="/Recursos/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Seguidores</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Ventas</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Cerrar sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
            </form>
            <!-- User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu</li>
                    <li class="{{active('home')}}">
                        <a href="/home">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    @can('Listar_atleta')
                        <li class="{{active('atleta')}}" >
                            <a href="/atleta">
                                 <i class="material-icons">account_box</i>
                                 <span>Listado de Atletas</span>
                            </a>
                        </li>
                    @endcan
                    @can('Crear atleta')
                         <li class="{{active('atleta/create')}}" >
                            <a href="/atleta/create">
                                 <i class="material-icons">create</i>
                                 <span>Registro de atletas</span>
                            </a>
                        </li>
                    @endcan
                    @can('Listar roles')
                         <li class="{{request()->is(request()->path()) ? 'active' : ""}}" >
                            <a href="#" class="menu-toggle">
                                 <i class="material-icons">account_circle</i>
                                 <span>Roles</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{active('roles')}}"><a href="/roles">Lista de roles</a></li>
                                <li class="{{active('roles/create')}}"><a href="/roles/create">Crear Rol</a></li>
                            </ul>
                        </li>
                    @endcan
                    {{--  <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Algun menu</span>
                        </a>
                    </li>           --}}
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="http://con.org.ni" target="_blank">Comite Olimpico Nicaraguense</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
                <h2 style="text-transform: uppercase;">{{Request::path()}}</h2>
            </div>
            @yield('content')
            {{--  <div class="row el-element-overlay">
                    <div class="col-md-12">                    
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cardnigga">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="Recursos/images/users/5.jpg" alt="user" />
                                    <div class="el-overlay scrl-dwn">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="Recursos/images/users/5.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Genelia Deshmukh</h3> <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cardnigga">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="Recursos/images/users/6.jpg" alt="user" />
                                    <div class="el-overlay scrl-dwn">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="Recursos/images/users/6.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Genelia Deshmukh</h3> <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cardnigga">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="Recursos/images/users/7.jpg" alt="user" />
                                    <div class="el-overlay scrl-dwn">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="Recursos/images/users/7.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Genelia Deshmukh</h3> <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="cardnigga">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="Recursos/images/users/8.jpg" alt="user" />
                                    <div class="el-overlay scrl-dwn">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="Recursos/images/users/8.jpg"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">Genelia Deshmukh</h3> <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
            </div>                      --}}
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="/Recursos/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/Recursos/plugins/bootstrap/js/bootstrap.js"></script>

    {{--  <!-- Select Plugin Js -->
    <script src="/Recursos/plugins/bootstrap-select/js/bootstrap-select.js"></script>  --}}

    <!-- Slimscroll Plugin Js -->
    <script src="/Recursos/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/Recursos/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="/Recursos/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="/Recursos/plugins/raphael/raphael.min.js"></script>
    <script src="/Recursos/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="/Recursos/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="/Recursos/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/Recursos/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/Recursos/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/Recursos/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/Recursos/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="/Recursos/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="/Recursos/js/admin.js"></script>
    {{--  <script src="/Recur   sos/js/pages/basic-form-elements.js"></script>  --}}
    @yield('scripts')

    <!-- Demo Js -->
    <script src="/Recursos/js/demo.js"></script>
</body>

</html>