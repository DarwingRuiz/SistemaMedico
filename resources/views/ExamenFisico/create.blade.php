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
     <!--Contenido-->
        <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 style="text-transform: uppercase;">REGISTRO DE {{$atleta[0]->nombrecompleto}} </h2>
                </div>
                <div class="body">
                    <form action="{{url('examenfisico')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div style="display:none;">
                            <input type="text"  value="{{$atleta[0]->id}}" class="form-control" name="txt_atleta" >
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">EXAMEN FISICO</a></li>
                                    <li 			  ><a href="#tab2" data-toggle="tab">CONDICIONES CLINICAS ACTUALES</a></li>
                                    <li               ><a href="#tab3" data-toggle="tab">FICHA DE ANTROPOMETRIA</a></li>
                                    <li               ><a href="#tab4" data-toggle="tab">NOTAS DE EVALUACION</a></li>
                                </ul>
                            </div>
                        </div>
                      <div class="row clearfix">
                          <div class="col-md-12">
                            <div class="tab-content">
                            <!--                    PRIMER TAB  														-->
                                <div class="tab-pane active" id="tab1">
                                      <div class="col-md-12">
                                          <fieldset>
                            <!--			 TABLA BORDEADA		 														-->
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
                                        <!--                          FINAL TABLA BORDEADA        -->
                                          </fieldset>
                                          
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
                                    {{-- <div class="col-md-12">
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                                          
                                      </div>
                                    </div> --}}
                                  </div>
                                <!--                        SEGUNDO TAB                                                     -->
                                <div class="tab-pane" id="tab2">
                                      <div class="col-md-12">
                                          <fieldset>
                                <!--                                                                 -->
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        {{-- <div class="header">
                                                            <h4 style="position: relative;vertical-align:middle;text-align: center; color:#333;">
                                                                CONDICIONES CLINICAS ACTUALES
                                                            </h4>
                                                        </div> --}}
                                                        <!--#INICIO TABLA CONDICIONES CLINICAS ACTUALES#-->
                                                        <div class="body table-responsive">
                                                
                                                         <table id='mainTable' class='table table-bordered'>
                                                            <tr>
                                                            <th >Musculo esqueletico</th>
                                                            <th >Neurologico</th>
                                                            <th >General</th>
                                                            <th >Respiratorio</th>                                       
                                                           <tr>
                                                                <td>
                                                                <input type="checkbox" name="PD" id="$11" class="chk-col-green">
                                                                <label for="$11">Practica Deportiva</label><br>
                                                                <input type="checkbox" name="EF" id="$12" class="chk-col-green">
                                                                <label for="$12">Economia Familiar</label><br>
                                                                <input type="checkbox" name="Educa" id="$13" class="chk-col-green">
                                                                <label for="$13">Educacion</label><br>
                                                                <input type="checkbox" name="Da" id="$14" class="chk-col-green">
                                                                <label for="$14">Dolor articular</label><br>
                                                                <input type="checkbox" name="Ra" id="$15" class="chk-col-green">
                                                                <label for="$15">Rigidez en articulaciones</label><br>
                                                                <input type="checkbox" name="Fracturas" id="$16" class="chk-col-green">
                                                                <label for="$16">Fracturas</label><br>
                                                                <input type="checkbox" name="DM" id="$17" class="chk-col-green">
                                                                <label for="$17">Debilidad Muscular</label><br>
                                                                <input type="checkbox" name="HA" id="$18" class="chk-col-green">
                                                                <label for="$18">Hinchazon articular</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="Paralisis" id="$21" class="chk-col-green">
                                                                <label for="$21">Paralisis</label><br>
                                                                <input type="checkbox" name="Temblores" id="$22" class="chk-col-green">
                                                                <label for="$22">Temblores</label><br>
                                                                <input type="checkbox" name="Ac" id="$23" class="chk-col-green">
                                                                <label for="$23">Alteraciones de la conciencia</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="PP" id="$31" class="chk-col-green">
                                                                <label for="$31">Perdida de peso</label><br>
                                                                <input type="checkbox" name="AP" id="$32" class="chk-col-green">
                                                                <label for="$32">Aumento de peso</label><br>
                                                                <input type="checkbox" name="Fiebre" id="$33" class="chk-col-green">
                                                                <label for="$33">Fiebre</label><br>
                                                                <input type="checkbox" name="Escalofrios" id="$34" class="chk-col-green">
                                                                <label for="$34">Escalofrios</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="Sibilancia" id="$41" class="chk-col-green">
                                                                <label for="$41">Sibilancia</label><br>
                                                                <input type="checkbox" name="Tos" id="$42" class="chk-col-green">
                                                                <label for="$42">Tos</label><br>
                                                                <input type="checkbox" name="DAR" id="$43" class="chk-col-green">
                                                                <label for="$43">Dolor al respirar</label><br>
                                                                <input type="checkbox" name="TCS" id="$44" class="chk-col-green">
                                                                <label for="$44">Toser coagulos de sangre</label>
                                                                </td>
                                                                </tr>
                                                            <tr>                                                            
                                                            <th align="center">Dermatologico</th>
                                                            <th align="center">Cabeza</th>
                                                            <th align="center">Ojos</th>
                                                            <th align="center">Oidos,Nariz,Garganta</th>                                       
                                                           <tr>
                                                                <td>
                                                                <input type="checkbox" name="EP" id="$121" class="chk-col-green">
                                                                <label for="$121">Erupciones/Purito</label><br>
                                                                <input type="checkbox" name="Ulseras" id="$122" class="chk-col-green">
                                                                <label for="$122">Ulceras/Llagas</label><br>
                                                                <input type="checkbox" name="hongos" id="$123" class="chk-col-green">
                                                                <label for="$123">Hongos en los pies</label><br>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="Dc" id="$221" class="chk-col-green">
                                                                <label for="$221">Dolores de Cabeza</label><br>
                                                                <input type="checkbox" name="Convulsiones" id="$222" class="chk-col-green">
                                                                <label for="$222">Convulsiones</label><br>
                                                                <input type="checkbox" name="PConciencia" id="$223" class="chk-col-green">
                                                                <label for="$223">Perdida de la conciencia</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="cambiosVision" id="$321" class="chk-col-green">
                                                                <label for="$321">Cambios en la vision</label><br>
                                                                <input type="checkbox" name="fotofobia" id="$322" class="chk-col-green">
                                                                <label for="$322">Fotofobia</label><br>
                                                                <input type="checkbox" name="DE" id="$323" class="chk-col-green">
                                                                <label for="$323">Dolor/enrojecimiento</label><br>
                                                                <input type="checkbox" name="lagrimeoe" id="$324" class="chk-col-green">
                                                                <label for="$324">Lagrimeo excesivo</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="PA" id="$421" class="chk-col-green">
                                                                <label for="$421">Perdida audicion</label><br>
                                                                <input type="checkbox" name="Vertigo" id="$422" class="chk-col-green">
                                                                <label for="$422">Vertigo</label><br>
                                                                <input type="checkbox" name="sangradoN" id="$423" class="chk-col-green">
                                                                <label for="$423">Sangrado de nariz</label><br>
                                                                <input type="checkbox" name="Ronquidos" id="$424" class="chk-col-green">
                                                                <label for="$424">Ronquidos</label>
                                                                </td>
                                                                </tr>
                                                                <tr>                                                            
                                                            <th align="center">Genitourinario</th>
                                                            <th align="center">Cardiovascular</th>
                                                            <th align="center">Gastrointestinal</th>
                                                            <th align="center">Otros</th>                                       
                                                           <tr>
                                                                <td>
                                                                <input type="checkbox" name="PCVe" id="$131" class="chk-col-green">
                                                                <label for="$131">Perdida control de vejiga</label><br>
                                                                <input type="checkbox" name="MiccionF" id="$132" class="chk-col-green">
                                                                <label for="$132">Miccion frecuente</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="DolorP" id="$231" class="chk-col-green">
                                                                <label for="$231">Dolor en el pecho</label><br>
                                                                <input type="checkbox" name="Palpitaciones" id="$232" class="chk-col-green">
                                                                <label for="$232">Palpitaciones</label><br>
                                                                <input type="checkbox" name="FaltaAliento" id="$233" class="chk-col-green">
                                                                <label for="$233">Falta de aliento</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="Dificultaddeglutir" id="$331" class="chk-col-green">
                                                                <label for="$331">Dificultad para deglutir</label><br>
                                                                <input type="checkbox" name="ardorEstomacal" id="$332" class="chk-col-green">
                                                                <label for="$332">Ardor estomacal</label><br>
                                                                <input type="checkbox" name="NV" id="$333" class="chk-col-green">
                                                                <label for="$333">Nauseas/Vomito</label><br>
                                                                <input type="checkbox" name="Sangradointestinal" id="$334" class="chk-col-green">
                                                                <label for="$334">Sangrado intestinal</label>
                                                                </td>
                                                                <td>
                                                                <textarea name="otrosCCA" width="200px" placeholder="Detallar"></textarea>
                                                                </td>
                                                                </tr>
                                                           </table>                                 
                                                        </div>
                                                </div>
                                            </div>
                                          <!--#FINAL TABLA CONDICIONES CLINICAS ACTUALES#-->
                                          </fieldset>
                                          <div class="header">
                                          <!--Observaciones-->
                                          <h4 class="card-inside-title">
                                          Observaciones
                                          </h4>
                                          <textarea name="observacioneCCA" rows="6" cols="40" placeholder="Detalles..."></textarea>
                                          </div>                                    
                                    </div>
                                    
                                </div>
                                <!--                TERCER  TAB                                                          -->
                                <div class="tab-pane " id="tab3">
                                      <div class="col-md-12">
                                          <fieldset>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    {{--  <div class="header">
                                                        <h4 style="position: relative;vertical-align:middle;text-align: center; color: #333;">
                                                            FICHA DE ANTROPOMETRIA
                                                        </h4>
                                                    </div>  --}}
                                                   
                                                    <div class="row clearfix">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input disable="true" class="form-control" type="text" name="nombre" value="{{$atleta[0]->nombrecompleto}}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            {{--  <input type="text" class="form-control" />  --}}
                                                                            {{--  <label class="form-label">Sexo(Varon:1-Mujer:2)</label>  --}}
                                                                            <input class="form-control" type="text" disable="true" name="genero" value="{{$atleta[0]->genero}}"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" name="numEvaluacion" class="form-control" />
                                                                            <label class="form-label">Evaluacion Nº</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            {{-- <input type="text" name="fechaEvaluacion" class="form-control" /> --}}
                                                                            <input type="text" name="fechaEx"  class="form-control" id="fecha" value="   ">
                                                                            <label class="form-label">Fecha de evaluacion</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" name="Antropometrista" class="form-control" name="Antropometrista" />
                                                                            <label class="form-label">Antropometrista/Evaluador</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" name="anotador" class="form-control" name="Anotador"/>
                                                                            <label class="form-label">Anotador </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    {{-- <label class="form-label">Fecha de nacimiento </label> --}}
                                                                  {{-- <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" name="fechaNac" class="datepicker form-control" placeholder="Por favor seleccione una fecha">
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="demo-masked-input">
                                                                         <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" name="fechaNac" class="form-control date" placeholder="Ex: 30/07/2016">
                                                                            </div>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                    
                                                                    <div class="col-sm-6">
                                                                        @if ($atleta[0]->genero=="Masculino")
                                                                            <div class="form-group form-float">
                                                                                <div class="form-line">
                                                                                    <input type="text" disabled class="form-control" name="menstruacion"/>
                                                                                    <label class="form-label">Mentruacion </label>
                                                                                </div>
                                                                            </div>   
                                                                        @else
                                                                           <div class="form-group form-float">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="menstruacion"/>
                                                                                    <label class="form-label">Mentruacion </label>
                                                                                </div>
                                                                            </div>   
                                                                        @endif
                                                                
                                                                    </div>
                                                            </div>
                                                            
                                                            
                                                        {{--  <!--INICIO TABLA FICHA ANTROPOMETRICA -->  --}}
                                                        <div class="body table-responsive">
                                                         <table id="mainTable" class="table table-bordered">
                                                            <tr>
                                                            <th >#</th>
                                                            <th >Promedio/Mediana</th>
                                                            <th >TOMA 1</th>
                                                            <th >TOMA 2</th>
                                                            <th >TOMA 3</th>
                                                            <th >Promedio/Mediana</th>
                                                            <tr>
                                                            <td>1</td>
                                                            <td>Peso corporal (kg)</td>
                                                            <td><input type="text" name="PCtoma1"></td>
                                                            <td><input type="text" name="PCtoma2"></td>
                                                            <td><input  type="text" name="PCtoma3"></td>
                                                            <td><input  type="text" name="PCpromed"></td>
                                                            <tr>
                                                            <td>2</td>
                                                            <td>Talla (cm)</td>
                                                            <td><input type="text" name="Ttoma1"></td>
                                                            <td><input type="text" name="Ttoma2"></td>
                                                            <td><input type="text" name="Ttoma3"></td>
                                                            <td><input type="text" name="Tpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>3</td>
                                                            <td>Talla sentado (cm)</td>
                                                            <td><input type="text" name="Tstoma1"></td>
                                                            <td><input type="text" name="Tstoma2"></td>
                                                            <td><input type="text" name="Tstoma3"></td>
                                                            <td><input type="text" name="Tspromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>4</td>
                                                            <td>Envergadura (mm)</td>
                                                            <td><input type="text" name="Etoma1"></td>
                                                            <td><input type="text" name="Etoma2"></td>
                                                            <td><input type="text" name="Etoma3"></td>
                                                            <td><input type="text" name="Epromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Pliegues cutaneos (mm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>5</td>
                                                            <td>Subescapular</td>
                                                            <td><input type="text" name="SCtoma1"></td>
                                                            <td><input type="text" name="SCtoma2"></td>
                                                            <td><input type="text" name="SCtoma3"></td>
                                                            <td><input type="text" name="SCpromed"></td>
                                                            <tr>
                                                            <td>6</td>
                                                            <td>Tricipital</td>
                                                            <td><input type="text" name="TTtoma1"></td>
                                                            <td><input type="text" name="TTtoma2"></td>
                                                            <td><input type="text" name="TTtoma3"></td>
                                                            <td><input type="text" name="TTpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>7</td>
                                                            <td>Bicipital</td>
                                                            <td><input type="text" name="BCtoma1"></td>
                                                            <td><input type="text" name="BCtoma2"></td>
                                                            <td><input type="text" name="BCtoma3"></td>
                                                            <td><input type="text" name="BCpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>8</td>
                                                            <td>Supracrestal o cresta iliaca</td>
                                                            <td><input type="text" name="CItoma1"></td>
                                                            <td><input type="text" name="CItoma2"></td>
                                                            <td><input type="text" name="CItoma3"></td>
                                                            <td><input type="text" name="CIpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>9</td>
                                                            <td>Supracrestal o suprailiaco</td>
                                                            <td><input type="text" name="SCotoma1"></td>
                                                            <td><input type="text" name="SCotoma2"></td>
                                                            <td><input type="text" name="SCotoma3"></td>
                                                            <td><input type="text" name="SCopromed"></td>
                                                            <tr>
                                                            <td>10</td>
                                                            <td>Abdominal</td>
                                                            <td><input type="text" name="ABtoma1"></td>
                                                            <td><input type="text" name="ABtoma2"></td>
                                                            <td><input type="text" name="ABtoma3"></td>
                                                            <td><input type="text" name="ABpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>11</td>
                                                            <td>Muslo anterior</td>
                                                            <td><input type="text" name="MAtoma1"></td>
                                                            <td><input type="text" name="MAtoma2"></td>
                                                            <td><input type="text" name="MAtoma3"></td>
                                                            <td><input type="text" name="MApromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>12</td>
                                                            <td>Pierna medial</td>
                                                            <td><input type="text" name="PMtoma1"></td>
                                                            <td><input type="text" name="PMtoma2"></td>
                                                            <td><input type="text" name="PMtoma3"></td>
                                                            <td><input type="text" name="PMpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td colspan="2"><input name="otros1" placeholder="Otros:"></td>
                                                            <td><input type="text" name="otros1toma1"></td>
                                                            <td><input type="text" name="otros1toma2"></td>
                                                            <td><input type="text" name="otros1toma3"></td>
                                                            <td><input type="text" name="otros1promed"></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Perimetros (cm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>13</td>
                                                            <td>Brazo relajado</td>
                                                            <td><input type="text" name="BRtoma1"></td>
                                                            <td><input type="text" name="BRtoma2"></td>
                                                            <td><input type="text" name="BRtoma3"></td>
                                                            <td><input type="text" name="BRpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>14</td>
                                                            <td>Brazo flexionado y contaido</td>
                                                            <td><input type="text" name="BFCtoma1"></td>
                                                            <td><input type="text" name="BFCtoma2"></td>
                                                            <td><input type="text" name="BFCtoma3"></td>
                                                            <td><input type="text" name="BFCpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>15</td>
                                                            <td>Muslo medial</td>
                                                            <td><input type="text" name="MMtoma1"></td>
                                                            <td><input type="text" name="MMtoma2"></td>
                                                            <td><input type="text" name="MMtoma3"></td>
                                                            <td><input type="text" name="MMpromed"></td>
                                                            <tr>
                                                            <td>16</td>
                                                            <td>Pantorilla</td>
                                                            <td><input type="text" name="PANtoma1"></td>
                                                            <td><input type="text" name="PANtoma2"></td>
                                                            <td><input type="text" name="PANtoma3"></td>
                                                            <td><input type="text" name="PANpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>17</td>
                                                            <td>Cintura</td>
                                                            <td><input type="text" name="CINtoma1"></td>
                                                            <td><input type="text" name="CINtoma2"></td>
                                                            <td><input type="text" name="CINtoma3"></td>
                                                            <td><input type="text" name="CINpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>18</td>
                                                            <td>Cadera</td>
                                                            <td><input type="text" name="CADtoma1"></td>
                                                            <td><input type="text" name="CADtoma2"></td>
                                                            <td><input type="text" name="CADtoma3"></td>
                                                            <td><input type="text" name="CADpromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td colspan="2"><input name="otros2" placeholder="Otros:"></td>
                                                            <td><input type="text" name="otros2toma1"></td>
                                                            <td><input type="text" name="otros2toma2"></td>
                                                            <td><input type="text" name="otros2toma3"></td>
                                                            <td><input type="text" name="otros2promed"></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Diametros (cm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>20</td>
                                                            <td>Humero</td>
                                                            <td><input type="text" name="Humerotoma1"></td>
                                                            <td><input type="text" name="Humerotoma2"></td>
                                                            <td><input type="text" name="Humerotoma3"></td>
                                                            <td><input type="text" name="Humeropromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>21</td>
                                                            <td>Muñeca</td>
                                                            <td><input type="text" name="Muñecatoma1"></td>
                                                            <td><input type="text" name="Muñecatoma2"></td>
                                                            <td><input type="text" name="Muñecatoma3"></td>
                                                            <td><input type="text" name="Muñecapromed"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>22</td>
                                                            <td>Femur</td>
                                                            <td><input type="text" name="femurtoma1"></td>
                                                            <td><input type="text" name="femurtoma2"></td>
                                                            <td><input type="text" name="femurtoma3"></td>
                                                            <td><input type="text" name="femurpromed"></td>
                                                            <tr>
                                                            <tr>
                                                            <td colspan="2"><input name="otros3" placeholder="Otros:"></td>
                                                            <td><input type="text" name="otros3toma1"></td>
                                                            <td><input type="text" name="otros3toma2"></td>
                                                            <td><input type="text" name="otros3toma3"></td>
                                                            <td><input type="text" name="otros3promed"></td>
                                                            </tr>
                                                            </tr>
                                                           </table>
                                                            <!--FINAL TABLA ANTROPOMETRIA-->
                                                        </div>
                                                        <h4>
                                                            *Medidas de peril restringido (ISAK nivel 1)
                                                        </h4>
                                                    </div>
                                                </div>
                                          </fieldset>
                                      </div>
                                    <div class="col-md-12">
                                      <div class="btn-group" role="group">
                                        <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                                          <button type="submit" class="btn bg-green waves-effect btnNext">Guardar</button>
                                      </div>
                                    </div>
                                </div>
                                <!--                CUARTO  TAB                                                          -->
                                <div class="tab-pane" id="tab4">
                                      <div class="col-md-12">
                                          <fieldset>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                            <table  class="table table-hover small-text" id="tb">
                                                                <tr class="tr-header">
                                                                    <th> Fecha </th>
                                                                    <th> Nota </th>
                                                                    <th> F. </th>
                                                                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Agrega otra fila"><span class="glyphicon glyphicon-plus"></span></a></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" id="Fecha" name="prueba[]" class="form-control" placeholder="Fecha" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" id="Nota" name="resultado[]" class="form-control" placeholder="Nota" width="100%">
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" id="F" name="fechaYlugar[]" class="form-control" placeholder="F" />
                                                                    </td>
                                                                    <td><a href="javascript:void(0);"  class="remove"><span class="glyphicon glyphicon-remove"></span></a></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                            </div>
                                          </fieldset>
                                      </div>
                                    <div class="col-md-12">
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                                      </div>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!--Final Contenido-->
@endsection 
@section('scripts')
    {{-- <script src="../Recursos/plugins/momentjs/moment.js"></script>
    <script src="../Recursos/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> --}}
  <!-- Autosize Plugin Js -->
    {{-- <script src="../Recursos/plugins/autosize/autosize.js"></script> --}}
     <!-- Input Mask Plugin Js -->
    <script src="../Recursos/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<script>
$( document ).ready(function() {

    var now = new Date();

    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);

    var today =(day)+"/" +(month)+"/"+now.getFullYear() ;
    $("#fecha").text=today;
    $("#fecha").val(today);
    console.log(today);
});
</script>
<script>
    $(function () {
        var $demoMaskedInput = $('.demo-masked-input');
        $demoMaskedInput.find('.date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    });
    // $demoMaskedInput.find('.date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    $(function () {
        var $demoMaskedInput = $('.demo-masked-input');
        $demoMaskedInput.find('.cedula').inputmask('[0-3]/mm/yyyy', { placeholder: '__/__/____' });
    });
</script>
@endsection