@extends('layouts.admin')
@section('content')
    <div class="row clearfix">
        {{-- informacion Basica --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header bg-light-green">
                        <h2 align="center">Información Basica</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                        <div align="center"  class="col-md-12"><img src="{{asset('imagenes/perfiles/'.$atleta->Foto)}}" alt="">
                        </div>
                            <div  class="col-md-12">
                                {{-- <h4 class="card-inside-tittle" style="color:#333;">Informacion Basica</h4> --}}
                                <div class="col-md-6">
                                    <label for="" class="m-r-10">Nombre Completo:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->nombrecompleto}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Edad:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->edad}} años</label>
                                    <br>
                                    <label for="" class="m-r-10">Dirección:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->direccion}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Genero:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->genero}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Numero de cédula:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->numcedula}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Correo Electronico:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->correoe}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Teléfono Convencional:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->tconvencional}}</label>
                                    <br>
                                    <label for="" class="m-r-10">Teléfono Celular:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->tcelular}}</label>
                                    <br>  
                                </div>
                                <div class="col-md-6">
                                     @if ($atleta->tseguro=="No")
                                        <label for="" class="m-r-10">Tiene Seguro:</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->tseguro}}</label>   
                                    @else 
                                        <label for="" class="m-r-10">Tiene Seguro:</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->tseguro}}</label><br>
                                        @foreach ($hospital as $Hos)
                                            @if ($Hos->id==$atleta->hospital)
                                                <label for="" class="m-r-10">Hospital Afiliado:</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$Hos->Nombre}}</label>
                                            @endif
                                        @endforeach
                                    @endif
                                    @foreach ($departamento as $dep)
                                        @foreach ($municipio as $muni)
                                        @if ($atleta->municipio==$muni->ID)
                                            @if ($muni->Departamento_id==$dep->ID)
                                                <br>
                                                    <label for="" class="m-r-10">Departamento:</label><br>
                                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$dep->Nombre}}</label><br>
                                                    <label for="" class="m-r-10">Municipio:</label><br>
                                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$muni->Nombre}}</label><br>
                                            @endif
                                        @endif 
                                        @endforeach
                                    @endforeach
                                    <label for="" class="m-r-10">Nombre Madre:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->nombremadre}}</label><br>
                                    <label for="" class="m-r-10">Teléfono Celular de la madre:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->telmadre}}</label><br>
                                    <label for="" class="m-r-10">Nombre Padre:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->nombrepadre}}</label><br>
                                    <label for="" class="m-r-10">Teléfono Celular del padre:</label><br>
                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$atleta->telpadre}}</label><br>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        {{-- Cuestionario Medico --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 align="center">CUESTIONARIO MEDICO</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <h4 class="card-inside-tittle" style="color:#333;">Informacion Basica</h4> --}}
                                <div class="col-md-6">
                                    
                                </div>
                                <div class="col-md-6">
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>   
    </div>   
@endsection