@extends('layouts.admin')
@section('scriptbody')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
        $(window).load(function(){

            $(function() {
                $('#fotografia').change(function(e) {
                    addImage(e);
                });

                function addImage(e){
                    var file = e.target.files[0],
                        imageType = /image.*/;

                    if (!file.type.match(imageType))
                        return;

                    var reader = new FileReader();
                    reader.onload = fileOnload;
                    reader.readAsDataURL(file);
                }

                function fileOnload(e) {
                    var result=e.target.result;
                    $('#preview ').attr("src",result);
                }
            });
        });
    </script>



    <script type="text/javascript">
        $(document).ready(function(){
            $('.nav-tabs a').on('shown.bs.tab', function(event){
                var x = $(event.target).text();         // active tab
                if(x=="DEPORTE Y CATEGORIAS"){
                     var color = "blue";
                    $('#mdModal .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
                    $('#mdModal').modal('show');
                }
            });
        });
    </script>
<script>
        $(document).ready(function(){
            $("#radio14").click(function(){
                $("#dvembarazo").hide();
            });
            $("#radio15").click(function(){
                $("#dvembarazo").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#radio16").click(function(){
                $("#hosp").hide();
            });
            $("#radio17").click(function(){
                $("#hosp").show();
            });
        });
    </script>
    <script>
        $('.btnNext').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

        $('.btnPrevious').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
        });
    </script>
    <script>
        function copiarcontenido() {
            var x1 = document.getElementById("pnombre");
            var x2 = document.getElementById("pape");
            var correo = document.getElementById("correoelec");
           var correousu=document.getElementById('correodeusuario');
            var nomusu=document.getElementById("nombreusu");
             correousu.value=correo.value;
               if(nomusu==""){
                     nomusu.value=x1.value;
                }
                else{
                /*var nomb1=nomusu.value;*/
                    nomusu.value=x1.value.concat(" "+x2.value);
                    nomusu.value=nomusu.value.concat(x.value);
                }


        }
    </script>

