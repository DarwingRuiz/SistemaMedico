@extends('layouts.admin')
@section('head')
 <!-- Bootstrap Material Datetime Picker Css -->
    {{-- <link href="../Recursos//plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" /> --}}
   
     <style> 
input {
    /*width: 400px;
    border: none;*/
    height: 31px;
    width: 100%;
    padding: 10px;
    margin: 0px;
    border: 1px solid #CCC;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    margin: 0px;
}

th {
    text-align: center;
    background-color: #dddddd;
}
</style> 
@endsection
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
                        <div align="center"   class="col-md-12"><img src="{{asset('imagenes/perfiles/'.$atleta->Foto)}}" alt="">
                        </div>
                            <div  class="col-md-12">
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
                        <h2 align="center">ALERGIAS</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h2 class="card-inside-title">ALERGIAS</h2>
                                    <div class="col-md-6">
                                        @forelse ($medicamento as $med)
                                            <label for="">{{$med->medicamento}}</label><br>
                                            <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$med->descripcion}}</label>
                                            <br>
                                            @empty
                                            <p>No tiene Cuestionario Médico</p>
                                        @endforelse
                                    </div>
                                    <div class="col-md-6">
                                        @forelse ($alergia as $al)
                                            @if(!$medicamento->isEmpty())
                                                {{-- // $data is not empty --}}
                                                <label for="">{{$al->alergia}}</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$al->descripcion}}</label>
                                                <br>
                                            @else
                                                <p>No tiene Cuestionario Médico</p>
                                            @endif
                                        @empty
                                            <p>No tiene Cuestionario Médico</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 align="center">Historial Medico</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                          @forelse ($HM as $hm)
                                            <label for="">{{$hm->pregunta}}</label><br>
                                            <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hm->respuesta}}</label><br>
                                            @if ($hm->detalles!=" ")
                                                 <label for="">Detalles:</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hm->detalles}}</label>
                                            <br>
                                            @endif
                                           
                                            @empty
                                            <p>No tiene Registro Médico</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 align="center">Historial Familiar</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">                                    
                                    <div class="col-md-12">
                                        @forelse ($HF as $hf)
                                        <label for="">{{$hf->preguntas}}</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hf->respuesta}}</label><br>
                                        @empty
                                        <p>No tiene Cuestionario Médico</p>
                                        @endforelse
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 align="center">Aparato Locomotor</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        @forelse ($AL as $al)
                                        <label for="">{{$al->preguntas}}</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$al->respuesta}}</label><br>
                                        @if ($al->detalles!=" ")
                                        <label for="">Detalles:</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$al->detalles}}</label>
                                        <br>
                                        @endif
                                        @empty
                                        <p>No tiene Registro Médico</p>
                                        @endforelse
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-grey">
                        <h2 align="center">Carrera Deportiva</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        @forelse ($CD as $cd)
                                        <label for="">{{$cd->preguntas}}</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$cd->respuesta}}</label><br>
                                        @if ($cd->detalles!=" ")
                                        <label for="">Detalles:</label><br>
                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$cd->detalles}}</label>
                                        <br>
                                        @endif                                       
                                        @empty
                                        <p>No tiene Cuestionario Médico</p>
                                        @endforelse
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-grey">
                        <h2 align="center">Informacion Laboral/Economica</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">                                        
                                        @forelse ($ILE as $ile)
                                            <label for="">{{$ile->preguntas}}</label><br>
                                            <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ile->respuesta}}</label><br>
                                            @empty
                                            <p>No tiene Registro Médico</p>
                                        @endforelse                                        
                                        @forelse ($AE as $ae)
                                            <label for="">{{$ae->preguntas}}</label><br>
                                            <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ae->respuesta}}</label><br>
                                            @if ($ae->detalles!=" ")
                                                 <label for="">Detalles:</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ae->detalles}}</label>
                                            <br>
                                            @endif
                                           
                                            @empty
                                            <p>No tiene Registro Médico</p>
                                        @endforelse                                        
                                        @forelse ($CA as $ca)
                                            <label for="">{{$ca->preguntas}}</label><br>
                                            <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ca->respuesta}}</label><br>   
                                            @empty
                                            <p>No tiene Registro Médico</p>
                                        @endforelse
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-teal">
                        <h2 align="center">Informacion Extra</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <h5 style="color:black;">INFORMACION FAMILIAR</h5>
                                            <div class="col-md-3">
                                                @forelse ($IFA as $ifa)
                                                <label for="">{{$ifa->preguntas}}</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ifa->respuesta}}</label><br>
                                                @if ($ifa->detalles!=" ")
                                                <label for="">Detalles:</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ifa->detalles}}</label>
                                                <br>
                                                @endif
                                                @empty
                                                <p>No tiene Registro Médico</p>
                                                @endforelse
                                            </div>
                                        <h5 style="color:black;">EDUCACION Y FORMACION</h5>
                                            <div class="col-md-3">                                    
                                                @forelse ($ED as $ed)
                                                <label for="">{{$ed->pregunta}}</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ed->respuesta}}</label><br>
                                                @if ($ed->detalles!=" ")
                                                <label for="">Detalles:</label><br>
                                                <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$ed->detalles}}</label>
                                                <br>
                                                @endif
                                                @empty
                                                <p>No tiene Registro Médico</p>
                                                @endforelse
                                            </div>
                                        <h5 style="color:black;">LUGAR DE HABITACION</h5>
                                            <div class="col-md-3">
                                                @forelse ($HAB as $hab)
                                                    <label for="">{{$hab->preguntas}}</label><br>
                                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hab->respuesta}}</label><br>
                                                    @if ($hab->detalles!=" ")
                                                         <label for="">Detalles:</label><br>
                                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hab->detalles}}</label>
                                                    <br>
                                                    @endif
                                                   
                                                    @empty
                                                    <p>No tiene Registro Médico</p>
                                                @endforelse
                                            </div>
                                        <h5 style="color:black;">HABITOS</h5>
                                            <div class="col-md-3">
                                                @forelse ($HATOS as $hatos)
                                                    <label for="">{{$hatos->preguntas}}</label><br>
                                                    <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hatos->respuesta}}</label><br>
                                                    @if ($hatos->detalles!=" ")
                                                         <label for="">Detalles:</label><br>
                                                        <label for="" style="text-transform: uppercase;  font-weight: normal;">{{$hatos->detalles}}</label>
                                                    <br>
                                                    @endif
                                                   
                                                    @empty
                                                    <p>No tiene Registro Médico</p>
                                                @endforelse
                                            </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2 align="center">Examen Fisico</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        {{--  <div class="header">
                                                            <h4 style="position: relative;vertical-align:middle;text-align: center;">
                                                                Examen Fisico
                                                            </h4>
                                                        </div>  --}}
                                                        <div class="body table-responsive">
                                                            <table id="mainTable" class="table table-bordered">
                                                                <tr>
                                                                    <th>N°</th>
                                                                    <th>Estructura anatomica</th>
                                                                    <th>Normal</th>
                                                                    <th>Hallazgos Anormales</th>
                                                                    {{--  // output data of each row  --}}

                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Cuello</td>
                                                                        <td><input type="checkbox" id="1" name="Si_Cuello" class="chk-col-green">
                                                                            <label for="1">Si</label>
                                                                        </td>
                                                                        <td><input type="text" name="HA_Cuello" class="form-control" ></td>
                                                                    </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Espalda</td>
                                                                    <td><input type="checkbox" id="2" name="Si_Espalda"  class="chk-col-green">
                                                                        <label for="2">Si</label></td>
                                                                        <td><input type="text" name="HA_espalda" class="form-control"></td>
                                                                    </tr>

                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Hombro/Brazo</td>
                                                                    <td><input type="checkbox" id="3" name="Si_Hombro" class="chk-col-green">
                                                                            <label for="3">Si</label>
                                                                        </td>
                                                                        <td><input type="text" name="HA_hombro" class="form-control"></td>
                                                                    </tr>
                                                                
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Codo/Antebrazo  </td>
                                                                    <td><input type="checkbox" id="4" name="Si_Codo" class="chk-col-green">
                                                                            <label for="4">Si</label></td>
                                                                            <td><input type="text" name="HA_codo" class="form-control"></td>
                                                                    </tr>
                                                                
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Muñeca/Mano/Dedos</td>
                                                                    <td><input type="checkbox" id="5" name="Si_Muñeca" class="chk-col-green">
                                                                            <label for="5">Si</label></td>
                                                                        <td><input type="text" name="HA_muñeca" class="form-control"></td>
                                                                    </tr>
                                                                
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Cadera/Muslo</td>
                                                                    <td><input type="checkbox" id="6" name="Si_Cadera" class="chk-col-green">
                                                                                <label for="6">Si</label></td>
                                                                        <td><input type="text" name="HA_cadera" class="form-control"></td>
                                                                    </tr>
                                                                
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Rodilla</td>
                                                                    <td><input type="checkbox" id="7" name="Si_Rodilla" class="chk-col-green">
                                                                            <label for="7">Si</label></td>
                                                                        <td><input type="text" name="HA_rodilla" class="form-control"></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Pierna/Tobillo</td>
                                                                    <td><input type="checkbox" id="8" name="Si_Pierna" class="chk-col-green">
                                                                            <label for="8">Si</label></td>
                                                                        <td><input type="text" name="HA_pierna" class="form-control"></td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Pie/Dedos</td>
                                                                    <td><input type="checkbox" id="9" name="Si_dedos" class="chk-col-green">
                                                                            <label for="9">Si</label></td>
                                                                        <td><input type="text" name="HA_dedos" class="form-control"></td>
                                                                </tr>
                                                           
                                                           </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="header">
                                        <!--       Otros hallazgos                                  -->
                                          <h4 class="card-inside-title">
                                          Otros Hallazgos
                                          </h4>
                                          <textarea name="otroshallazgos" rows="6" cols="40" placeholder="Detalles..."></textarea>
                                          <!--                                    Recomendaciones                                                           -->
                                           <h4 class="card-inside-title">
                                          Recomendaciones
                                          </h4>
                                          <textarea name="Recomendaciones" rows="6" cols="40" placeholder="Detalles..."></textarea>
                                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>   
@endsection