@extends('layouts.admin')
@section('head')
   <link rel="stylesheet" href="/Recursos/plugins/dropify/dist/css/dropify.min.css"> 
      {{-- <link href="../assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet"> --}}
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
   <!-- Bootstrap Select Css -->
    <link href="/Recursos/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Recursos/css/notificacion.css">
@endsection
@section('content')
  <div class="row clearfix">
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
          <div class="header">
              <h2>REGISTRO DE ATLETAS</h2>
          </div>
          <div class="body">
            <form role="form" action="{{url('/atleta')}}" method="post" autocomplete="off" enctype="multipart/form-data" novalidate="true">
                {{csrf_field()}}
                    {{--Nav tabs  --}}
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="active"><a href="#tab1" data-toggle="tab">Datos Generales</a></li>
                          <li ><a href="#tab2" data-toggle="tab">Dirrecion Y Correo</a></li>
                          <li><a href="#tab3" data-toggle="tab">Deporte y Categoria</a></li>
                          <li><a href="#tab4" data-toggle="tab">Datos</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1" role="tabpanel">
                          <fieldset>
                            <div class="row clearfix">
                              {{--  foto  --}}
                               <div class="col-md-4 row ">
                                  <div id="div_principal" style="display:none;">
                                      <div class="form-group col-md-12">
                                            <div class="col-md-12 m-b-30">
                                              <label>Seleccione una fotografia</label>
                                            </div>
                                            <input type="file" name="foto" id="input-file-now" class="dropify" />
                                        </div>
                                  </div>
                                  <div id="div_secundario">
                                    <div class="form-group col-md-12">
                                            <div class="col-md-12 m-b-30">
                                              <label>fotografia</label>
                                            </div>
                                          <img src="{{asset('imagenes/perfiles/'.$atleta->Foto)}}" alt="foto de {{$atleta->nombrecompleto}}">
                                           <button type="button" class="btn bg-green waves-effect " onclick="mostrarfoto()">Cambiar</button>
                                    </div>
                                  </div>
                              </div>
                                {{--datos iniciales--}}
                              <div class="row-clearfix col-md-8">
                                <div class="col-md-3">
                                  <div class="form-group form-float ">
                                      <div class="form-line">
                                          <input type="text" id="pnombre" style="text-transform: capitalize;" class="form-control" name="pnombre" value="{{$atleta->pnombre}}">
                                          <label class="form-label">Primer Nombre</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                      <input type="text" id="snombre" style="text-transform: capitalize;" class="form-control" name="snombre" value="{{$atleta->snombre}}" >
                                      <label class="form-label">Segundo Nombre</label>
                                    </div> 
                                    </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                      <input type="text" id="papellido" style="text-transform: capitalize;" class="form-control" name="papellido" value="{{$atleta->papellido}}" >
                                      <label class="form-label">Primer Apellido</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group form-float ">
                                    <div class="form-line">
                                      <input type="text" id="sapellido" class="form-control" style="text-transform: capitalize;" name="sapellido" value="{{$atleta->sapellido}}" >
                                      <label class="form-label">Segundo Apellido</label>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group form-float">
                                    <div class="form-line">
                                      <input type="number" min="1" max="100" minlength="2" maxlength="3" class="form-control" name="edad"  value="{{$atleta->edad}}" id="edad" >
                                      <label class="form-label">Edad</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <input type="text" class="form-control" minlength="14" maxlength="14"  name="numcedula"  value="{{$atleta->numcedula}}" id="numcedula">
                                        <label class="form-label">Numero de Cedula</label>
                                      </div>
                                  </div>
                                </div>
                                <div class=" col-md-6">
                                  <label>Genero</label>
                                   <div class="form-group">
                                      <select class="form-control" name="genero" id="Genero">
                                        <option disable="true">Seleccione un Genero</option>
                                        @if ($atleta->genero == "Masculino")
                                              <option value="Masculino" selected>Masculino</option>
                                        @elseif($atleta->genero == "Femenino")
                                            <option value="Femenino">Femenino</option>
                                        @endif
                                        
                                    </select>
                                   </div>
                                </div>
                                  <div class="col-md-6 m-t-5" id="dvembarazo" style="display:none;">
                                    <label>¿Esta embarazada?</label>
                                    <br>
                                      <div class="form-group">
                                        @if ($atleta->genero =="No")
                                          <input type="radio" id="radio_1" value="No" name="embarazo" checked>
                                          <label for="radio_1">No</label>
                                        @elseif ($atleta->genero =="Si")
                                          <input type="radio" id="radio_2" value="Si" name="embarazo" checked>
                                          <label for="radio_2">Si</label>
                                        @endif  
                                    </div>
                                    </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                        <div class="tab-pane p-20" id="tab2" role="tabpanel">
                          <fieldset>
                            <div class="row col-md-12 ">
                              <div class="col-md-4">
                                <div class="form-group form-float ">
                                  <div class="form-line">
                                    <input type="email" id="correoelec" class="form-control" name="correoe" value="{{$atleta->correoe}}" >
                                    <label class="form-label">Correo Electronico</label>
                                  </div>
                                </div>
                              </div>
                             <div class="col-md-4">
                               <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" minlength="8" maxlength="8" class="form-control" id="telefonocelular" name="tcelular" value="{{$atleta->tcelular}}">
                                    <label class="form-label">Telefono Celular</label>
                                  </div>
                              </div>
                             </div>
                             <div class="col-md-4">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" minlength="8" maxlength="8" class="form-control" name="tconvencional" id="telconven" value="{{$atleta->tconvencional}}">
                                    <label class="form-label">Telefono Convencional</label>
                                  </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$atleta->direccion}}">
                                    <label class="form-label">Direccion</label>
                                  </div>
                                 </div>
                             </div>
                             <div class="col-md-4">
                               <div class="form-group col-md-4 m-t-10 ">
                                  <select class="form-control " name="departamento" id="select-departamento">
                                    <option value="0" disable="true" selected="true">== Seleccione un Departamento ==</option>
                                    @foreach ($municipio as $mun)
                                        @if ($mun->ID == $atleta->municipio)
                                            @foreach ($departamento as $dep)
                                                @if ($dep->ID == $mun->Departamento_id)
                                                  <option value="{{$dep->ID}}">{{ $dep->Nombre }}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    {{-- @foreach ($departamento as $key => $value)
                                    @foreach ($municipio as $mun)
                                        
                                    @endforeach
                                      <option value="{{$value->ID}}">{{ $value->Nombre }}</option>
                                    @endforeach --}}
                                  </select>
                              </div>
                             </div>
                              
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control p-0" name="municipio" id="select-municipio">
                                    <option value="0" disable="true" selected="true">=== Seleccione un municipio ===</option>
                                  </select>
                              </div>
                              </div>
                              
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>¿Tiene Seguro?</label><br>
                                      <div>
                                        @if (old('seguro')=="No")
                                        <input type="radio" id="radio16" value="No" name="seguro" checked >
                                          <label for="radio16">No</label>
                                        @elseif (old('seguro')=="Si")
                                        <input type="radio" id="radio17" value="Si" name="seguro" checked >
                                        <label for="radio17">Si </label>
                                        @else
                                          <input type="radio" id="radio16" value="No" name="seguro" >
                                          <label for="radio16">No</label>
                                          <input type="radio" id="radio17" value="Si" name="seguro"  >
                                          <label for="radio17">Si </label>
                                        @endif
                                        
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
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" class="form-control" name="nombremadre" id="nombmadre" value="{{old('nombremadre')}}">
                                    <label class="form-label">Nombre de la madre</label>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" minlength="8" maxlength="8" class="form-control" name="telmadre" id="telmadre" value="{{old('telmadre')}}">
                                    <label class="form-label">Telefono de la madre</label>
                                  </div>
                                    
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text"  class="form-control" name="nombrepadre" id="nombrepadre" value="{{old('nombrepadre')}}">
                                    <label class="form-label">Nombre del padre</label>
                                  </div>
                                   
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" minlength="8" maxlength="8" class="form-control" name="telpadre" id="telpadre" value="{{old('telpadre')}}">
                                    <label class="form-label">Telefono del padre</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" class="form-control" name="emergencia" id="emergencia" value="{{old('emergencia')}}">
                                    <label class="form-label">En emergencia llamar a: </label>
                                  </div>
                                  <span class="help-block"><small>(Nombre)</small></span>
                                  {{--  <div class="help-info">Min. 3, Max. 10 characters</div>  --}}
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" class="form-control" name="diremergencia" id="diremergencia" value="{{old('emergencia')}}">
                                    <label class="form-label">Direccion: </label>
                                  </div>
                                </div>
                              </div>
                            </div>{{-- fin del row --}}
                            <div class="row col-md-12">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <div class="btn-group" role="group">
                                    <button type="reset" class="btn btn-danger waves-effect">
                                      <i class="material-icons">close</i>
                                      <span>Cancelar</span>
                                    </button>
                                    <button type="submit" class="btn bg-green waves-effect">
                                      <i class="material-icons">save</i>
                                      <span>Guardar</span>
                                    </button>
                                </div>
                              </div>
                              

                            </div>
                            
                          </fieldset>
                        </div>
                    </div>
           
            </form>
          </div> {{--fin del div del body    --}}
      </div>
    </div>
  </div>