@endsection
@section('content')
  <div class="block-header">
      @if (count($errors)>0)
          <div class="alert bg-red">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
          </div>
      @endif
  </div>
  <!-- Advanced Form Example With Validation -->
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>REGISTRO DE ATLETAS</h2>
              </div>
              <div class="body">
                  <form role="form" action="{{url('/atleta')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
                      {{csrf_field()}}

                      <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">DATOS GENERALES</a></li>
                          <li><a href="#tab2" data-toggle="tab">DIRECCION Y CORREO</a></li>
                          <li><a href="#tab3" data-toggle="tab">DEPORTE Y CATEGORIAS</a></li>
                          <li><a href="#tab4" data-toggle="tab">DATOS FAMILIARES</a></li>
                          <li><a href="#tab5" data-toggle="tab">DATOS LOGIN</a></li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tab1">

                              <fieldset>
                                     <div class="row clearfix col-md-3">
                                         <div class="col-md-12">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <img id="preview" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"  width="150px" height="150px" />
                                                     <br>
                                                     <label>Seleccione una foto</label>
                                                     <input class="form-control" name="foto" id="fotografia" type="file"/>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row-clearfix col-md-8">
                                         <div class="col-md-3">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" id="pnombre" class="form-control" name="pnombre" value="{{old('pnombre')}}"  onblur="copiarcontenido()" required>
                                                     <label class="form-label">Primer Nombre</label>
                                                 </div>
                                             </div>

                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" class="form-control" name="snombre" value="{{old('snombre')}}">
                                                     <label class="form-label">Segundo Nombre</label>
                                                 </div>


                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" id="pape" class="form-control" name="papellido" required value="{{old('papellido')}}" required onblur="copiarcontenido()">
                                                     <label class="form-label">Primer Apellido</label>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" class="form-control" name="sapellido" value="{{old('sapellido')}}">
                                                     <label class="form-label">Segundo Apellido</label>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" class="form-control" name="edad" required value="{{old('edad')}}">
                                                     <label class="form-label">Edad</label>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group form-float">
                                                 <div class="form-line">
                                                     <input type="text" class="form-control" name="numcedula" required value="{{old('numcedula')}}">
                                                     <label class="form-label">Numero de Cedula</label>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="row clearfix">
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <label>Genero</label>
                                                 <input id="radio14" value="Masculino" name="genero" type="radio" required  />
                                                 <label for="radio14"> Masculino</label>
                                                 <input type="radio" id="radio15" value="Femenino" name="genero"  />
                                                 <label for="radio15"> Femenino</label>
                                             </div>
                                         </div>

                                         <div class="col-md-2" id="dvembarazo" style="display:none;">
                                             <div class="form-group">
                                                 <label>¿Esta embarazada?</label>
                                                 <br>
                                                 <input type="radio" id="radio141" value="no" name="embarazo" >
                                                 <label for="radio141">No</label>
                                                 <input type="radio" id="radio151" value="si" name="embarazo">
                                                 <label for="radio151">Si</label>
                                             </div>
                                         </div>
                                     </div>
                              </fieldset>
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                              </div>
                          </div>
                          <div class="tab-pane" id="tab2">

                              <fieldset>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="email" id="correoelec" class="form-control" name="correoe" onblur="copiarcontenido()">
                                                    <label class="form-label">Correo Electronico</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="tel" class="form-control" name="tcelular">
                                                    <label class="form-label">Telefono Celular</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="tconvencional">
                                                    <label class="form-label">Telefono Convencional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="direccion">
                                                    <label class="form-label">Direccion</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="departamento">
                                                    <label class="form-label">Departamento</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="municipio">
                                                    <label class="form-label">Municipio</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>¿Tiene Seguro?</label>
                                                <div>
                                                    <input type="radio" id="radio16" value="No" name="seguro" >
                                                    <label for="radio16">No</label>
                                                    <input type="radio" id="radio17" value="Si" name="seguro"  >
                                                    <label for="radio17">Si </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6" id="hosp" style="display:none;">

                                            <select  name="hospitalafiliado" class="form-control show-tick">

                                                @foreach($hospital as $hos)
                                                    <option value="{{$hos->id}}">{{$hos->Nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn bg-indigo waves-effect btnPrevious">ANTERIOR</button>
                                  <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                              </div>
                          </div>
                          <div class="tab-pane" id="tab3">
                              <fieldset>
                                  <div class="row clearfix">
                                      <div class="col-sm-6">
                                         <select class="form-control" name="provinces" id="select-deporte">
                                          <option value="0" disable="true" selected="true">=== Seleccione un Deporte ===</option>
                                            @foreach ($deporte as $key => $value)
                                              <option value="{{$value->id}}">{{ $value->nombre }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                      <div class="col-md-6">
                                      <select class="form-control" name="regencies" id="categoria_select">
                                          <option value="0" disable="true" selected="true">=== Seleccione Categoria ===</option>
                                     </select>
                                      </div>
                                  </div>

                              </fieldset>
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn bg-indigo waves-effect btnPrevious">ANTERIOR</button>
                                  <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                              </div>
                          </div>
                          <div class="tab-pane" id="tab4">
                              <fieldset>
                                  <div class="row clearfix">
                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="nombremadre">
                                                  <label class="form-label">Nombre de la madre</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="telmadre">
                                                  <label class="form-label">Telefono de la madre</label>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="nombrepadre">
                                                  <label class="form-label">Nombre del padre</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="telpadre">
                                                  <label class="form-label">Telefono del padre</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row clearfix">
                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="emergencia">
                                                  <label class="form-label">En emergencia llamar a:</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group form-float">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" name="diremergencia">
                                                  <label class="form-label">Direccion</label>
                                              </div>
                                          </div>
                                      </div>


                                  </div>
                              </fieldset>
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn bg-indigo waves-effect btnPrevious">ANTERIOR</button>
                                  <button type="button" class="btn bg-indigo waves-effect btnNext">SIGUIENTE</button>
                              </div>

                          </div>
                          <div id="tab5" class="tab-pane">
                             <div class="row clearfix">
                                 <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label >Nombre de Usuario</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="nombreusu" type="text" class="form-control" name="nombreusu" value="{{old('nombreusu')}}" disabled="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                       <label >Correo Electronico</label><br>
                                       <small><span>(correo de contacto)</span></small>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="correodeusuario" type="text" class="form-control" name="correousu" value="{{old('correousu')}}">
                                            </div>
                                        </div>
                                    </div>
                                     <!-- <div class="col-md-12">
                                        <label class="form-label">Nombre de Usuario</label>
                                        <input id="nombreusu" type="password" class="form-control" name="pnombre" value="{{old('pnombre')}}" disabled="true">



                                      </div>-->

                             </div>
                              <div class="btn-group" role="group">
                                  <button type="button" class="btn bg-indigo waves-effect btnPrevious">ANTERIOR</button>
                                </div>
                              <a><button class="btn btn-primary" type="submit">Guardar</button></a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>


 <!-- For Material Design Colors -->
        {{--    <div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                           Por favor seleccionar las categorias de un solo deporte
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
--}}

  </div>
@endsection
