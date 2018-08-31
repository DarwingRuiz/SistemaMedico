@extends('layouts.admin')
@section('head')
  <link rel="stylesheet" href="../assets/plugins/dropify/dist/css/dropify.min.css">
      {{-- <link href="../assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet"> --}}
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
      <div class="card">
          <div class="card-body p-b-0">
           <h4 class="card-title">Registro de atletas</h4>
                <form class="floating-labels m-t-40" role="form" action="{{url('/atleta')}}" method="post" autocomplete="off" enctype="multipart/form-data" novalidate="true">
                    {{csrf_field()}}
                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab" role="tablist">
                     <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Datos Generales</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Direccion y Correo</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Deporte y Diciplina</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Datos Familiares</span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1" role="tabpanel">
                        <div class="p-20 ">
                          <fieldset>
                             <div class="row">
                               <div class="col-md-4 row ">
                                 <div class="form-group col-md-12">
                                  <div class="col-md-12 m-b-30">
                                     <label for="input-file-now">Seleccione una fotografia</label>
                                  </div>
                                   <input type="file" name="foto" id="input-file-now" class="dropify" />
                                  </div>
                               </div>
                                 {{--datos nombre--}}
                               <div class="col-md-8 row  ">
                                 <div class="form-group col-md-3">
                                     <input type="text" id="pnombre" style="text-transform: capitalize;" class="form-control" name="pnombre" value="{{old('pnombre')}}" >
                                     <span class="bar"></span>
                                     <label for="pnombre">Primer Nombre</label>

                                 </div>
                                 <div class="form-group col-md-3 ">
                                     <input type="text" id="snombre" style="text-transform: capitalize;" class="form-control" name="snombre" value="{{old('snombre')}}" >
                                     <span class="bar"></span>
                                     <label for="snombre">Segundo Nombre</label>

                                 </div>
                                 <div class="form-group col-md-3">
                                   <input type="text" id="papellido" style="text-transform: capitalize;" class="form-control" name="papellido" value="{{old('papellido')}}" >
                                   <span class="bar"></span>
                                   <label for="papellido">Primer Apellido</label>

                                 </div>
                                 <div class="form-group col-md-3 ">
                                   <input type="text" id="sapellido" class="form-control" style="text-transform: capitalize;" name="sapellido" value="{{old('sapellido')}}" >
                                   <span class="bar"></span>
                                   <label for="sapellido">Segundo Apellido</label>
                                 </div>
                                 <div class="form-group col-md-4">
                                       <div class="form-line">
                                         <input type="text" 
                                         class="form-control" name="edad"  value="{{old('edad')}}" id="edad" >
                                         <span class="bar"></span>
                                         <label for="edad">Edad</label>
                                       </div>
                                 </div>
                                 <div class="form-group col-md-4">
                                       <div class="form-line">
                                         <input type="text" class="form-control"  name="numcedula"  value="{{old('numcedula')}}" id="numcedula">
                                         <span class="bar"></span>
                                         <label for="numcedula">Numero de Cedula</label>
                                       </div>
                                   </div>
                                   <div class=" col-md-6 m-t-20">
                                     <div class="form-group m-b-40">
                                              <select class="form-control p-0" name="genero" id="Genero">
                                                  <option disable="true"></option>

                                                  @if (old('genero') == "Masculino")
                                                        <option value="Masculino" selected>Masculino</option>
                                                  @elseif(old('genero') == "Femenino")
                                                      <option value="Femenino">Femenino</option>
                                                  @else
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                  @endif
                                                  
                                              </select><span class="bar"></span>
                                              <label for="input6">Genero</label>
                                      </div>
                                   </div>
                                   <div class="col-md-6 m-t-5" id="dvembarazo" style="display:none;">
                                     <label>¿Esta embarazada?</label>
                                     <br>
                                      <div class="form-group">
                                         <input type="radio" id="radio_1" value="no" name="embarazo" >
                                         <label for="radio_1">No</label>
                                         <input type="radio" id="radio_2" value="si" name="embarazo">
                                         <label for="radio_2">Si</label>
                                     </div>
                                    </div>
                               </div>
                             </div>
                           </fieldset>
                        </div>
                    </div>
                    <div class="tab-pane p-20" id="tab2" role="tabpanel">
                      <fieldset>
                        <div class="row col-md-12 ">
                          <div class="form-group col-md-4 m-t-10 ">
                              <input type="email" id="correoelec" class="form-control" name="correoe" >
                              <span class="bar"></span>
                              <label for="correoelec">Correo Electronico</label>

                          </div>
                          <div class="form-group col-md-4 m-t-10 ">
                              <input type="text" minlength="8" maxlength="8" class="form-control" id="telefonocelular" name="tcelular">
                              <span class="bar"></span>
                              <label for="telefonocelular">Telefono Celular</label>
                          </div>
                          <div class="form-group col-md-4 m-t-10 ">
                                <input type="text" minlength="8" maxlength="8" class="form-control" name="tconvencional" id="telconven">
                              <span class="bar"></span>
                              <label for="telconven">Telefono Convencional</label>
                          </div>
                          <div class="form-group col-md-4 m-t-10 ">
                              <input type="text" class="form-control" id="direccion" name="direccion">
                              <span class="bar"></span>
                              <label for="direccion">Direccion</label>

                          </div>
                          <div class="form-group col-md-4 m-t-10 ">
                              {{-- <input type="text" class="form-control" id="departamento" name="departamento">
                              <span class="bar"></span>
                              <label for="departamento">Departamento</label> --}}
                               <select class="form-control p-0" name="departamento" id="select-departamento">
                                <option value="0" disable="true" selected="true">==Seleccione un Departamento==</option>
                                @foreach ($departamento as $key => $value)
                                  <option value="{{$value->ID}}">{{ $value->Nombre }}</option>
                                @endforeach
                              </select>
                          </div>
                          <div class="form-group col-md-4 m-t-10 ">
                             {{--  <input type="text" class="form-control" name="municipio" id="municipio">
                              <span class="bar"></span>
                              <label for="municipio">Municipio</label> --}}
                              <select class="form-control p-0" name="municipio" id="select-municipio">
                                <option value="0" disable="true" selected="true">=== Seleccione un municipio ===</option>
                              </select>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <label>¿Tiene Seguro?</label><br>
                                  <div>
                                      <input type="radio" id="radio16" value="No" name="seguro" >
                                      <label for="radio16">No</label>
                                      <input type="radio" id="radio17" value="Si" name="seguro"  >
                                      <label for="radio17">Si </label>
                                  </div>

                              </div>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#responsive-modalH" class="model_img img-responsive"> Crear Hospital</button>
                          </div>
                          <div class="col-md-6" id="hosp" style="display:none;">

                              <select  name="hospitalafiliado" class="form-control p-0">

                                  @foreach($hospital as $hos)
                                      <option value="{{$hos->id}}">{{$hos->Nombre}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>
                      </fieldset>
                      </div>
                    {{-- <div class="tab-pane p-20" id="tab3" role="tabpanel">3</div> --}}
                    <div class="tab-pane  p-20" id="tab3" role="tabpanel">
                      <fieldset>
                        <div class="row col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control p-0" name="deporte" id="select-deporte">
                                <option value="0" disable="true" selected="true">=== Seleccione un deporte ===</option>
                                @foreach ($deporte as $key => $value)
                                  <option value="{{$value->id_deporte}}">{{ $value->nombre }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control p-0" name="categoria" id="select-categoria">
                                <option value="0" disable="true" selected="true">=== Seleccione sus Categoria ===</option>
                              </select>
                            </div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive"> Crear Categoria</button>
                          </div>
                          
                        </div>
                      </fieldset>
                    </div>
                    <div class="tab-pane p-20" id="tab4" role="tabpanel">
                      <fieldset>
                        <div class="row col-md-12">
                          <div class="col-md-6">
                            <div class="form-group">
                                  <input type="text" class="form-control" name="nombremadre" id="nombmadre">
                                <span class="bar"></span>
                                <label for="nombmadre">Nombre de la madre</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <input type="text" class="form-control" name="telmadre" id="telmadre">
                                <span class="bar"></span>
                                <label for="telmadre">Telefono de la madre</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <input type="text" class="form-control" name="nombrepadre" id="nombrepadre">
                                <span class="bar"></span>
                                <label for="nombrepadre">Nombre del padre</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                  <input type="text" class="form-control" name="telpadre" id="telpadre">
                                <span class="bar"></span>
                                <label for="telpadre">Telefono del padre</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="emergencia" id="emergencia">
                                <span class="bar"></span>
                                <label for="emergencia">En emergencia llamar a: </label>
                                <span class="help-block"><small>(Nombre)</small></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                               <input type="text" class="form-control" name="diremergencia" id="diremergencia">
                                <span class="bar"></span>
                                <label for="diremergencia">Direccion: </label>

                            </div>
                          </div>
                        </div>{{-- fin del row --}}
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

                       {{-- <div class="row col-md-12">
                         <div class="col-md-6">

                         </div>
                       </div> --}}
                    </div>
          </div>
         </div>
        </form>
        
        
      </div>
    </div>
  </div>
@endsection
{{-- modal Categoria --}}
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog"  style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Crear Categoria</h4>
                </div>
                <form class="floating-labels" id="form_Categoria" action="{{route('category.store')}}" method="POST" role="form">
                  {{csrf_field()}}
                <div class="modal-body">
                            
                              
                      <div class="form-group">

                         <select class="form-control p-0" name="c_deporte" id="select-deporte-categoira">
                          <option value="0" disable="true" selected="true">=== Seleccione un deporte ===</option>
                          @foreach ($deporte as $key => $value)
                            <option value="{{$value->id_deporte}}">{{ $value->nombre }}</option>
                          @endforeach
                        </select>
              </div>
              <div class="form-group">
                <input type="text" name="categoria_nombre" class="form-control" id="categoria_nombre">
                  <label for="categoria_nombre" class="control-label">Nombre de la Categoria</label>
              </div>
          
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                   <button type="submit"  class="btn btn-danger waves-effect waves-light " id="guardar_categoria">Guardar</button>
              </div>
              </form>
          </div>
      </div>
        </div>

        {{-- modal hospital--}}
<div id="responsive-modalH" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Crear Hospital</h4>
                        </div>
                        <form class="floating-labels" action="{{route('hospital.store')}}" method="POST" id="form_hospital" role="form">
                          {{csrf_field()}}
                        <div class="modal-body">
                        <div class="form-group">
                          <input type="text" name="Hospital" class="form-control" id="hospitalnombre">
                            <label for="hospitalnombre" class="control-label">Nombre del Hospital</label>
                        </div>
                    
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                    <button type="submit"  class="btn btn-danger waves-effect waves-light " id="guardar_hospital">Guardar</button>
                </div>
              </form>
          </div>
      </div>
        </div>
@section('scripts')
  <script src="../assets/plugins/dropify/dist/js/dropify.min.js"></script>
 {{--  <script src="../assets/plugins/toast-master/js/jquery.toast.js"></script>
  <script src="js/toastr.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  {{-- previzualizar imagen --}}
  <script>
     $(document).ready(function() {
         // Basic
         $('.dropify').dropify();

         // Translated
         $('.dropify-fr').dropify({ 
             messages: {
                 default: 'Glissez-déposez un fichier ici ou cliquez',
                 replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                 remove: 'Supprimer',
                 error: 'Désolé, le fichier trop volumineux'
             }
         });

         // Used events
         var drEvent = $('#input-file-events').dropify();

         drEvent.on('dropify.beforeClear', function(event, element) {
             return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
         });

         drEvent.on('dropify.afterClear', function(event, element) {
             alert('File deleted');
         });

         drEvent.on('dropify.errors', function(event, element) {
             console.log('Has Errors');
         });

         var drDestroy = $('#input-file-to-destroy').dropify();
         drDestroy = drDestroy.data('dropify')
         $('#toggleDropify').on('click', function(e) {
             e.preventDefault();
             if (drDestroy.isDropified()) {
                 drDestroy.destroy();
             } else {
                 drDestroy.init();
             }
         })
     });
     </script>
  {{-- visible/invisible div genero --}}
  <script type="text/javascript">
     $(function(){
       $('#Genero').on('change',generoFunc);
     });

     function generoFunc() {
       var value=$(this).val();
       if (value=="Femenino") {
         $("#dvembarazo").show();
       }
       else {
          $("#dvembarazo").hide();
       }

     }
   </script>
   {{--visible/invisible para hospitales  --}}
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
   {{--Select Dinamico deporte y categoria  --}}
   <script type="text/javascript">
     $(function () {
       $('#select-deporte').on('change',categoriaSelec);
     });

     function categoriaSelec() {
       var Id_deporte = $(this).val();
       //Ajax
         $.get('/api/categoria/'+Id_deporte+'/categoria',function (data) {
           var html_select= '<option value="" disable>==Seleccione una Categoria==</option>';
           for (var i = 0; i < data.length; ++i) {
             html_select += '<option value="'+data[i].id_categoria+'">'+data[i].categoria+'</option>';
            }
            $('#select-categoria').html(html_select);
         });

     }
     </script>
     {{--Select Dinamico departamento y municipio --}}
   <script type="text/javascript">
     $(function () {
       $('#select-departamento').on('change',municipioSelec);
     });

     function municipioSelec() {
       var Id_departamento = $(this).val();
       //Ajax
         $.get('/api/municipio/'+Id_departamento+'/municipio',function (data) {
           var html_select= '<option value="" disable>Seleccione un Municipio</option>';
           for (var i = 0; i < data.length; ++i) {
             html_select += '<option value="'+data[i].ID+'">'+data[i].Nombre+'</option>';
            }
            $('#select-municipio').html(html_select);
         });

     }
     </script>
     {{-- form Hospital --}}
     <script type="text/javascript">
        $(document).ready(function(){
        //cuando hagamos submit al formulario con id id_del_formulario
        //se procesara este script javascript
         $("#form_hospital").submit(function(e){
           e.preventDefault();
            $.ajax({
              url: $(this).attr("action"),//action del formulario, ej:
              //http://localhost/mi_proyecto/mi_controlador/mi_funcion
              type: $(this).attr("method"),//el método post o get del formulario
              data: $(this).serialize(),//obtenemos todos los datos del formulario
              error: function(){
             console.log("");
              },
              success:function(data){
                console.log("guardado Correctamente");
                $("#responsive-modalH").modal('hide');
                toastr.success("Hospital Guardado Correctamente");
              }
           });
          });
        }); 
     </script>
     {{-- fomr categoria --}}
     <script type="text/javascript">
        $(document).ready(function(){
        //cuando hagamos submit al formulario con id id_del_formulario
        //se procesara este script javascript
         $("#form_Categoria").submit(function(e){
           e.preventDefault();
            $.ajax({
              url: $(this).attr("action"),//action del formulario, ej:
              //http://localhost/mi_proyecto/mi_controlador/mi_funcion
              type: $(this).attr("method"),//el método post o get del formulario
              data: $(this).serialize(),//obtenemos todos los datos del formulario
              error: function(){
             console.log("");
              },
              success:function(data){
                console.log("guardado Correctamente");
                $("#responsive-modal").modal('hide');
                toastr.success("Categoria Guardado Correctamente");
              }
           });
          });
        }); 
     </script>
@endsection