@endsection
{{-- modal Categoria --}}
<div class="modal fade" id="responsive-modal" tabindex="-1" role="dialog" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 style="color:black;" class="modal-title">Crear Categoria</h4>
                        </div>
                        
                        <div class="modal-body">
                           <form  id="form_Categoria" action="{{route('category.store')}}" method="POST" role="form">
                              {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                      <select class="form-control p-0" name="c_deporte" id="select-deporte-categoria">
                                          <option value="0" disable="true" selected="true">=== Seleccione un deporte ===</option>
                                            @foreach ($deporte as $key => $value)
                                              <option value="{{$value->id_deporte}}">{{ $value->nombre }}</option>
                                            @endforeach
                                      </select>
                                    </div>
                                      <div class="form-group form-float">
                                        <div id="div_texto" class="form-line">
                                          <input type="text" name="categoria_nombre" class="form-control" id="categoria_nombre">
                                          <label for="categoria_nombre" class="form-label">Nombre de la Categoria</label>
                                        </div>
                                      
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
            </div>
{{-- modal hospital--}}
<div id="responsive-modalH" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 style="color:black;" class="modal-title">Crear Hospital</h4>
              </div>
            <form class="floating-labels" action="{{route('hospital.store')}}" method="POST" id="form_hospital" role="form">
                  {{csrf_field()}}
                <div class="modal-body">
                  <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="Hospital" class="form-control" id="hospitalnombre">
                      <label for="hospitalnombre" class="form-label">Nombre del Hospital</label>
                    </div>
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
   <script src="/Recursos/plugins/dropify/dist/js/dropify.min.js"></script> 
 {{--  <script src="../assets/plugins/toast-master/js/jquery.toast.js"></script>
  <script src="js/toastr.js"></script> --}}
  <script src="/Recursos/plugins/bootstrap-notify/bootstrap-notify.js"></script>
  <script src="/Recursos/js/notificacion.js"></script>
   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>   --}}
   
    <!-- Select Plugin Js -->
    {{--  <script src="../Recursos/plugins/bootstrap-select/js/bootstrap-select.js"></script>  --}}
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
             html_select += '<option value="'+data[i].id+'">'+data[i].categoria+'</option>';
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
           selector = $("#select-deporte-categoria").val();
           nombre = $("#categoria_nombre").val();
            e.preventDefault();
          // console.log(nombre);
          if(nombre==="" || nombre===" "){
              if(selector ==0){ 
                alert("no ha seleccionado un deporte");
                }
              $("#div_texto").addClass("focused error");
          } 
          else{
            $.ajax({
              url: $(this).attr("action"),//action del formulario, ej:
              //http://localhost/mi_proyecto/mi_controlador/mi_funcion
              type: $(this).attr("method"),//el método post o get del formulario
              data: $(this).serialize(),//obtenemos todos los datos del formulario
              error: function(){
             console.log(this.responseText);
              },
              success:function(data){
                //console.log(data);
                $("#responsive-modal").modal('hide');
                $('#form_Categoria').trigger("reset");
                $("#categoria_nombre").blur();

                //document.getElementById("#form_Categoria").reset();
                MostrarNotificacion("Succes","Categoria Guardada Correctamente",data.categoria,"../images/check.png");

                
              }
           });
          }
          });
        }); 
     </script>
     
     <script>
      function mostrarfoto(){
            document.getElementById("div_secundario").style.display="none";
              document.getElementById("div_principal").style.display = null;
          }
     </script>
