@extends('layouts.admin')
@section('head')
   
@endsection
@section('content')
     <!--Contenido-->
        <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>REGISTRO DE </h2>
                </div>
                <div class="body">
                    <form role="form" action="{{url('/examenfisico')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
                        <div style="display:none;">
                            {{--  <input type="text"  value="{{$atleta_id}}" class="form-control" name="txt_atleta" >  --}}
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
                          <div class="col md 12">
                            <div class="tab-content">
                            <!--                    PRIMER TAB  														-->
                                <div class="tab-pane active" id="tab1">
                                      <div class="col-md-12">
                                          <fieldset>
                            <!--			 TABLA BORDEADA		 														-->
								            <div class="row clearfix">
								                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								                        <div class="header">
								                            <h4 style="position: relative;vertical-align:middle;text-align: center;">
								                                Examen Fisico
								                            </h4>
								                        </div>
								                        <div class="body table-responsive">
                                                                   <?php
                                                            echo "<table id='mainTable' class='table table-bordered'><tr><th>#</th>
                                                                <th>Estructura anatomica</th>
                                                                <th>Normal</th>
                                                                <th>Hallazgos Anormales</th>";
                                                                // output data of each row
                                                            for ($i=0; $i <10 ; $i++) {
                                                            if ($i==0) {
                                                                echo "<tr><td>1</td><td>Cuello</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input ></td></tr>";
                                                            } 
                                                            elseif ($i==1) {
                                                                echo "<tr><td>2</td><td>Espalda</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==2) {
                                                                echo "<tr><td>3</td><td>Hombro/Brazo</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==3) {
                                                                echo "<tr><td>4</td><td>Codo/Antebrazo  </td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==4) {
                                                                echo "<tr><td>5</td><td>Muñeca/Mano/Dedos</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==5) {
                                                                echo "<tr><td>6</td><td>Cadera/Muslo</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==6) {
                                                                echo "<tr><td>7</td><td>Rodilla</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==7) {
                                                                echo "<tr><td>8</td><td>Pierna/Tobillo</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            elseif ($i==8) {
                                                                echo "<tr><td>9</td><td>Pie/Dedos</td><td><input type=\"checkbox\" id=\"$i\" class=\"chk-col-green\">
                                                                <label for=\"$i\">Si</label></td><td><input></td></tr>";
                                                            }
                                                            } 
                                                            echo "</table>";
                                                                ?>                                                     
								                        </div>
								                </div>
								            </div>
                                        <!--                          FINAL TABLA BORDEADA        -->
                                          </fieldset>
                                          
                                        <div class="header">
                                        <!--       Otros hallazgos                                  -->
                                          <h4>
								          Otros Hallazgos
								          </h4>
                                          <textarea name="otroshallazgos" rows="6" cols="40" placeholder="Detalles..."></textarea>
                                          <!--                                    Recomendaciones                                                           -->
                                           <h4>
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
                                                        <div class="header">
                                                            <h4 style="position: relative;vertical-align:middle;text-align: center;">
                                                                CONDICIONES CLINICAS ACTUALES
                                                            </h4>
                                                        </div>
                                                        <!--#INICIO TABLA CONDICIONES CLINICAS ACTUALES#-->
                                                        <div class="body table-responsive">
                                                          <?php
                                                          echo "<table id='mainTable' class='table table-bordered'>
                                                            <tr>
                                                            <th >Musculo esqueletico</th>
                                                            <th >Neurologico</th>
                                                            <th >General</th>
                                                            <th >Respiratorio</th>";                                       
                                                            echo "<tr>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$11\" class=\"chk-col-green\">
                                                                <label for=\"$11\">Practica Deportiva</label><br>
                                                                <input type=\"checkbox\" id=\"$12\" class=\"chk-col-green\">
                                                                <label for=\"$12\">Economia Familiar</label><br>
                                                                <input type=\"checkbox\" id=\"$13\" class=\"chk-col-green\">
                                                                <label for=\"$13\">Educacion</label><br>
                                                                <input type=\"checkbox\" id=\"$14\" class=\"chk-col-green\">
                                                                <label for=\"$14\">Dolor articular</label><br>
                                                                <input type=\"checkbox\" id=\"$15\" class=\"chk-col-green\">
                                                                <label for=\"$15\">Rigidez en articulaciones</label><br>
                                                                <input type=\"checkbox\" id=\"$16\" class=\"chk-col-green\">
                                                                <label for=\"$16\">Fracturas</label><br>
                                                                <input type=\"checkbox\" id=\"$17\" class=\"chk-col-green\">
                                                                <label for=\"$17\">Debilidad Muscular</label><br>
                                                                <input type=\"checkbox\" id=\"$18\" class=\"chk-col-green\">
                                                                <label for=\"$18\">Hinchazon articular</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$21\" class=\"chk-col-green\">
                                                                <label for=\"$21\">Paralisis</label><br>
                                                                <input type=\"checkbox\" id=\"$22\" class=\"chk-col-green\">
                                                                <label for=\"$22\">Temblores</label><br>
                                                                <input type=\"checkbox\" id=\"$23\" class=\"chk-col-green\">
                                                                <label for=\"$23\">Alteraciones de la conciencia</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$31\" class=\"chk-col-green\">
                                                                <label for=\"$31\">Perdida de peso</label><br>
                                                                <input type=\"checkbox\" id=\"$32\" class=\"chk-col-green\">
                                                                <label for=\"$32\">Aumento de peso</label><br>
                                                                <input type=\"checkbox\" id=\"$33\" class=\"chk-col-green\">
                                                                <label for=\"$33\">Fiebre</label><br>
                                                                <input type=\"checkbox\" id=\"$34\" class=\"chk-col-green\">
                                                                <label for=\"$34\">Escalofrios</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$41\" class=\"chk-col-green\">
                                                                <label for=\"$41\">Sibilancia</label><br>
                                                                <input type=\"checkbox\" id=\"$42\" class=\"chk-col-green\">
                                                                <label for=\"$42\">Tos</label><br>
                                                                <input type=\"checkbox\" id=\"$43\" class=\"chk-col-green\">
                                                                <label for=\"$43\">Dolor al respirar</label><br>
                                                                <input type=\"checkbox\" id=\"$44\" class=\"chk-col-green\">
                                                                <label for=\"$44\">Toser coagulos de sangre</label>
                                                                </td>
                                                                </tr>
                                                            <tr>                                                            
                                                            <th align=\"center\">Dermatologico</th>
                                                            <th align=\"center\">Cabeza</th>
                                                            <th align=\"center\">Ojos</th>
                                                            <th align=\"center\">Oidos,Nariz,Garganta</th>";                                       
                                                            echo "<tr>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$121\" class=\"chk-col-green\">
                                                                <label for=\"$121\">Erupciones/Purito</label><br>
                                                                <input type=\"checkbox\" id=\"$122\" class=\"chk-col-green\">
                                                                <label for=\"$122\">Ulceras/Llagas</label><br>
                                                                <input type=\"checkbox\" id=\"$123\" class=\"chk-col-green\">
                                                                <label for=\"$123\">Hongos en los pies</label><br>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$221\" class=\"chk-col-green\">
                                                                <label for=\"$221\">Dolores de Cabeza</label><br>
                                                                <input type=\"checkbox\" id=\"$222\" class=\"chk-col-green\">
                                                                <label for=\"$222\">Convulsiones</label><br>
                                                                <input type=\"checkbox\" id=\"$223\" class=\"chk-col-green\">
                                                                <label for=\"$223\">Perdida de la conciencia</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$321\" class=\"chk-col-green\">
                                                                <label for=\"$321\">Cambios en la vision</label><br>
                                                                <input type=\"checkbox\" id=\"$322\" class=\"chk-col-green\">
                                                                <label for=\"$322\">Fotofobia</label><br>
                                                                <input type=\"checkbox\" id=\"$323\" class=\"chk-col-green\">
                                                                <label for=\"$323\">Dolor/enrojecimiento</label><br>
                                                                <input type=\"checkbox\" id=\"$324\" class=\"chk-col-green\">
                                                                <label for=\"$324\">Lagrimeo excesivo</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$421\" class=\"chk-col-green\">
                                                                <label for=\"$421\">Perdida audicion</label><br>
                                                                <input type=\"checkbox\" id=\"$422\" class=\"chk-col-green\">
                                                                <label for=\"$422\">Vertigo</label><br>
                                                                <input type=\"checkbox\" id=\"$423\" class=\"chk-col-green\">
                                                                <label for=\"$423\">Sangrado de nariz</label><br>
                                                                <input type=\"checkbox\" id=\"$424\" class=\"chk-col-green\">
                                                                <label for=\"$424\">Ronquidos</label>
                                                                </td>
                                                                </tr>
                                                                <tr>                                                            
                                                            <th align=\"center\">Genitourinario</th>
                                                            <th align=\"center\">Cardiovascular</th>
                                                            <th align=\"center\">Gastrointestinal</th>
                                                            <th align=\"center\">Otros</th>";                                       
                                                            echo "<tr>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$131\" class=\"chk-col-green\">
                                                                <label for=\"$131\">Perdida control de vejiga</label><br>
                                                                <input type=\"checkbox\" id=\"$132\" class=\"chk-col-green\">
                                                                <label for=\"$132\">Miccion frecuente</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$231\" class=\"chk-col-green\">
                                                                <label for=\"$231\">Dolor en el pecho</label><br>
                                                                <input type=\"checkbox\" id=\"$232\" class=\"chk-col-green\">
                                                                <label for=\"$232\">Palpitaciones</label><br>
                                                                <input type=\"checkbox\" id=\"$233\" class=\"chk-col-green\">
                                                                <label for=\"$233\">Falta de aliento</label>
                                                                </td>
                                                                <td>
                                                                <input type=\"checkbox\" id=\"$331\" class=\"chk-col-green\">
                                                                <label for=\"$331\">Dificultad para deglutir</label><br>
                                                                <input type=\"checkbox\" id=\"$332\" class=\"chk-col-green\">
                                                                <label for=\"$332\">Ardor estomacal</label><br>
                                                                <input type=\"checkbox\" id=\"$333\" class=\"chk-col-green\">
                                                                <label for=\"$333\">Nauseas/Vomito</label><br>
                                                                <input type=\"checkbox\" id=\"$334\" class=\"chk-col-green\">
                                                                <label for=\"$334\">Sangrado intestinal</label>
                                                                </td>
                                                                <td>
                                                                <textarea name=\"otros\" width=\"200px\" placeholder=\"Detallar\"></textarea>
                                                                </td>
                                                                </tr>";
                                                            echo "</table>";
                                                            ?>                                                            
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
                                      </div>
                                    </div>
                                </div>
                                <!--                TERCER  TAB                                                          -->
                                <div class="tab-pane" id="tab3">
                                      <div class="col-md-12">
                                          <fieldset>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="header">
                                                        <h4 style="position: relative;vertical-align:middle;text-align: center;">
                                                            FICHA DE ANTROPOMETRIA
                                                        </h4>
                                                    </div>
                                                    <br>
                                                    <div class="row clearfix">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Nombre y Apellido</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Evaluacion Nº</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Fecha de evaluacion</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Sexo(Varon:1;Mujer:2)</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Antropometrista/Evaluador</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" />
                                                                            <label class="form-label">Anotador </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!--#INICIO TABLA FICHA ANTROPOMETRICA#-->
                                                        <div class="body table-responsive">
                                                            <?php
                                                          echo "<table id='mainTable' class='table table-bordered'>
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
                                                            <th colspan=\"6\">Pliegues cutaneos (mm)</th>
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
                                                            <td colspan=\"2\"><input placeholder=\"Otros:\"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan=\"6\">Perimetros (cm)</th>
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
                                                            <td colspan=\"2\"><input placeholder=\"Otros:\"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            <tr>
                                                            <th colspan=\"6\">Diametros (cm)</th>
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
                                                            <td colspan=\"2\"><input placeholder=\"Otros:\"></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            <td><input></td>
                                                            </tr>
                                                            </tr>";
                                                            echo "</table>";
                                                            ?>
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
                                                                    <td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
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