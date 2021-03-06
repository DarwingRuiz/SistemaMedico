@extends('layouts.admin')
@section('head')
    {{-- expr --}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="header">
                  <h2 style="text-transform: uppercase;">CUESTIONARIO MEDICO DE {{$nombre}}</h2>
            </div>
            <div class="body">
                    <form action="{{url('/CuestionarioMedico')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div style="display:none;">
                            <input type="text"  value="{{$id}}" class="form-control" name="txt_atleta" >
                        </div>
                        <!-- Nav tabs -->
                          <ul class="nav nav-tabs customtab" role="tablist">
                               <li class="active"> <a data-toggle="tab" href="#tab1" role="tab">Alergias</a> </li>
                              <li > <a  data-toggle="tab" href="#tab2" role="tab">Preguntas</a> </li>
                              <li > <a  data-toggle="tab" href="#tab3" role="tab">Carrera Deportiva</a></li>
                              <li > <a data-toggle="tab" href="#tab4" role="tab">Info.laboral/economica</a> </li>
                              <li > <a data-toggle="tab" href="#tab5" role="tab">Informacion Extra </a></li>
                              {{-- <li > <a data-toggle="tab" href="#tab6  " role="tab">ese es el malo </a> </li> --}}
                          </ul>
                          <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1" role="tabpanel">
                                <div class="p-20 ">
                                  <fieldset>
                                     <div class="row m-b-40">
                                       <div class="col-md-12">
                                          <label style="font-size:small" for="">Por favor indique todos los medicamentos con o sin receta medica y suplementos<small> (hierbas nutricionales) </small>que esta tomando Actualmente</label>
                                      </div>
                                     </div>


                                     <div class="col-md-12 ">
                                          <div class="col-md-12">
                                                  <input type="checkbox" id="btnrelajantes" value="Relajante Musculares" name="btnrelajantes" onchange="javascript:mostrarcontenido(this.id,txtrelajante)"  />
                                                  <label for="btnrelajantes">Relajante Muscular</label>
                                          </div>
                                          <div class="col-md-8" id="txtrelajante" style="display:none;">
                                              <div class="form-group form-float">
                                                  <div class="form-line">
                                                      <input type="text" id="txtMEd"  class="form-control" name="txt_medicamentos" >
                                                      <label class="form-label">Que Relajantes Musculares</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="col-md-12">
                                              <input type="checkbox" id="btnantiinflamatorio" name="antiflamatorio" value="Antiinflamatorios" onchange="javascript:mostrarcontenido(this.id,txtantiinflamatorios)" />
                                              <label for="btnantiinflamatorio">Antiinflamatorios</label>
                                          </div>
                                          <div class="col-md-8" id="txtantiinflamatorios" style="display:none;">
                                              <div class="form-group form-float">
                                                  <div class="form-line">
                                                      <input type="text" id="txtanti" class="form-control" name="txt_antiinflamatorios" >
                                                      <label class="form-label"> Que Medicamentos Antiinflamatorios</label>
                                                    </div>
                                                  
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="col-md-12">
                                              <input type="checkbox" id="btnanalgesico" name="analgesico" value="Analgesicos"  onchange="javascript:mostrarcontenido(this.id,txtanalgesico)"/>
                                              <label for="btnanalgesico">Analgesico</label>
                                          </div>
                                          <div class="col-md-8" id="txtanalgesico" style="display:none;">
                                             <div class="form-group form-float">
                                                  <div class="form-line">
                                                      <input type="text" id="txtanalg" class="form-control" name="txt_analgesicos" >
                                                      <label class="form-label">Que Medicamentos Analgesicos</label>
                                                    </div>
                                                  
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="col-md-12">
                                              <input type="checkbox" id="btnotros" name="btn_otros" value="Otros Medicamentos" onchange="javascript:mostrarcontenido(this.id,txtotros)" />
                                              <label for="btnotros">Otros</label>
                                          </div>
                                          <div class="col-md-8" id="txtotros" style="display:none;">
                                              <div class="form-group form-float">
                                                  <div class="form-line">
                                                      <input type="text" id="txtots" class="form-control " name="txt_medicamentos_otros" >
                                                      <label class="form-label">Otros Medicamentos</label>
                                                    </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-12 m-b-20">
                                          <label for="">¿Tienes Alergias?</label>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">

                                              <input id="rdsi" value="si" name="alergia" type="radio"  />
                                              <label for="rdsi"> Si</label>
                                              <input type="radio" id="rdno" value="no" name="alergia"  />
                                              <label for="rdno"> No</label>
                                          </div>
                                      </div>
                                      <div id="alergico" style="display:none;">
                                          <div class="col-md-12">
                                              <div class="col-md-2">
                                                  <input type="checkbox" id="btnmedalergico"  name="medicamento_alergia" value="Alergico a medicamentos"     onchange="javascript:mostrarcontenido(this.id,txtmedalergico)" />
                                                  <label for="btnmedalergico">Medicamento</label>
                                              </div>
                                              <div class="col-md-8" id="txtmedalergico" style="display:none;">
                                                  <div class="form-group form-float">
                                                    <div class="form-line">
                                                          <input type="text" class="form-control" id="txtmedicaale" name="txt_medicamentos_alergicos" >
                                                          <label class="form-label">A que Medicamentos es alergico</label>
                                                    </div>
                                                      
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-md-12">
                                              <div class="col-md-2">
                                                  <input type="checkbox" id="btnpolen" value="Alergico a polen" name="polen" onchange="javascript:mostrarcontenido(this.id,txtpolen)"   />
                                                  <label for="btnpolen">Polen</label>
                                              </div>
                                              <div class="col-md-8" id="txtpolen" style="display:none;">
                                                  <div class="form-group form-float">
                                                    <div class="form-line">  
                                                          <input type="text" id="polentxt" class="form-control" name="txt_alergia_polen" >
                                                          <label class="form-label"0>Que flores te causan alergias</label>
                                                    </div>
                                                     
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="col-md-2">
                                                  <input type="checkbox" id="btncomida" name="comida" value="Comida" onchange="javascript:mostrarcontenido(this.id,txtcomida)"   />
                                                  <label for="btncomida">Comida</label>
                                              </div>
                                              <div class="col-md-8" id="txtcomida" style="display:none;">
                                                  <div class="form-group form-float">
                                                    <div class="form-line">
                                                          <input type="text" id="txtalergiacomida" class="form-control" name="txtalergiacomida" >
                                                          <label class="form-label">A que comida eres alergico</label>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="col-md-2">
                                                  <input type="checkbox" id="btnpiquetesdeinsectos"  value="Piquetes de insectos" name="piquetesdeinsectos" onchange="javascript:mostrarcontenido(this.id,txtpiquetes)"   />
                                                  <label for="btnpiquetesdeinsectos">Piquetes de insectos</label>
                                              </div>
                                              <div class="col-md-8" id="txtpiquetes" style="display:none;">
                                                 <div class="form-group form-float">
                                                     <div class="form-line">
                                                          <input type="text" id="txtpiquete" class="form-control" name="txtpiquete" >
                                                          <label class="form-label">A que piquetes eres alergico</label>
                                                     </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="col-md-2">
                                                  <input type="checkbox" id="btnotrosalergias" name="otrosalergias" value="Otras alergias" onchange="javascript:mostrarcontenido(this.id,txtotrasalergias)"/>
                                                  <label for="btnotrosalergias">Otros</label>
                                              </div>
                                              <div class="col-md-8" id="txtotrasalergias" style="display:none;">
                                                 <div class="form-group form-float">
                                                     <div class="form-line">
                                                          <input type="text"  class="form-control" name="txtotra_alergia" >
                                                          <label class="form-label">A que eres alergico</label>
                                                     </div>
                                                  </div>
                                              </div>
                                              {{-- <div class="col-md-8" id="txtotrasalergias" style="display:none;">
                                                 <div class="form-group form-float">
                                                        <div class="form-line">
                                                          <input type="text" id="txt_otra_alergia" class="form-control" name="txt_otra_alergia" >
                                                          <label class="form-label">A que otras cosas eres alergico</label>
                                                        </div>
                                                      
                                                  </div>
                                              </div> --}}
                                          </div>
                                      </div>
                                   </fieldset>
                                </div>
                            </div>
                            {{-- tab 2 --}}
                            <div class="tab-pane" id="tab2" role="tabpanel">
                                <fieldset>
                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="active"><a href="#sub1" data-toggle="tab" role="tab">Historial Medico</a></li>
                                        <li ><a href="#sub2" data-toggle="tab" role="tab">Historial Familiar</a></li>
                                        <li ><a href="#sub3" data-toggle="tab" role="tab">Aparato Locomotor</a></li>
                                    </ul>
                                    {{-- sub tab content --}}
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="sub1">
                                            <fieldset>
                                                 <div class="row col-md-12">
                                                  <div class="col-sm-10">
                                                    <div class="form-group">
                                                      <label>A) ¿Alguna vez un doctor te ha prohibido limitado tu participacion en deportes por alguna razon?</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-group">
                                                          <input id="rdsi_preg_A" value="Si" name="pregunta_A" type="radio"  />
                                                          <label for="rdsi_preg_A"> Si</label>
                                                          <input type="radio" id="rdno_preg_A" value="No" name="pregunta_A"  />
                                                          <label for="rdno_preg_A"> No</label>
                                                      </div>
                                                  </div>
                                                </div>{{-- fin del row 1 pregunta 1 --}}
                                                <div class="row col-md-12">
                                                  <div class="col-sm-10">
                                                    <div class="form-group">
                                                      <label >B)¿Has sido ingresado alguna vez en el hospital?</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-group">
                                                          <input id="rdsi_preg_B" value="si" name="pregunta_B" type="radio"  />
                                                          <label for="rdsi_preg_B"> Si</label>
                                                          <input type="radio" id="rdno_preg_B" value="no" name="pregunta_B"  />
                                                          <label for="rdno_preg_B"> No</label>
                                                    </div>
                                                  </div>
                                                </div>{{-- fin del row 2 pregunta 2 --}}
                                                <div class="row col-md-12">
                                                  <div class="col-sm-10">
                                                    <div class="form-group">
                                                      <label>C)¿Has tenido cirugia alguna vez?</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-group">
                                                          <input id="rdsi_preg_C" value="si" name="pregunta_C" type="radio"  />
                                                          <label for="rdsi_preg_C"> Si</label>
                                                          <input type="radio" id="rdno_preg_C" value="no" name="pregunta_C"  />
                                                          <label for="rdno_preg_C"> No</label>
                                                    </div>
                                                  </div>
                                                </div>{{-- fin del row 3 pregunta 3 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="">D) ¿Usas lentes o lentes de contacto?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                              <input id="rdsi_preg_D" value="si" name="pregunta_D" type="radio"  />
                                                              <label for="rdsi_preg_D"> Si</label>
                                                              <input type="radio" id="rdno_preg_D" value="no" name="pregunta_D"  />
                                                              <label for="rdno_preg_D"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin del row 4 pregunta 4 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group"><label for="">E) ¿Nascite o te falta un riñon,un ojo,untesticulo u algun otro órgano?</label></div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                          <input id="rdsi_preg_E" value="si" name="pregunta_E" type="radio"  />
                                                          <label for="rdsi_preg_E"> Si</label>
                                                          <input type="radio" id="rdno_preg_E" value="no" name="pregunta_E"  />
                                                          <label for="rdno_preg_E"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin del row 4 pregunta 5 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group"><label for="">F) ¿Te has desmayado durante o despues de hacer ejercicios?</label></div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                          <input id="rdsi_preg_F" value="si" name="pregunta_F" type="radio"  />
                                                          <label for="rdsi_preg_F"> Si</label>
                                                          <input type="radio" id="rdno_preg_F" value="no" name="pregunta_F"  />
                                                          <label for="rdno_preg_F"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin del row 4 pregunta 6 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="">G) ¿Has tenido alguna vez molestias dolor o presion en el pecho cuando haces ejercicios?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                          <input id="rdsi_preg_G" value="si" name="pregunta_G" type="radio"  />
                                                          <label for="rdsi_preg_G"> Si</label>
                                                          <input type="radio" id="rdno_preg_G" value="no" name="pregunta_G"  />
                                                          <label for="rdno_preg_G"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin del row 4 pregunta 7 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group"><label for="">H) ¿Alguna vez has tenido palpitaciones o latidos irregulares cuando haces ejercicios?</label></div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                          <input id="rdsi_preg_H" value="si" name="pregunta_H" type="radio"  />
                                                          <label for="rdsi_preg_H"> Si</label>
                                                          <input type="radio" id="rdno_preg_H" value="no" name="pregunta_H"  />
                                                          <label for="rdno_preg_H"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin del row 4 pregunta 8 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="">I) ¿Te ha dicho un doctor que tienes un problema del corazon?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                          <input type="radio" id="rdsi_preg_I" value="Si" name="pregunta_I"/>
                                                          <label for="rdsi_preg_I"> Si</label>
                                                          <input type="radio" id="rdno_preg_I" value="No" name="pregunta_I"  />
                                                          <label for="rdno_preg_I"> No</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" id="anexopreg_I" style="display:none;">
                                                                  <div class="col-md-10">
                                                                      <label for="">a)presion alta</label>

                                                                  </div>
                                                                  <div class="col-md-2">
                                                                      <div class="form-group">

                                                                          <input id="btn_presion_si" value="Si" name="presion_alta" type="radio"  />
                                                                          <label for="btn_presion_si"> Si</label>
                                                                          <input type="radio" id="btn_presion_no" value="No" name="presion_alta"  />
                                                                          <label for="btn_presion_no"> No</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-10">
                                                                      <label for="">b)soplo en el corazón</label>

                                                                  </div>
                                                                  <div class="col-md-2">
                                                                      <div class="form-group">

                                                                          <input id="btn_soplo_si" value="Si" name="Soplo" type="radio"  />
                                                                          <label for="btn_soplo_si"> Si</label>
                                                                          <input type="radio" id="btn_soplo_no" value="No" name="Soplo"  />
                                                                          <label for="btn_soplo_no"> No</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-10">
                                                                      <label for="">c)Nivel alto de colesterol</label>

                                                                  </div>
                                                                  <div class="col-md-2">
                                                                      <div class="form-group">

                                                                          <input id="btn_colesterol_si" value="Si" name="colesterol" type="radio"  />
                                                                          <label for="btn_colesterol_si"> Si</label>
                                                                          <input type="radio" id="btn_colesterol_no" value="No" name="colesterol"  />
                                                                          <label for="btn_colesterol_no"> No</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-10">
                                                                      <label for="">d)otro</label>

                                                                  </div>
                                                                  <div class="col-md-2">
                                                                      <div class="form-group">

                                                                          <input id="btn_otro_si" value="Si" name="otroenfer" type="radio"  />
                                                                          <label for="btn_otro_si"> Si</label>
                                                                          <input type="radio" id="btn_otro_no" value="No" name="otroenfer"  />
                                                                          <label for="btn_otro_no"> No</label>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-8" id="otros_Historial_medico" style="display:none;">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" id="txtotrasenfermedades" class="form-control" name="txt_especificacion_otros" >
                                                                                <label class="form-label"> Especifique</label>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                              </div>
                                                    </div>{{-- fin del row 4 pregunta 9 --}}
                                                    <div class="row col-md-12">
                                                        <div class="col-sm-10">
                                                            <div class="form-group">
                                                                <label for="">J) ¿Alguna vez un doctor te ha pedido que te hagas una prueba del corazon¿Ej:Electrocardiograma?</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <input id="rdsi_preg_J" value="Si" name="pregunta_J" type="radio"  />
                                                                <label for="rdsi_preg_J"> Si</label>
                                                                <input type="radio" id="rdno_preg_J" value="No" name="pregunta_J"  />
                                                                <label for="rdno_preg_J"> No</label>
                                                            </div>
                                                        </div>
                                                    </div>{{-- fin del row 4 pregunta 10 --}}
                                                    <div class="row col-md-12">
                                                        <div class="col-sm-10">
                                                            <div class="form-group">
                                                                <label for="">K) ¿Te sientes mareado o te falta el aire mas de lo esperado cuando haces ejercicios?</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <input id="rdsi_preg_K" value="si" name="pregunta_K" type="radio"  />
                                                                <label for="rdsi_preg_K"> Si</label>
                                                                <input type="radio" id="rdno_preg_K" value="no" name="pregunta_K"  />
                                                                <label for="rdno_preg_K"> No</label>
                                                            </div>
                                                        </div>
                                                    </div>{{-- fin del row 4 pregunta 11 --}}
                                                    <div class="row col-md-12">
                                                        <div class="col-sm-10">
                                                            <div class="form-group">
                                                                 <label for="">L) ¿Has tenido una convulsion inexplicable?</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                              <input id="rdsi_preg_L" value="si" name="pregunta_L" type="radio"  />
                                                              <label for="rdsi_preg_L"> Si</label>
                                                              <input type="radio" id="rdno_preg_L" value="no" name="pregunta_L"  />
                                                              <label for="rdno_preg_L"> No</label>
                                                            </div>
                                                        </div>
                                                    </div>{{-- fin del row 4 pregunta 12 --}}
                                            </fieldset>
                                        </div>
                                        <div class="tab-pane p-20" id="sub2">
                                            <fieldset>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label for="">¿Has tenido algun familiar que haya fallecido a causa de problemas de corazon, o bien que haya fallecido de forma inexplicable antes de los 50 años?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input id="rdsi_pregunta_fam1" value="si" name="pregunta_fam_1" type="radio"  />
                                                            <label for="rdsi_pregunta_fam1"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_fam1" value="no" name="pregunta_fam_1"  />
                                                            <label for="rdno_pregunta_fam1"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- fin pregunta 1 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label for="">¿Alguien de tu familia tiene problemas del corazon, un marcapaso o un desfibrilador en su corazon?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_2" value="si" name="pregunta_fam_2" type="radio"  />
                                                            <label for="rdsi_preg_fam_2"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_2" value="no" name="pregunta_fam_2"  />
                                                            <label for="rdno_preg_fam_2"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- pregunta 2 --}}
                                                <div class=" row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Ha sufrido algun familiar un desmayo inexplicable o convulsiones?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_3" value="si" name="pregunta_fam_3" type="radio"  />
                                                            <label for="rdsi_preg_fam_3"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_3" value="no" name="pregunta_fam_3"  />
                                                            <label for="rdno_preg_fam_3"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- pregunta 3 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Alguien de su familia padece de Diabetes?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_4" value="si" name="pregunta_fam_4" type="radio"  />
                                                            <label for="rdsi_preg_fam_4"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_4" value="no" name="pregunta_fam_4"  />
                                                            <label for="rdno_preg_fam_4"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- pregunta 4 --}}
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Alguien de su familia padece de asma?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_5" value="si" name="pregunta_fam_5" type="radio"  />
                                                            <label for="rdsi_preg_fam_5"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_5" value="no" name="pregunta_fam_5"  />
                                                            <label for="rdno_preg_fam_5"> No</label>
                                                        </div>
                                                    </div>
                                                </div>{{-- pregunta 5 --}}       
                                           </fieldset>
                                        </div>
                                        <div class="tab-pane p-20" id="sub3">
                                             
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Alguna vez ha perdido un entrenamiento o evento por haber sufrido lesion en el hueso, tendon o musculo?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_pregunta_locomotor_1" value="si" name="pregunta_locomotor_1" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_1"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_1" value="no" name="pregunta_locomotor_1"  />
                                                            <label for="rdno_pregunta_locomotor_1"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Te has fracturado alguna vez un hueso o dislocado una articulacion?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_pregunta_locomotor_2" value="si" name="pregunta_locomotor_2" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_2"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_2" value="no" name="pregunta_locomotor_2"  />
                                                            <label for="rdno_pregunta_locomotor_2"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Has sufrido alguna lesion que haya requerido radiografias,tomografias, o resonancia magnetica, soporte ortopedico,como yeso o tablilla?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_pregunta_locomotor_3" value="si" name="pregunta_locomotor_3" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_3"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_3" value="no" name="pregunta_locomotor_3"  />
                                                            <label for="rdno_pregunta_locomotor_3"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Usas regularmente una tablilla/soporte ortopedico u otro dispositivo de asistencia?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_pregunta_locomotor_4" value="si" name="pregunta_locomotor_4" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_4"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_4" value="no" name="pregunta_locomotor_4"  />
                                                            <label for="rdno_pregunta_locomotor_4"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Tienes calambres frecuentes en los musculos cuando haces ejercicios?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input id="rdsi_pregunta_locomotor_5" value="si" name="pregunta_locomotor_5" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_5"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_5" value="no" name="pregunta_locomotor_5"  />
                                                            <label for="rdno_pregunta_locomotor_5"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Has tenido Hinchazon en alguna de tus articulaciones?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_pregunta_locomotor_6" value="si" name="pregunta_locomotor_6" type="radio"  />
                                                            <label for="rdsi_pregunta_locomotor_6"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_locomotor_6" value="no" name="pregunta_locomotor_6"  />
                                                            <label for="rdno_pregunta_locomotor_6"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-12">

                                                        <label class="form-label">Cirugias(especifique que tipo de cirugias y cuando fue realizada)</label>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="cirugias" >
                                                                <label class="form-label"> Especifique</label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="cirugias" >
                                                                <label class="form-label">cirugias</label>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="row col-md-12">
                                                    <div class="col-md-12">

                                                        <label class="form-label">Hospitalizaciones(Especifique si ha sido hospitalizado,las fechas y las causas)</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="hospitalizaciones" >
                                                                <label class="form-label">Hospitalizaciones</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                              {{-- tab 3 --}}
                            <div class="tab-pane" id="tab3" role="tabpanel">
                                <fieldset>
                                    <h4 class="card-title">Carrera Deportiva</h4>
                                    <div class="row col-md-4">
                                        <div class=" row col-md-12 m-b-30">
                                            <label for="">Cuanto Tiempo lleva Compitiendo</label>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group">
                                                    <input id="menosde1anio" value="Menos de 1 año" name="compitiendo" type="radio"  />
                                                    <label for="menosde1anio"> Menos de un año</label>
                                                    <input type="radio" id="entre1y3" value="Entre 1 y 3 años" name="compitiendo"  />
                                                    <label for="entre1y3"> Entre 1 y 3 años</label>
                                                    <input id="entre3y5" value="Entre 3 y 5 años" name="compitiendo" type="radio"  />
                                                    <label for="entre3y5"> Entre 3 y 5 años</label>
                                                    <input type="radio" id="entre5y10" value="Entre 5 y 10 años" name="compitiendo"  />
                                                    <label for="entre5y10"> Entre 5 y 10 años</label>
                                                    <input id="masde10" value="Mas de 10 años" name="compitiendo" type="radio"  />
                                                    <label for="masde10"> Mas de 10 años</label>
                                                </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row col-md-10">
                                        <div class="col-md-12 m-b-40">
                                            <label for="">Antecedentes Deportivos: a continuacion, mencione sus logros y medallas mas importantes en competencias como seleccionado (a) o en eventos olimpicos</label>

                                        </div>
                                        <div class="col-md-12 m-t-10">
                                            <table  class="table table-hover small-text" id="tb">

                                                <tr class="tr-header">
                                                    <th> Categoria/Prueba </th>
                                                    <th> Resultado/Marca </th>
                                                    <th> Fecha y Lugar </th>
                                                    <th> Evento  </th>
                                                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <input type="text" id="prueba" name="prueba[]" class="form-control" placeholder="Categoria/Prueba" />
                                                    </td>
                                                    <td>
                                                        <input type="text" id="resultado" name="resultado[]" class="form-control" placeholder="Resultado/Marca" width="100%">
                                                    </td>
                                                    <td>
                                                        <input type="text" id="fechaYlugar" name="fechaYlugar[]" class="form-control" placeholder="Fecha y Lugar" />
                                                    </td>
                                                    <td>
                                                        <input type="text" id="evento" name="evento[]" class="form-control" placeholder="Evento" />
                                                    </td>
                                                    <td><a href='javascript:void(0);'  class='remove'><span class='fa fa-remove'></span></a></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                    
                                    <div class="row col-md-10 ">
                                        <div class="col-md-12 m-b-40">
                                            <label for="">Espeifique si algun familiar ha participado en eventos deportivos de alto rendimiento o de seleccion nacional.</label>

                                        </div>
                                        <div class="col-md-12 m-t-10">
                                            <table  class="table table-hover small-text" id="tb2">

                                                <tr class="tr-header">
                                                    <th> Evento  </th>
                                                    <th> Resultado obtenido </th>
                                                    <th> Fecha y Lugar </th>
                                                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore2" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <input type="text" name="evento_fam[]" class="form-control" placeholder="Evento" />
                                                    </td>
                                                    <td>
                                                        <input type="text" name="resultado_fam[]" class="form-control" placeholder="Resultado/Marca" width="100%">
                                                    </td>
                                                    <td>
                                                        <input type="text"  name="fechaYlugarfam[]" class="form-control" placeholder="Fecha y Lugar" />
                                                    </td>
                                                    <td><a href='javascript:void(0);'  class='remove2'><span class='fa fa-remove'></span></a></td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>
                                                
                                    <h4 class="card-title"> Entrenamientos</h4>
                                            
                                                <div class="row">
                                                    <div class="row col-sm-4">
                                                        <div class="col-sm-12 m-b-40">
                                                            <label for="">Entreno(dias por semana)</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group ">
                                                                <input id="menosde1dia" value="Menos de 1 dia" name="entrenamiento" type="radio"  />
                                                                <label for="menosde1dia"> Menos de 1 dia</label>
                                                                <input type="radio" id="entre1y3dias" value="Entre 1 y 3 dias" name="entrenamiento"  />
                                                                <label for="entre1y3dias"> Entre 1 y 3 dias</label>
                                                                <input id="entre3y5dias" value="Entre 3 y 5 dias" name="entrenamiento" type="radio"  />
                                                                <label for="entre3y5dias"> Entre 3 y 5 dias</label>
                                                                <input type="radio" id="entre5y10dias" value="Entre 5 y 10 años" name="entrenamiento"  />
                                                                <label for="entre5y10dias"> Entre 5 y 10 dias</label>
                                                                <input id="masde10dias" value="Mas de 10 dias" name="entrenamiento" type="radio"  />
                                                                <label for="masde10dias"> Mas de 10 dias</label>
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-float ">
                                                                        <div class="form-line">
                                                                            <input type="text" id="num" class="form-control" name="sesiones" >
                                                                            <label class="form-label" style="font-size: x-small;">Núm de sesiones /semana</label>
                                                                        </div>
                                                                            
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12 m-b-20">
                                                            <label for="">Horas de entrenamiento por sesion</label>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group ">

                                                                <input id="1y2horas" value="1 y 2 horas" name="por_sesion" type="radio"  />
                                                                <label for="1y2horas">1 y 2 horas</label>
                                                                <input type="radio" id="2y4horas" value="2 y 4 horas" name="por_sesion"  />
                                                                <label for="2y4horas">2 y 4 horas</label>
                                                                <input id="4y6horas" value="4 y 6 horas" name="por_sesion" type="radio"  />
                                                                <label for="4y6horas">4 y 6 horas</label>
                                                                <input type="radio" id="masde6" value="mas de 6 horas" name="por_sesion"  />
                                                                <label for="masde6"> Mas de 6 horas </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12 m-b-20">
                                                            <label for="">Modalidad de entrenamiento</label>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input id="sinentrenador" value="Sin intrenador" name="modalidad_entrenamiento" type="radio"  />
                                                                <label for="sinentrenador"> Sin Entrenador</label>
                                                                <input type="radio" id="soloyentrenador" value="Solo y / o con entrenador" name="modalidad_entrenamiento"  />
                                                                <label for="soloyentrenador"> Solo y/o con entrenador</label>
                                                                <input id="conentrenador" value="Con entrenador" name="modalidad_entrenamiento" type="radio"  />
                                                                <label for="conentrenador"> Con entrenador</label>
                                                                <input type="radio" id="cmentre" value="Con mas de un entrenador" name="modalidad_entrenamiento"  />
                                                                <label for="cmentre"> Con mas de un entrenador</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                                
                                                    <div class="row col-sm-4">
                                                        <div class="col-md-12 m-b-40">
                                                            <label for="">Cuento con un plan de entrenamiento que:</label>

                                                        </div>
                                                        <div class="col-md-12 m-t-10">
                                                            <div class="form-group ">


                                                                <input id="cons" value="conozco y sigo" name="plan" type="radio"  />
                                                                <label for="cons">Conozco y sigo</label>

                                                                <input type="radio" id="consns" value="Conozco,Pero no sigo" name="plan"  />
                                                                <label for="consns">Conozco,pero no sigo</label>

                                                                <input id="nocns" value="No Conozco" name="plan" type="radio"  />
                                                                <label for="nocns"> No Conozco</label>
                                                                <br>
                                                                <input type="radio" id="ntengo" value="No Tengo" name="plan"  />
                                                                <label for="ntengo">No Tengo</label><br>

                                                                <input id="diseñado" value="Diseñado Por mi " name="plan" type="radio"  />
                                                                <label for="diseñado">Diseñado por mi</label>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row col-sm-6">
                                                        <div class="col-md-12 m-b-40">
                                                            <label for="">sus actividades se adaptan a sus horararios y sesiones de entrenamiento</label>

                                                        </div>
                                                        <div class="col-md-8 m-t-20">
                                                            <div class="form-group ">

                                                                <input id="btn_actividades_Si" value="Si" name="acti" type="radio"  />
                                                                <label for="btn_actividades_Si">Si</label><br>
                                                                <input type="radio" id="btn_medianamente" value="Medianamente" name="acti"  />
                                                                <label for="btn_medianamente">Medianamente</label><br>
                                                                <div id="medipor" style="display:none;">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                 <input type="text" id="pxq" class="form-control" name="mediporque" >
                                                                                 <label class="form-label">¿Porque?</label>
                                                                            </div>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                                <input id="btn_actividades_No" value="No" name="acti" type="radio"  />
                                                                <label for="btn_actividades_No">No</label>
                                                                <div id="no_porque" style="display:none;">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                  <input type="text" id="asd" class="form-control" name="no_porque" >
                                                                                 <label class="form-label">¿Porque?</label>
                                                                            </div>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                               

                                                <div class="col-md-12 m-b-40">
                                                    <label for="">Su sitio de entrenamiento es:</label>

                                                </div>
                                                <div class="row col-md-12">

                                                    <div class="col-md-6">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="sitio" >
                                                                <label class="form-label">los sitios donde entrena</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input id="btn_inadecuado" value="inadecuado" name="inad" type="checkbox" onchange="javascript:mostrarcontenido(this.id,txt_inadecuado)"  />
                                                        <label for="btn_inadecuado">inadecuado</label>
                                                    </div>
                                                    <div class="col-md-4" id="txt_inadecuado" style="display:none;">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" id="inadec" class="form-control" name="inadec" >
                                                                <span class="bar"></span>
                                                                <label class="form-label">¿Porque es inadecuado?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                </fieldset>
                           
                            </div>
                            {{-- tab 4 --}}
                            <div class="tab-pane" id="tab4" role="tabpanel">

                              <fieldset>
                                <h4 class="card-title">Situacion Laboral</h4>
                                   <div class="row col-md-12">
                                   <div class="col-md-4">
                                        <div class="col-md-12 m-b-20">
                                            <label>Trabaja Actualmente</label>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="trabaja_si" value="Si" name="trabaja" type="radio"  />
                                                <label for="trabaja_si"> Si</label>
                                                <input type="radio" id="trabaja_no" value="No" name="trabaja"  />
                                                <label for="trabaja_no"> No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12 m-b-20">
                                            <label>Tiene personas a cargo</label>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">

                                                <input id="persona_si" value="Si" name="personas" type="radio"  />
                                                <label for="persona_si"> Si</label>
                                                <input type="radio" id="persona_no" value="No" name="personas"  />
                                                <label for="persona_no"> No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12">
                                        <div class="col-md-12 m-b-20">
                                            <label>Las necesidades economicas del atleta para su practica deportiva son asumidas por:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Atleta" class="filled-in" name="economica[]" value="atleta" />
                                                <label for="Atleta">Atleta</label>
                                            </div>
                                            <div class="col-md-12">

                                                <input type="checkbox" id="Padre" class="filled-in" name="economica[]" value="Padre"/>
                                                <label for="Padre">Padre</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Madre" class="filled-in" name="economica[]" value="Madre"/>
                                                <label for="Madre">Madre</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Pareja" class="filled-in" name="economica[]" value="Pareja" />
                                                <label for="Pareja">Pareja</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="otmf" class="filled-in" name="economica[]" value="Otros Familiares" onchange="javascript:mostrarcontenido(this.id,otros_familiares)"/>
                                                <label for="otmf">Otros Miembros de la familia</label>
                                                <div class="col-md-12" id="otros_familiares" style="display:none;">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text"  class="form-control" name="txt_otrosmiembros" >
                                                            <label class="form-label">¿Que Familiares?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Otros/Cuales" class="filled-in" name="economica[]" value="Otros" onchange="javascript:mostrarcontenido(this.id,otros_persom)"/>
                                                <label for="Otros/Cuales">Otros/Cuales:</label>
                                                <div class="col-md-12" id="otros_persom" style="display:none;">
                                                    <div class="form-group form-float ">
                                                        <div class="form-line">
                                                            <input type="text"  class="form-control" name="txt_otrospersonas" >
                                                            <label class="form-label">¿Que personas?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="nram" class="filled-in" name="economica[]" value="No recibe apoyo Monetario" />
                                                <label for="nram">No recibe apoyo Monetario</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="ampd" class="filled-in" name="economica[]" value="Apoyo monetario de programa deportivo"/>
                                                <label for="ampd">Apoyo monetario de programa deportivo</label>

                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Federación" class="filled-in" name="economica[]" value="Federación" />
                                                <label for="Federación">Federación</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Otros_apoyos" class="filled-in" name="economica[]" value="Otros apoyos" onchange="javascript:mostrarcontenido(this.id,otrosApoyos)"/>
                                                <label for="Otros_apoyos">Otros apoyos</label>
                                                <div class="col-md-12" id="otrosApoyos" style="display:none;">
                                                    <div class="form-group form-float ">
                                                        <div class="form-line">
                                                            <input type="text"  class="form-control" name="txt_otrosapoyos1" >
                                                            <label class="form-label">Especificar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12">
                                        <div class="col-md-12 m-b-40">
                                            <label>En que consiste el apoyo que recibe:</label>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="monetario" class="filled-in" name="consiste[]" value="Monetario" />
                                                <label for="monetario">Monetario</label>
                                            </div>
                                            <div class="col-md-12">

                                                <input type="checkbox" id="ecp" class="filled-in" name="consiste[]" value="Equipo ciencias del deporte"/>
                                                <label for="ecp">Equipo ciencias del deporte</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Educativo" class="filled-in" name="consiste[]" value="Educativo"/>
                                                <label for="Educativo">Educativo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="col-md-12">
                                                <input type="checkbox" id="Alojamiento" class="filled-in" name="consiste[]" value="Alojamiento" />
                                                <label for="Alojamiento">Alojamiento</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Transporte" class="filled-in" name="consiste[]" value="Transporte"/>
                                                <label for="Transporte">Transporte</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Alimentacion" class="filled-in" name="consiste[]" value="Alimentacion"/>
                                                <label for="Alimentacion">Alimentacion</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-md-12 m-b-40">
                                            <label>En que invierte su apoyo monetario</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="pd" class="filled-in" name="invierte[]" value="Practica deportiva" />
                                                <label for="pd">Practica deportiva</label>
                                            </div>
                                            <div class="col-md-12">

                                                <input type="checkbox" id="ef" class="filled-in" name="invierte[]" value="Economia Familiar"/>
                                                <label for="ef">Economia Familiar </label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="Educacion" class="filled-in" name="invierte[]" value="Educacion"/>
                                                <label for="Educacion">Educacion</label>
                                            </div>

                                        </div>

                                    </div>
                                   </div> 
                              </fieldset>
                            </div>
                            {{-- tab 5 --}}
                             <div class="tab-pane " id="tab5" role="tabpanel">
                                 
                                    <fieldset>
                                        <div class="row col-md-12">
                                            <h4 class="card-inside-title">Informacion Familiar</h4>
                                            <div class="col-sm-3">

                                                <div class="col-sm-12">
                                                    <label>1)Con quien vive</label>
                                                </div>
                                                <div class="col-sm-12   ">
                                                    <div class="demo-checkbox">
                                                        <input type="checkbox" id="soltero" class="filled-in" name="vive[]" value="Soltero(a)" />
                                                        <label for="soltero">Soltero(a)</label>
                                                        <input type="checkbox" id="acompañado" class="filled-in" name="vive[]" value="Acompañado" />
                                                        <label for="acompañado">Acompañado</label>
                                                        <input type="checkbox" id="Padre_2" class="filled-in" name="vive[]" value="Padre"/>
                                                        <label for="Padre_2">Padre</label>
                                                        <input type="checkbox" id="Madre_2" class="filled-in" name="vive[]" value="Madre"/>
                                                        <label for="Madre_2">Madre</label>
                                                        <input type="checkbox" id="Hermanos" class="filled-in" name="vive[]" value="Hermanos" onchange="javascript:mostrarcontenido(this.id,hermano)"/>
                                                        <label for="Hermanos">Hermanos</label>

                                                        <div class="col-md-12" id="hermano" style="display:none;">
                                                            <div class="form-group from-float">
                                                                <div class="form-line">
                                                                    <input type="text"  class="form-control" name="txt_Chermanos" >
                                                                    <label class="form-label">Cuantos Hermanos</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="checkbox" id="Hijos" class="filled-in" name="vive[]" value="Hijos" onchange="javascript:mostrarcontenido(this.id,hijo)"/>
                                                        <label for="Hijos">Hijos</label>
                                                        <div class="col-md-12" id="hijo" style="display:none;">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text"  class="form-control" name="txt_cHijos" >
                                                                    <label class="form-label">Cuantos hijos</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="checkbox" id="otrossfamiliares" class="filled-in" name="vive[]" value="Otros Familiares" onchange="javascript:mostrarcontenido(this.id,otrosfamiliare)"/>
                                                        <label for="otrossfamiliares">Otros Familiares</label>
                                                        <div class="col-md-12" id="otrosfamiliare" style="display:none;">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text"  class="form-control" name="txt_Qfamiliar" >
                                                                    <label class="form-label">Que familiaress</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="checkbox" id="Otros_info" class="filled-in" name="vive[]" value="Otros" onchange="javascript:mostrarcontenido(this.id,otros_a)"/>
                                                        <label for="Otros_info">Otros</label>
                                                        <div class="col-md-12" id="otros_a" style="display:none;">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text"  class="form-control" name="txt_Qotros" >
                                                                    <label class="form-label">Que Otros</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="checkbox" id="aldep" class="filled-in" name="vive[]" value="Alojamiento Deportivo"/>
                                                        <label for="aldep">Alojamiento Deportivo</label>

                                                    </div>
                                                   </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="row col-md-12">
                                                   <div class="col-md-12">
                                                        <label>2)¿Tiene Hijos?</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <input id="rdsi_hijos" value="si" name="btnhijos" type="radio"  />
                                                           <label for="rdsi_hijos"> Si</label>
                                                           <input type="radio" id="rdno_hijos" value="no" name="btnhijos"  />
                                                           <label for="rdno_hijos"> No</label>
                                                       </div>
                                                   </div>
                                                   
                                                   <div class="col-md-12 ">
                                                       <label>3)    ¿Proyecta Tener Hijos?</label>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <div class="form-group">
                                                           <input id="rdsi_mhijos" value="Si" name="pmhijos" type="radio"  />
                                                           <label for="rdsi_mhijos"> Si</label><br>
                                                           <input type="radio" id="rdno_mhijos" value="No" name="pmhijos"  />
                                                           <label for="rdno_mhijos"> No</label><br>
                                                           <input type="radio" id="rdnose_mhijos" value="No se" name="pmhijos"  />
                                                           <label for="rdnose_mhijos"> No se</label>
                                                       </div>
                                                   </div>
                                               
                                               </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="col-md-12">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>4)Números de personas con las que Vive</label>
                                                   </div>
                                                   <div class="col-sm-12">
                                                       
                                                           <input type="checkbox" id="menosde4" class="filled-in" name="numvive" value="4 o menos" onchange="javascript:mostrarcontenido(this.id,menosdecuatro)"/>
                                                           <label for="menosde4">4 o menos</label><br>
                                                           <div class="col-md-12" id="menosdecuatro" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="txt_menosde4" >
                                                                       <label class="form-label">Especificar</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                          
                                                                <input type="checkbox" id="4a7" class="filled-in" name="numvive" value="De 4 a 7" />
                                                                <label for="4a7">De 4 a 7</label><br>
                                                                <input type="checkbox" id="masde7" class="filled-in" name="numvive" value="Mas de 7"/>
                                                                <label for="masde7">Mas de 7</label><br>
                                                                <input type="checkbox" id="compañerosdeportivo" class="filled-in" name="numvive" value="Con Compañeros en alojamiento deportivo"/>
                                                                <label for="compañerosdeportivo">Con Compañeros en alojamiento deportivo</label>
                                                           
                                                   </div>

                                               </div>
                                            </div>      

                                            <div class="row col-md-12">
                                                
                                                <div class="col-sm-6">
                                                    <h4 class="card-inside-title">Educacion y Formacion</h4>
                                                   <div class="col-md-12 ">
                                                       <label>1) Situacion Academica </label><br>
                                                       <span><small><strong>a.Estudia Actualmente</strong></small></span>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <input id="rdsi_Estudia" value="Si" name="Est" type="radio"  />
                                                           <label for="rdsi_Estudia"> Si</label><br>
                                                           <input type="radio" id="rdno_Estudia" value="No" name="Est"  />
                                                           <label for="rdno_Estudia"> No</label><br>
                                                           <input type="radio" id="rdnose_Estudia" value="Nunca ha estudiado" name="Est"  />
                                                           <label for="rdnose_Estudia"> Nunca ha estudiado</label>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <label>2) Ultimo nivel academico terminado</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                           <input id="primaria" value="Primaria" name="nivelaca" type="radio"  />
                                                           <label for="primaria"> Primaria</label><br>
                                                           <input type="radio" id="bachillerato" value="Bachillerato" name="nivelaca"  />
                                                           <label for="bachillerato"> Bachillerato</label><br>
                                                           <input type="radio" id="tecnico" value="Tecnico-Tecnologico" name="nivelaca"  />
                                                           <label for="tecnico">Tecnico-Tecnologico</label><br>
                                                           <input id="universitario" value="Universitario" name="nivelaca" type="radio"  />
                                                           <label for="universitario"> Universitario</label><br>
                                                           <input id="especializacion" value="Especializacion/Maestria" name="nivelaca"  type="radio" />
                                                           <label for="especializacion"> Especializacion/Maestria</label><br>
                                                          <div class="col-md-12" id="especializaciont" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="especializacion_maestria" >
                                                                       <label class="form-label">Especificar</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                           <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text"  class="form-control" name="txt_donde_Estudia" id="dndes" >
                                                                    <label class="form-label">¿Donde Estudia?</label>
                                                                </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <h4 class="card-inside-title">Lugar de habitacion</h4>
                                                       <div class="col-md-12">
                                                           <label>a)Cómo calificaría su barrio</label>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="form-group">
                                                               <input id="b" class="filled-in" value="Bueno" name="barrio" type="checkbox"  />
                                                               <label for="b"> Bueno</label><br>
                                                               <input type="checkbox" class="filled-in" id="r" value="Regular" name="barrio"  />
                                                               <label for="r"> Regular</label><br>
                                                               <input type="checkbox" class="filled-in" id="ba" value="Bajo" name="barrio"  />
                                                               <label for="ba">Bajo</label><br>
                                                               <input id="ha" value="Ha tenido abandonos frecuentes" class="filled-in" name="barrio" type="checkbox"  />
                                                               <label for="ha"> Ha tenido abandonos frecuentes</label><br>
                                                               <input id="ot" value="Otros" class="filled-in" name="barrio" type="checkbox" onchange="javascript:mostrarcontenido(this.id,otrosbarrios1)"/>
                                                               <label for="ot"> Otros</label><br>
                                                               <div class="col-md-12" id="otrosbarrios1" style="display:none;">
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                           <input type="text" class="form-control" name="txtotrosbarrios" >
                                                                           <label class="form-label">Especificar</label>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                   </div>

                                                        <div class="col-md-12">
                                                        <label>b)Como describiria el estado de la vivienda en que reside actualmente</label>
                                                        </div>
                                                       <div class="col-md-12">
                                                           <div class="form-group">
                                                               <input id="b1" value="Bueno" name="vivienda" type="radio"  />
                                                               <label for="b1"> Bueno</label><br>
                                                               <input type="radio" id="r2" value="Regular" name="vivienda"  />
                                                               <label for="r2"> Regular</label><br>
                                                               <input type="radio" id="ba1" value="Mal Estado" name="vivienda"  />
                                                               <label for="ba1">Mal Estado</label><br>
                                                           </div>
                                                       </div>
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <h4 class="card-inside-title">Habitos</h2>
                                           <div class="row col-md-12">
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>¿Usted Fuma?</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdsi_fuma" value="Si" name="fuma"/>
                                                               <label for="rdsi_fuma"> Si</label>
                                                               <div class="row col-md-12" id="si_cigarros" style="display:none;">
                                                                   <label style="font-size: small;"> Cuantos Cigarrillos al dia</label>
                                                               
                                                                   {{-- <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                            <input type="text"  class="form-control" name="si_fuma" >
                                                                           <label class="form-label">Especificar</label>
                                                                       </div>
                                                                   </div> --}}
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                           <input type="text" class="form-control" name="si_fuma" >
                                                                           <label class="form-label">Especificar</label>
                                                                       </div>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdno_fuma" value="No" name="fuma"  />
                                                               <label for="rdno_fuma"> No</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>¿Usted toma?</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdsi_toma" value="Si" name="toma"/>
                                                               <label for="rdsi_toma"> Si</label>
                                                               <div class="col-md-12" id="si_toma" style="display:none;">
                                                                   <div class="form-group form-float">
                                                                       <label> Cantidad semanal</label>
                                                                       <div class="form-line">
                                                                           <input type="text"  class="form-control" name="cerveza" >
                                                                           <label class="form-label">cervezas</label>
                                                                       </div>
                                                                   </div>
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                           <input type="text"  class="form-control" name="licor" >
                                                                           <label class="form-label">licor</label>
                                                                       </div>
                                                                   </div>

                                                               </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdno_toma" value="No" name="toma"  />
                                                               <label for="rdno_toma"> No</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                              <div class="col-md-4">

                                              </div>
                                              <div class="col-md-4">
                                                <div class="btn-group" role="group">
                                                    <button type="reset"  class="btn btn-danger btn-rounded"><i class="fa fa-times"></i> Cancelar</button>
                                                    <button type="submit"  class="btn btn-primary btn-rounded"><i class="fa fa-save"></i> Guardar</button>
                                                </div>
                                              </div>
                                              <div class="col-md-4">

                                              </div>

                                            </div>
                                    </fieldset>
                            </div>
                            
                            {{-- tab 6 --}}
                            {{-- <div class="tab-pane  p-20" id="tab6" role="tabpanel">
                             <div class="row col-md-12">
                                       <fieldset>
                                          <h4 class="card-inside-title">Informacion Familiar</h4>
                                           
                                               <div class="row col-sm-12">
                                                   
                                                  
                                                   <div class="col-sm-6">

                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="Hijos" class="filled-in" name="vive[]" value="Hijos" onchange="javascript:mostrarcontenido(this.id,hijo)"/>
                                                           <label for="Hijos">Hijos</label>
                                                           <div class="col-md-12" id="hijo" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="txt_cHijos" >
                                                                       <label class="form-label">Cuantos hijos</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="aldep" class="filled-in" name="vive[]" value="Alojamiento Deportivo"/>
                                                           <label for="aldep">Alojamiento Deportivo</label>

                                                       </div>
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="otrossfamiliares" class="filled-in" name="vive[]" value="Otros Familiares" onchange="javascript:mostrarcontenido(this.id,otrosfamiliare)"/>
                                                           <label for="otrossfamiliares">Otros Familiares</label>
                                                           <div class="col-md-12" id="otrosfamiliare" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="txt_Qfamiliar" >
                                                                       <label class="form-label">Que familiaress</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="Otros_info" class="filled-in" name="vive[]" value="Otros" onchange="javascript:mostrarcontenido(this.id,otros_a)"/>
                                                           <label for="Otros_info">Otros</label>
                                                           <div class="col-md-12" id="otros_a" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="txt_Qotros" >
                                                                       <label class="form-label">Que Otros</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>

                                                   </div>
                                               </div>
                                               <div class="row col-md-12">
                                                   <div class="col-md-4">
                                                       <div class="col-md-12 m-b-20">
                                                            <div class="form-group">
                                                                <label>¿Tiene Hijos?</label>
                                                            </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <input id="rdsi_hijos" value="si" name="btnhijos" type="radio"  />
                                                           <label for="rdsi_hijos"> Si</label>
                                                           <input type="radio" id="rdno_hijos" value="no" name="btnhijos"  />
                                                           <label for="rdno_hijos"> No</label>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>¿Proyecta Tener Hijos?</label>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <div class="form-group">
                                                           <input id="rdsi_mhijos" value="Si" name="pmhijos" type="radio"  />
                                                           <label for="rdsi_mhijos"> Si</label><br>
                                                           <input type="radio" id="rdno_mhijos" value="No" name="pmhijos"  />
                                                           <label for="rdno_mhijos"> No</label><br>
                                                           <input type="radio" id="rdnose_mhijos" value="No se" name="pmhijos"  />
                                                           <label for="rdnose_mhijos"> No se</label>
                                                       </div>
                                                   </div>
                                               </div>
                                               </div>
                                               <div class="col-md-12">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>Numero de personas con las que Vive</label>
                                                   </div>
                                                   <div class="col-sm-6">
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="menosde4" class="filled-in" name="numvive" value="4 o menos" onchange="javascript:mostrarcontenido(this.id,menosdecuatro2)"/>
                                                           <label for="menosde4">4 o menos</label>
                                                           <div class="col-md-12" id="menosdecuatro2" style="display:none;">
                                                               <div class="form-group form-float">
                                                                   <div class="form-line">
                                                                       <input type="text"  class="form-control" name="txtmenosde4" >
                                                                       <label class="form-label">especificar</label>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="4a7" class="filled-in" name="numvive" value="De 4 a 7" />
                                                           <label for="4a7">De 4 a 7</label>
                                                       </div>
                                                       <div class="col-md-12">

                                                           <input type="checkbox" id="masde7" class="filled-in" name="numvive" value="Mas de 7"/>
                                                           <label for="masde7">Mas de 7</label>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <input type="checkbox" id="compañerosdeportivo" class="filled-in" name="numvive" value="Con Compañeros en alojamiento deportivo"/>
                                                           <label for="compañerosdeportivo">Con Compañeros en alojamiento deportivo</label>
                                                       </div>
                                                   </div>

                                               </div>
                                           <h4 class="card-inside-title">Educacion y formacion</h4>
                                           <div class="row clearfix">
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>Estudia Actualmente</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <input id="rdsi_Estudia" value="Si" name="Est" type="radio"  />
                                                           <label for="rdsi_Estudia"> Si</label><br>
                                                           <input type="radio" id="rdno_Estudia" value="No" name="Est"  />
                                                           <label for="rdno_Estudia"> No</label><br>
                                                           <input type="radio" id="rdnose_Estudia" value="Nunca ha estudiado" name="Est"  />
                                                           <label for="rdnose_Estudia"> Nunca ha estudiado</label>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>Ultimo nivel academico terminado</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <input id="primaria" value="Primaria" name="nivelaca" type="radio"  />
                                                           <label for="primaria"> Primaria</label><br>
                                                           <input type="radio" id="bachillerato" value="Bachillerato" name="nivelaca"  />
                                                           <label for="bachillerato"> Bachillerato</label><br>
                                                           <input type="radio" id="tecnico" value="Tecnico-Tecnologico" name="nivelaca"  />
                                                           <label for="tecnico">Tecnico-Tecnologico</label><br>
                                                           <input id="universitario" value="Universitario" name="nivelaca" type="radio"  />
                                                           <label for="universitario"> Universitario</label><br>
                                                           <input id="especializacion" value="Especializacion/Maestria" name="nivelaca" type="radio"  />
                                                           <label for="especializacion"> Especializacion/Maestria</label><br>
                                                       </div> 
                                                       <div class="col-md-12">
                                                           <div class="form-group from-label">
                                                                   <input type="text"  class="form-control" name="txt_donde_Estudia" id="dndes" >
                                                                   <label class="form-label">Donde Estudia</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <h4 class="card-inside-title m-b-20">Lugar de habitacion</h4>
                                               <div class="row col-md-12">
                                                   
                                                   <div class="col-md-4">
                                                       <div class="col-md-12 m-b-40">
                                                           <label>Como calificaria su barrio</label>
                                                       </div>
                                                       <div class="col-md-12 m-t-20">
                                                           <div class="form-group">
                                                               <input id="b" class="filled-in" value="Bueno" name="barrio" type="checkbox"  />
                                                               <label for="b"> Bueno</label><br>
                                                               <input type="checkbox" class="filled-in" id="r" value="Regular" name="barrio"  />
                                                               <label for="r"> Regular</label><br>
                                                               <input type="checkbox" class="filled-in" id="ba" value="Bajo" name="barrio"  />
                                                               <label for="ba">Bajo</label><br>
                                                               <input id="ha" value="Ha tenido abandonos frecuentes" class="filled-in" name="barrio" type="checkbox"  />
                                                               <label for="ha"> Ha tenido abandonos frecuentes</label><br>
                                                               <input id="ot" value="Otros" class="filled-in" name="barrio" type="checkbox" onchange="javascript:mostrarcontenido(this.id,otrosbarrios)"/>
                                                               <label for="ot"> Otros</label><br>
                                                               <div class="col-md-12" id="otrosbarrios" style="display:none;">
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                           <input type="text" id="otb" class="form-control" name="txtotrosbarrios" >
                                                                           <span class="bar"></span>
                                                                           <label for="otb">especificar</label>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-8">
                                                       <div class="col-md-12 m-b-20">
                                                           <label>Como describiria el estado de la vivienda en que reside actualmente</label>
                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="form-group">
                                                               <input id="b1" value="Bueno" name="vivienda" type="radio"  />
                                                               <label for="b1"> Bueno</label><br>
                                                               <input type="radio" id="r2" value="Regular" name="vivienda"  />
                                                               <label for="r2"> Regular</label><br>
                                                               <input type="radio" id="ba1" value="Mal Estado" name="vivienda"  />
                                                               <label for="ba1">Mal Estado</label><br>

                                                           </div>

                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <h4 class="card-inside-title">Habitos</h2>
                                           <div class="row col-md-12">
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>¿Usted Fuma?</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdsi_fuma" value="Si" name="fuma"/>
                                                               <label for="rdsi_fuma"> Si</label>
                                                               <div class="row col-md-12" id="si_cigarros" style="display:none;">
                                                                <div class="col-md-12 m-b-40">
                                                                   <label style="font-size: small;"> Cuantos Cigarrillos al dia</label></div>
                                                                   <div class="col-sm-12"></div>
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                            <input type="text" id="fumon"  class="form-control" name="si_fuma" >
                                                                           <label class="form-label">especificar</label>
                                                                       </div>
                                                                   </div>
                                                                   
                                                               </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdno_fuma" value="No" name="fuma"  />
                                                               <label for="rdno_fuma"> No</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="col-md-12 m-b-20">
                                                       <label>¿Usted toma?</label>
                                                   </div>
                                                   <div class="col-md-12">
                                                       <div class="form-group">
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdsi_toma" value="Si" name="toma"/>
                                                               <label for="rdsi_toma"> Si</label>
                                                               <div class="col-md-12" id="si_toma" style="display:none;">
                                                                   <div class="form-group form-float">
                                                                       <label> Cantidad semanal</label>
                                                                       <div class="form-line">
                                                                           <input type="text"  class="form-control" name="cerveza" >
                                                                           <label class="form-label">cervezas</label>
                                                                       </div>
                                                                   </div>
                                                                   <div class="form-group form-float">
                                                                       <div class="form-line">
                                                                           <input type="text"  class="form-control" name="licor" >
                                                                           <label class="form-label">licor</label>
                                                                       </div>
                                                                   </div>

                                                               </div>
                                                           </div>
                                                           <div class="col-md-12">
                                                               <input type="radio" id="rdno_toma" value="No" name="toma"  />
                                                               <label for="rdno_toma"> No</label>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="row col-md-12">
                                              <div class="col-md-4">

                                              </div>
                                              <div class="col-md-4">
                                                <div class="btn-group" role="group">
                                                    <button type="reset"  class="btn btn-danger btn-rounded"><i class="fa fa-times"></i> Cancelar</button>
                                                    <button type="submit"  class="btn btn-primary btn-rounded"><i class="fa fa-save"></i> Guardar</button>
                                                </div>
                                              </div>
                                              <div class="col-md-4">

                                              </div>

                                            </div>
                                       </fieldset>
                                    </div>
                            </div> --}}
                           
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
{{-- muestra el div de alergias --}}
 <script>
        $(document).ready(function(){
            $("#rdno").click(function(){
                $("#alergico").hide();
            });
            $("#rdsi").click(function(){
                $("#alergico").show();
            });
        });
 </script>
 <script type="text/javascript">
    function mostrarcontenido(idbtn,idcontenido) {
        element = document.getElementById(idcontenido.id);
        check = document.getElementById(idbtn);
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script>
        $(document).ready(function(){
            $("#rdno_preg_I").click(function(){
                $("#anexopreg_I").hide();
            });
            $("#rdsi_preg_I").click(function(){
                $("#anexopreg_I").show();
            });
        });

         $(document).ready(function(){
            $("#btn_otro_no").click(function(){
                $("#otros_Historial_medico").hide();
            });
            $("#btn_otro_si").click(function(){
                $("#otros_Historial_medico").show();
            });
        });
</script>
    <script>
        $(document).ready(function(){
           $("#especializacion").click(function(){
                $("#especializaciont").show();
            });
            $("#primaria").click(function(){
                $("#especializaciont").hide();
            });
            $("#bachillerato").click(function(){
                $("#especializaciont").hide();
            });
            $("#tecnico").click(function(){
                $("#especializaciont").hide();
            });
            $("#universitario").click(function(){
                $("#especializaciont").hide();
            });
        });
    </script>
<script>
    $(function(){
        $('#addMore').on('click', function() {
            var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
            data.find("input").val('');
        });
        $(document).on('click', '.remove', function() {
            var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
                $(this).closest("tr").remove();
            } else {
                alert("lo siento no se puede eliminar la primera fila ");
            }
        });
    });