@endsection
{{--  /* var allowDismiss = true;

                  $.notify({
                      icon: 'glyphicon glyphicon-user',
                      title: 'Byron Morgan',
	                    message: 'Momentum reduce child mortality effectiveness incubation empowerment connect.'
                      
                  },
                      {
                          
                          type: 'bg-green',
                          allow_dismiss: allowDismiss,
                          newest_on_top: true,
                          timer: 1000,
                          placement: {
                              from: 'top',
                              align: 'right'
                          },
                          animate: {
                              enter: 'animated bounceInDown',
		                          exit: 'animated bounceOutUp'
                          },
                          template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
                          '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                          '<span data-notify="icon"></span> ' +
                          '<span data-notify="title">{1}</span> ' +
                          '<span data-notify="message">{2}</span>' +
                          '<div class="progress" data-notify="progressbar">' +
                          '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                          '</div>' +
                          '<a href="{3}" target="{4}" data-notify="url"></a>' +
                          '</div>'
                      });*/
                /*$.notify({
                    icon: '../images/check.png',
                    title: 'Categoria Guardada Correctamente',
                    message: data.categoria
                  },{
                    type: 'Succes',
                    showProgressbar: false,
                    delay: 5000,
                    icon_type: 'image',
                    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                      '<img data-notify="icon" class="img-circle pull-left">' +
                      '<span data-notify="title">{1}</span>' +
                      '<span data-notify="message">{2}</span>' +
                    '</div>'
                  });*/ --}}