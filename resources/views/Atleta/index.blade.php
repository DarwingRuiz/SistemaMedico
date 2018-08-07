@extends('layouts.admin')
@section('scripts')
    <!-- Bootstrap Core Css -->
    <link href="/todo/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/todo/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/todo/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/todo/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/todo/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/todo/css/themes/all-themes.css" rel="stylesheet" />
@endsection
@section('scriptbody')
    <!-- Jquery Core Js -->
    <script src="/todo/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/todo/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/todo/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/todo/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/todo/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="/todo/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="/todo/plugins/raphael/raphael.min.js"></script>
    <script src="/todo/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="/todo/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="/todo/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/todo/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/todo/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/todo/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/todo/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="/todo/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="/todo/js/admin.js"></script>
    <script src="/todo/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="/todo/js/demo.js"></script>
@endsection
@section('menu')
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="index.html">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="pages/typography.html">
                    <i class="material-icons">text_fields</i>
                    <span>Typography</span>
                </a>
            </li>
            <li>
                <a href="pages/helper-classes.html">
                    <i class="material-icons">layers</i>
                    <span>Helper Classes</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Widgets</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Cards</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/widgets/cards/basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="pages/widgets/cards/colored.html">Colored</a>
                            </li>
                            <li>
                                <a href="pages/widgets/cards/no-header.html">No Header</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Infobox</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                            </li>
                            <li>
                                <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                            </li>
                            <li>
                                <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                            </li>
                            <li>
                                <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                            </li>
                            <li>
                                <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
@endsection
@section('contenido')
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2> LISTADO DE ATLETAS</h2>
                </div>
                <div class="body">
                    {{-- <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th>FOTO</th>
                                <th>NOMBRE COMPLETO</th>
                                <th>EDAD</th>
                                <th>CORREO</th>
                                <th>DEPORTE</th>
                                <th>OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($atletas as $at)
                            <tr>
                                    <td><img src="{{asset('imagenes/perfiles/'.$at->Foto)}}" alt="{{ $at->pnombre}}" height="100px" width="100px" class="img-thumbnail"></td>
                                    <td>{{$at->nombrecompleto}}</td>
                                    <td>{{$at->edad}}</td>
                                    <td>{{$at->correoe }}</td>
                                <td>
                                @foreach($at->deporte as $d)
                                   {{$d->nombre}},
                                @endforeach
                                </td>
                                <td>
                                        <a href="{{URL::action('AtletaController@show',$at->id)}}"><button class="btn btn-primary">Detalles</button></a>
                                        <a href="{{URL::action('AtletaController@edit',$at->id)}}"><button class="btn btn-info">Editar</button></a>
                                        <a href="" {{--data-target="#modal-delete-{{$art->idarticulo}}"--}} {{--data-toggle="modal"--}}{{-- ><button class="btn btn-danger">Eliminar</button></a> --}}
                                   {{-- </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                    {{-- {{$atletas->render("paginacion") }} --}}
                </div>
            </div>
        </div>


        <!-- #END# Task Info -->
    </div>
@endsection