</script>
<script>
        $(document).ready(function(){
            $("#rdno_fuma").click(function(){
                $("#si_cigarros").hide();
            });
            $("#rdsi_fuma").click(function(){
                $("#si_cigarros").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#rdno_toma").click(function(){
                $("#si_toma").hide();
            });
            $("#rdsi_toma").click(function(){
                $("#si_toma").show();
            });
        });
    </script>
<script>
    $(document).ready(function(){
        $("#btn_actividades_Si").click(function(){
            $("#medipor").hide();
            $("#no_porque").hide();
        });
        $("#btn_medianamente").click(function(){
            $("#medipor").show();
            $("#no_porque").hide();
        });
        $("#btn_actividades_No").click(function(){
            $("#no_porque").show();
            $("#medipor").hide();
        });
    });
</script>
<script>
        $(function(){
            $('#addMore2').on('click', function() {
                var data = $("#tb2 tr:eq(1)").clone(true).appendTo("#tb2");
                data.find("input").val('');
            });
            $(document).on('click', '.remove2', function() {
                var trIndex2 = $(this).closest("tr").index();
                if(trIndex2>1) {
                    $(this).closest("tr").remove();
                } else {
                    alert("lo siento no se puede eliminar la primera fila ");
                }
            });
        });
    </script>
@endsection




