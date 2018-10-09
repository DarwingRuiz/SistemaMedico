@extends('layouts.admin')
@section('head')
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
                                    <div class="col-md-12">
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                                          
                                      </div>
                                    </div>
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
                                                                <input type="checkbox" name="" id="$13" class="chk-col-green">
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
                                                                <input type="checkbox" name="Dolores/cabeza" id="$221" class="chk-col-green">
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
                                                                <input type="checkbox" name="Dolor/enrojecimiento" id="$323" class="chk-col-green">
                                                                <label for="$323">Dolor/enrojecimiento</label><br>
                                                                <input type="checkbox" name="lagrimeoe" id="$324" class="chk-col-green">
                                                                <label for="$324">Lagrimeo excesivo</label>
                                                                </td>
                                                                <td>
                                                                <input type="checkbox" name="Perdidaaudicion" id="$421" class="chk-col-green">
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
                                                                <input type="checkbox" name="Dolor" id="$231" class="chk-col-green">
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
                                                                <input type="checkbox" name="Nauseas/Vomito" id="$333" class="chk-col-green">
                                                                <label for="$333">Nauseas/Vomito</label><br>
                                                                <input type="checkbox" name="Sangradointestinal" id="$334" class="chk-col-green">
                                                                <label for="$334">Sangrado intestinal</label>
                                                                </td>
                                                                <td>
                                                                <textarea name="otros" width="200px" placeholder="Detallar"></textarea>
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
                                          <h4>
                                          Observaciones
                                          </h4>
                                          <textarea name="observaciones" rows="6" cols="40" placeholder="Detalles..."></textarea>
                                          </div>                                    
                                    </div>
                                    <div class="col-md-12">
                                      <div class="btn-group" role="group">
                                          <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                                          <button type="submit" class="btn bg-green waves-effect btnNext">Guardar</button>
                                      </div>
                                    </div>
                                </div>
                                <!--                TERCER  TAB                                                          -->
                                <div class="tab-pane" id="tab3">
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
                                                                        <label >{{$atleta[0]->nombrecompleto}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            {{--  <input type="text" class="form-control" />  --}}
                                                                            {{--  <label class="form-label">Sexo(Varon:1-Mujer:2)</label>  --}}
                                                                            <label >{{$atleta[0]->genero}}</label>
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
                                                                            <input type="text" name="fechaEvaluacion" class="form-control" />
                                                                            <label class="form-label">Fecha de evaluacion</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="Antropometrista" />
                                                                            <label class="form-label">Antropometrista/Evaluador</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="Anotador"/>
                                                                            <label class="form-label">Anotador </label>
                                                                        </div>
                                                                    </div>
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
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <tr>
                                                            <td>2</td>
                                                            <td>Talla (cm)</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>3</td>
                                                            <td>Talla sentado (cm)</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>4</td>
                                                            <td>Envergadura (mm)</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Pliegues cutaneos (mm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>5</td>
                                                            <td>Subescapular</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <tr>
                                                            <td>6</td>
                                                            <td>Tricipital</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>7</td>
                                                            <td>Bicipital</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>8</td>
                                                            <td>Supracrestal o cresta iliaca</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>9</td>
                                                            <td>Supracrestal o suprailiaco</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <tr>
                                                            <td>10</td>
                                                            <td>Abdominal</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>11</td>
                                                            <td>Muslo anterior</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>12</td>
                                                            <td>Pierna medial</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td colspan="2"><input placeholder="Otros:"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Perimetros (cm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>13</td>
                                                            <td>Brazo relajado</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>14</td>
                                                            <td>Brazo flexionado y contaido</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>15</td>
                                                            <td>Muslo medial</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <tr>
                                                            <td>16</td>
                                                            <td>Pantorilla</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>17</td>
                                                            <td>Cintura</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>18</td>
                                                            <td>Cadera</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td colspan="2"><input placeholder="Otros:"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="6">Diametros (cm)</th>
                                                            </tr>
                                                            <tr>
                                                            <td>13</td>
                                                            <td>Humero</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>14</td>
                                                            <td>Muñeca</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <td>15</td>
                                                            <td>Femur</td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <tr>
                                                            <tr>
                                                            <td colspan="2"><input placeholder="Otros:"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
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
    
@endsection