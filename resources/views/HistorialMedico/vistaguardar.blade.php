asdasdkshakdjhsajkdhsjahdklsahkjh
@section('contenido')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                {{--  <div class="header">
                    <h2>CUESTIONARIO MEDICO DE {{$nombre}}sdasdsadsadas s</h2>
                </div>  --}}
                <div class="body">
                    <form role="form" action="{{url('/CuestionarioMedico')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div style="display:none;">
                            {{-- <input type="text"  value="{{$atleta_id}}" class="form-control" name="txt_atleta" > --}}

                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active" ><a href="#tab1" data-toggle="tab"><i class="material-icons">local_hospital</i>Alergias</a></li>
                                    <li><a href="#tab2" data-toggle="tab"><i class="material-icons">help</i>Preguntas</a></li>
                                    <li><a href="#tab3" data-toggle="tab"><i class="material-icons">directions_run</i>Carrera Deportiva</a></li>
                                    <li><a href="#tab4" data-toggle="tab"><i class="material-icons">work</i> Info.laboral/economica</a></li>
                                    <li><a href="#tab5" data-toggle="tab"><i class="material-icons">accessibility</i>Informacion Extra</a></li>
                                    <li><a href="#tab6" data-toggle="tab"><i class="material-icons">work</i>HIS. FAMILIAR</a></li>
                                </ul>
                            </div>
                        </div>
                      <div class="row clearfix">
                          <div class="col md 12">
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="tab1">
                                      {{--CONTENIDO--}}
                                      <div class="col-md-12">
                                          <fieldset>
                                              <div class="col-md-12">
                                                  <label for="">Por favor indique todos los medicamentos con o sin receta medica y suplementos <small>(hierbas nutricionales) </small> que esta tomando Actualmente</label>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="col-md-2">
                                                      <input type="checkbox" id="btnrelajantes" value="Relajante Musculares" name="btnrelajantes" onchange="javascript:mostrarcontenido(this.id,txtrelajante)"  />
                                                      <label for="btnrelajantes">Relajante Muscular</label>
                                                  </div>
                                                  <div class="col-md-8" id="txtrelajante" style="display:none;">
                                                      <div class="form-group form-float">
                                                          <div class="form-line">
                                                              <input type="text"  class="form-control" name="txt_medicamentos" >
                                                              <span class="bar"></span>
                                                              <label class="form-label">Que Relajantes Musculares</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="col-md-2">
                                                      <input type="checkbox" id="btnantiinflamatorio" name="antiflamatorio" value="Antiinflamatorios" onchange="javascript:mostrarcontenido(this.id,txtantiinflamatorios)" />
                                                      <label for="btnantiinflamatorio">Antiinflamatorios</label>
                                                  </div>
                                                  <div class="col-md-8" id="txtantiinflamatorios" style="display:none;">
                                                      <div class="form-group form-float">
                                                          <div class="form-line">
                                                              <input type="text" class="form-control" name="txt_antiinflamatorios" >
                                                              <label class="form-label"> Que Medicamentos Antiinflamatorios</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              {{-- <div class="col-md-12">
                                                  <div class="col-md-2">
                                                      <input type="checkbox" id="btnanalgesico" name="analgesico" value="Analgesicos"  onchange="javascript:mostrarcontenido(this.id,txtanalgesico)"/>
                                                      <label for="btnanalgesico">Analgesico</label>
                                                  </div>
                                                  <div class="col-md-8" id="txtanalgesico" style="display:none;">
                                                      <div class="form-group form-float">
                                                          <div class="form-line">
                                                              <input type="text" class="form-control" name="txt_analgesicos" >
                                                              <label class="form-label">Que Medicamentos Analgesicos</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div> --}}
                                              {{-- <div class="col-md-12">
                                                  <div class="col-md-2">
                                                      <input type="checkbox" id="btnotros" name="btn_otros" value="Otros Medicamentos" onchange="javascript:mostrarcontenido(this.id,txtotros)" />
                                                      <label for="btnotros">Otros</label>
                                                  </div>
                                                  <div class="col-md-8" id="txtotros" style="display:none;">
                                                      <div class="form-group form-float">
                                                          <div class="form-line">
                                                              <input type="text" class="form-control" name="txt_medicamentos_otros" >
                                                              <label class="form-label">Otros Medicamentos</label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div> --}}
                                              <div class="col-md-12">
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
                                                                  <input type="text" class="form-control" name="txt_medicamentos_alergicos" >
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
                                                                  <input type="text" class="form-control" name="txt_alergia_polen" >
                                                                  <label class="form-label">Que flores te causan alergias</label>
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
                                                                  <input type="text" class="form-control" name="txtalergiacomida" >
                                                                  <label class="form-label">Aque comida eres alergico</label>
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
                                                                  <input type="text" class="form-control" name="txtpiquete" >
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
                                                                  <input type="text" class="form-control" name="txt_otra_alergia" >
                                                                  <label class="form-label">A que otras cosas eres alergico</label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </fieldset>
                                      </div>
                                    <div class="col-md-12">

                                          <button type="button" class="btn bg-teal waves-effect btnNext">

                                              <span>SIGUIENTE</span>
                                              <i class="material-icons">arrow_forward</i>
                                          </button>

                                    </div>
                                  </div>
                                <div class="tab-pane fade" id="tab2">
                                  {{--CONTENIDO--}}
                                    <div class="col-md-12">
                                        <fieldset>

                                    <h2 class="card-inside-title">Historial Medico</h2>
                                      <div class="row clearfix">
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label>A) ¿Alguna vez un doctor te ha prohibido limitado tu participacion en deportes por alguna razon?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_A" value="Si" name="pregunta_A" type="radio"  />
                                                      <label for="rdsi_preg_A"> Si</label>
                                                      <input type="radio" id="rdno_preg_A" value="No" name="pregunta_A"  />
                                                      <label for="rdno_preg_A"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label >B)¿Has sido ingresado alguna vez en el hospital?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_B" value="si" name="pregunta_B" type="radio"  />
                                                      <label for="rdsi_preg_B"> Si</label>
                                                      <input type="radio" id="rdno_preg_B" value="no" name="pregunta_B"  />
                                                      <label for="rdno_preg_B"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">C)¿Has tenido cirugia alguna vez?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_C" value="si" name="pregunta_C" type="radio"  />
                                                      <label for="rdsi_preg_C"> Si</label>
                                                      <input type="radio" id="rdno_preg_C" value="no" name="pregunta_C"  />
                                                      <label for="rdno_preg_C"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">D) ¿Usas lentes o lentes de contacto?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_D" value="si" name="pregunta_D" type="radio"  />
                                                      <label for="rdsi_preg_D"> Si</label>
                                                      <input type="radio" id="rdno_preg_D" value="no" name="pregunta_D"  />
                                                      <label for="rdno_preg_D"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">E) ¿Nascite o te falta un riñon,un ojo,untesticulo u algun otro órgano?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_E" value="si" name="pregunta_E" type="radio"  />
                                                      <label for="rdsi_preg_E"> Si</label>
                                                      <input type="radio" id="rdno_preg_E" value="no" name="pregunta_E"  />
                                                      <label for="rdno_preg_E"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">F) ¿Te has desmayado durante o despues de hacer ejercicios?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_F" value="si" name="pregunta_F" type="radio"  />
                                                      <label for="rdsi_preg_F"> Si</label>
                                                      <input type="radio" id="rdno_preg_F" value="no" name="pregunta_F"  />
                                                      <label for="rdno_preg_F"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">G) ¿Has tenido alguna vez molestias dolor o presion en el pecho cuando haces ejercicios?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_G" value="si" name="pregunta_G" type="radio"  />
                                                      <label for="rdsi_preg_G"> Si</label>
                                                      <input type="radio" id="rdno_preg_G" value="no" name="pregunta_G"  />
                                                      <label for="rdno_preg_G"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">H) ¿Alguna vez has tenido palpitaciones o latidos irregulares cuando haces ejercicios?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_H" value="si" name="pregunta_H" type="radio"  />
                                                      <label for="rdsi_preg_H"> Si</label>
                                                      <input type="radio" id="rdno_preg_H" value="no" name="pregunta_H"  />
                                                      <label for="rdno_preg_H"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">I) ¿Te ha dicho un doctor que tienes un problema del corazon?</label>

                                              </div>
                                              <div class="col-md-2">
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
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">J) ¿Alguna vez un doctor te ha pedido que te hagas una prueba del corazon¿Ej:Electrocardiograma?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_J" value="Si" name="pregunta_J" type="radio"  />
                                                      <label for="rdsi_preg_J"> Si</label>
                                                      <input type="radio" id="rdno_preg_J" value="No" name="pregunta_J"  />
                                                      <label for="rdno_preg_J"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">K) ¿Te sientes mareado o te falta el aire mas de lo esperado cuando haces ejercicios?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_K" value="si" name="pregunta_K" type="radio"  />
                                                      <label for="rdsi_preg_K"> Si</label>
                                                      <input type="radio" id="rdno_preg_K" value="no" name="pregunta_K"  />
                                                      <label for="rdno_preg_K"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="col-md-10">
                                                  <label for="">L) ¿Has tenido una convulsion inexplicable?</label>

                                              </div>
                                              <div class="col-md-2">
                                                  <div class="form-group">

                                                      <input id="rdsi_preg_L" value="si" name="pregunta_L" type="radio"  />
                                                      <label for="rdsi_preg_L"> Si</label>
                                                      <input type="radio" id="rdno_preg_L" value="no" name="pregunta_L"  />
                                                      <label for="rdno_preg_L"> No</label>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                            <h2 class="card-inside-title">Historial Familiar</h2>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Has tenido algun familiar que haya fallecido a causa de problemas de corazon, o bien que haya fallecido de forma inexplicable antes de los 50 años?</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input id="rdsi_pregunta_fam1" value="si" name="pregunta_fam_1" type="radio"  />
                                                            <label for="rdsi_pregunta_fam1"> Si</label>
                                                            <input type="radio" id="rdno_pregunta_fam1" value="no" name="pregunta_fam_1"  />
                                                            <label for="rdno_pregunta_fam1"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Alguien de tu familia tiene problemas del corazon, un marcapaso o un desfibrilador en su corazon?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_2" value="si" name="pregunta_fam_2" type="radio"  />
                                                            <label for="rdsi_preg_fam_2"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_2" value="no" name="pregunta_fam_2"  />
                                                            <label for="rdno_preg_fam_2"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿Ha sufridoalgun familiar un desmayo inexplicable o convulsiones?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_3" value="si" name="pregunta_fam_3" type="radio"  />
                                                            <label for="rdsi_preg_fam_3"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_3" value="no" name="pregunta_fam_3"  />
                                                            <label for="rdno_preg_fam_3"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿alguien de su familia padece de Diabetes?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_4" value="si" name="pregunta_fam_4" type="radio"  />
                                                            <label for="rdsi_preg_fam_4"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_4" value="no" name="pregunta_fam_4"  />
                                                            <label for="rdno_preg_fam_4"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-10">
                                                        <label for="">¿alguien de su familia padece de asma?</label>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">

                                                            <input id="rdsi_preg_fam_5" value="si" name="pregunta_fam_5" type="radio"  />
                                                            <label for="rdsi_preg_fam_5"> Si</label>
                                                            <input type="radio" id="rdno_preg_fam_5" value="no" name="pregunta_fam_5"  />
                                                            <label for="rdno_preg_fam_5"> No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title">Aparato locomotor</h2>
                                            <div class="row clearfix">
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
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
                                                <div class="col-md-12">
                                                    <div class="col-md-12">

                                                        <label class="form-label">Cirugias(especifique que tipo de cirugias y cuando fue realizada)</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group form-float">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="cirugias" >
                                                                <label class="form-label">cirugias</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
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

                                  </fieldset>
                                    </div>

                                      <div class="col-md-12">
                                          <button type="button" class="btn bg-cyan waves-effect btnPrevious">
                                              <i class="material-icons">arrow_back</i>
                                              <span>ANTERIOR</span>
                                          </button>

                                          <button type="button" class="btn bg-teal waves-effect btnNext">

                                              <span>SIGUIENTE</span>
                                              <i class="material-icons">arrow_forward</i>
                                          </button>
                                      </div>

                              </div>
                                <div class="tab-pane fade " id="tab3">
                                    {{-- CONTENIDO--}}
                                    <div class="col-md-12">
                                        <fieldset>
                                            <h2 class="card-inside-title">Carrera Deportiva</h2>
                                            <div class="row clearfix">
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <label for="">Cuanto Tiempo lleva Compitiendo</label>

                                                    </div>
                                                    <div class="col-md-8">
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
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="col-md-12">
                                                            <label for="">Antecedentes Deportivos: a continuacion, mencione sus logros y medallas mas importantes en competencias como seleccionado (a) o en eventos olimpicos</label>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <table  class="table table-hover small-text" id="tb">

                                                                <tr class="tr-header">
                                                                    <th> Categoria/Prueba </th>
                                                                    <th> Resultado/Marca </th>
                                                                    <th> Fecha y Lugar </th>
                                                                    <th> Evento  </th>
                                                                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
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
                                                                    <td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="col-md-12">
                                                            <label for="">Espeifique si algun familiar ha participado en eventos deportivos de alto rendimiento o de seleccion nacional.</label>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <table  class="table table-hover small-text" id="tb2">

                                                                <tr class="tr-header">
                                                                    <th> Evento  </th>
                                                                    <th> Resultado obtenido </th>
                                                                    <th> Fecha y Lugar </th>
                                                                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore2" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
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
                                                                    <td><a href='javascript:void(0);'  class='remove2'><span class='glyphicon glyphicon-remove'></span></a></td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title"> Entrenamientos</h2>
                                            <div class="row clearfix">
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12">
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
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-float ">
                                                                        <div class="form-line">
                                                                            <input type="text" id="pnombre" style="text-transform: capitalize;" class="form-control" name="pnombre" value="{{old('pnombre')}}">
                                                                            <label class="form-label">Primer Nombre</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-float">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="sesiones" >
                                                                            <label class="form-label">Núm de sesiones /semana</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12">
                                                            <label for="">Horas de entrenamiento por sesion</label>

                                                        </div>
                                                        <div class="col-md-6">
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
                                                        <div class="col-md-12">
                                                            <label for="">Modalidad de entrenamiento</label>

                                                        </div>
                                                        <div class="col-md-8">
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
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12">
                                                            <label for="">Cuento con un plan de entrenamiento que:</label>

                                                        </div>
                                                        <div class="col-md-8">
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
                                                    <div class="col-sm-4">
                                                        <div class="col-md-12">
                                                            <label for="">sus actividades se adaptan a sus horararios y sesiones de entrenamiento</label>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="form-group ">

                                                                <input id="btn_actividades_Si" value="Si" name="acti" type="radio"  />
                                                                <label for="btn_actividades_Si">Si</label><br>
                                                                <input type="radio" id="btn_medianamente" value="Medianamente" name="acti"  />
                                                                <label for="btn_medianamente">Medianamente</label><br>
                                                                <div id="medipor" style="display:none;">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="mediporque" >
                                                                                <label class="form-label">porque</label>
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
                                                                                <input type="text" class="form-control" name="no_porque" >
                                                                                <label class="form-label">porque</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="">Su sitio de entrenamiento es:</label>

                                                </div>
                                                <div class="col-md-12">

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
                                                                <input type="text" class="form-control" name="inadec" >
                                                                <label class="form-label">por que es inadecuado</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="button" class="btn bg-cyan waves-effect btnPrevious">
                                            <i class="material-icons">arrow_back</i>
                                            <span>ANTERIOR</span>
                                        </button>
                                        {{--<button type="button" class="btn bg-orange waves-effect btnPrevious"></button>--}}
                                        <button type="button" class="btn bg-teal waves-effect btnNext">

                                            <span>SIGUIENTE</span>
                                            <i class="material-icons">arrow_forward</i>
                                        </button>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <div class="col-md-12">
                                        <fieldset>
                                            <h2 class="card-inside-title">Situacion Laboral</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <div class="col-md-12">
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
                                                <div class="col-sm-4">
                                                    <div class="col-md-12">
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
                                                <div class="col-sm-12">
                                                    <div class="col-md-12">
                                                        <label>las necesidades economicas del atleta para su practica deportiva son asumidas por:</label>
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
                                                                        <label class="form-label">Que Familiares</label>
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
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text"  class="form-control" name="txt_otrospersonas" >
                                                                        <label class="form-label">Que personas</label>
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
                                                                <div class="form-group form-float">
                                                                    <div class="form-line">
                                                                        <input type="text"  class="form-control" name="txt_otrosapoyos" >
                                                                        <label class="form-label">especificar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="col-md-12">
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
                                                    <div class="col-md-12">
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

                                    <div class="col-md-12">
                                        <button type="button" class="btn bg-cyan waves-effect btnPrevious">
                                            <i class="material-icons">arrow_back</i>
                                            <span>ANTERIOR</span>
                                        </button>
                                        <button type="button" class="btn bg-teal waves-effect btnNext">

                                            <span>SIGUIENTE</span>
                                            <i class="material-icons">arrow_forward</i>
                                        </button>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab5">
                                  {{--CONTENIDO--}}
                                    

                                   <div class="col-md-12">
                                       <button type="button" class="btn bg-cyan waves-effect btnPrevious">
                                           <i class="material-icons">arrow_back</i>
                                           <span>ANTERIOR</span>
                                       </button>
                                       <button type="submit" class="btn bg-green waves-effect">
                                           <i class="material-icons">save</i>
                                           <span>GUARDAR</span>
                                       </button>

                                  </div>

                              </div>
                                <div class="tab-pane fade"id="tab6" >
                                    {{--CONTENIDO--}}
                                    <fieldset>

                                    </fieldset>
                                    <div class="col-md-12">
                                        <button type="button" class="btn bg-cyan waves-effect btnPrevious">
                                            <i class="material-icons">arrow_back</i>
                                            <span>ANTERIOR</span>
                                        </button>

                                        <button type="button" class="btn bg-teal waves-effect btnNext">

                                            <span>SIGUIENTE</span>
                                            <i class="material-icons">arrow_forward</i>
                                        </button>
                                    </div>
                                </div>


                          </div>
                          </div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

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


@section('scriptbody')

    <!-- Jquery Core Js -->
    <script src="../todo/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/todo/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../todo/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../todo/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../todo/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../todo/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../todo/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../todo/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../todo/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../todo/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../todo/js/admin.js"></script>
    <!-- Demo Js -->
    <script src="../todo/js/demo.js"></script>

    <script>
        $('.btnNext').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

        $('.btnPrevious').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
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
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });
    </script>

@endsection



@section('scripts1')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap Core Css -->
    <link href="../todo/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../todo/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../todo/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../todo/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../todo/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../todo/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../todo/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../todo/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../todo/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../todo/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../todo/css/style.css" rel="stylesheet">

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
    <script>
        $(document).ready(function(){
            $("#rdno_preg_I").click(function(){
                $("#anexopreg_I").hide();
            });
            $("#rdsi_preg_I").click(function(){
                $("#anexopreg_I").show();
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
@endsection