@extends('layouts.admin')
@section('head')
 //<link href="../assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
@endsection
@section('content')
  <div class="row el-element-overlay">
    <div class="col-md-12">
      <h4 style="color:black;">LISTADO DE ATLETAS</h4>
      <!-- <button class="btn btn-primary">Nuevo Atleta</button> -->
    </div>
    
    @foreach ($atleta as $at)
      <div class="col-lg-3 col-md-6">
          <div class="cardnigga">
              <div class="el-card-item">
                  <div class="el-card-avatar el-overlay-1"> <img  src="{{asset('imagenes/perfiles/'.$at->Foto)}}" alt="{{ $at->pnombre}}" />
                      <div class="el-overlay scrl-dwn">
                          <ul class="el-info">
                              <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{asset('imagenes/perfiles/'.$at->Foto)}}"><i class="icon-magnifier"></i></a></li>
                              <li><a class="btn default btn-outline" href="javascript:void(0);"><i class="icon-link"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="el-card-content">
                      <h3 class="box-title">{{$at->pnombre." ".$at->papellido}}</h3>
                       <label>Edad: {{$at->edad}}</label>
                      <br/>
                      <label>Correo: <small>{{$at->correoe}}</small></label>
                      <br/>
                      <label>Deportes: {{$at->deporte}}</label>
                      <br>
                      <label>Categoria: {{$at->categoria}}</label>

                     <div class="col-md-12">
                     {{-- @foreach ($cm as $d)
                     <label>{{$d->idatleta}}</label>
                       @if ($d->idatleta == $at->id_atleta)
                       {{$var=$d->idatleta}}
                        <a href="#"><button class="btn waves-effect waves-light btn-rounded btn-xs btn-primary">cuestionario med</button></a>
                        
                      @else
                        <a href="#"><button class="btn waves-effect waves-light btn-rounded btn-xs btn-danger">cuestionario med</button></a>
                      @endif
                     @endforeach --}}
                      <a href="{{ action('CuestionarioMedicoController@create',["id"=>$at->id_atleta,"nombre"=>$at->nombrecompleto]) }}"><button class="btn waves-effect waves-light btn-rounded btn-xs btn-success">cuestionario med</button></a>
                      <a href="{{ action('ExamenFisicoController@create',["id"=>$at->id_atleta,"nombre"=>$at->nombrecompleto]) }}"><button class="btn waves-effect waves-light btn-rounded btn-xs btn-success">examen fisico</button></a>
                      
                         {{--  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <button type="button" class="btn bg-pink waves-effect">LEFT</button>
                            <button type="button" class="btn bg-pink waves-effect">MIDDLE</button>
                            <button type="button" class="btn bg-pink waves-effect">RIGHT</button>
                        </div>  --}}
                    </div>
                      
                   </div>
              </div>
          </div>
      </div>
    @endforeach
   </div>

@endsection
@section('scripts')
  <script src="../assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
  <script src="../assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
@endsection
{{-- menu viejo --}}
{{-- @section('menu')
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
@endsection --}}

{{-- index viejo --}}
{{-- <div class="row clearfix">
    <!-- Task Info -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <h2> LISTADO DE ATLETAS</h2>
            </div>
            <div class="body">
                 <div class="table-responsive">
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

                            </td>
                            <td>
                                    <a href="{{URL::action('AtletaController@show',$at->id)}}"><button class="btn btn-primary">Detalles</button></a>
                                    <a href="{{URL::action('AtletaController@edit',$at->id)}}"><button class="btn btn-info">Editar</button></a>
                                    <a href="" data-target="#modal-delete-{{$at->id}}" data-toggle="modal" ><button class="btn btn-danger">Eliminar</button></a>
                               </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$atletas->render() }}
            </div>
        </div>
    </div>


    <!-- #END# Task Info -->
</div> --}}
