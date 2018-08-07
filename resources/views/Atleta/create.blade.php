@extends('layouts.admin')
@section('head')
  <link rel="stylesheet" href="../assets/plugins/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="card-body p-b-0">
              <h4 class="card-title">Customtab Tab</h4>
          </div>
          <form class="floating-labels m-t-40" role="form" action="{{url('/atleta')}}" method="post" autocomplete="off" enctype="multipart/form-data" >
          <!-- Nav tabs -->
          <ul class="nav nav-tabs customtab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Datos Generales</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Direccion y Correo</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Deporte y Diciplina</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Datos Familiares</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab5" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Datos Login</span></a> </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
              <div class="tab-pane active" id="tab1" role="tabpanel">
                  <div class="p-20">
                    <fieldset>
                       <div class="row">
                         <div class="form-grop col-md-3 m-t-20">
                           <label for="input-file-now">Seleccione una fotografia</label>
                           <input type="file" name="foto" id="input-file-now" class="dropify" />

                          </div>
                          {{--datos nombre--}}
                         <div class="form-group col-md-3 m-t-20 ">
                             <input type="text" id="pnombre" class="form-control" name="pnombre" value="{{old('pnombre')}}" required>
                             <span class="bar"></span>
                             <label for="pnombre">Primer Nombre</label>
                         </div>
                       </div>


                    </fieldset>
                  </div>
              </div>
              <div class="tab-pane  p-20" id="tab2" role="tabpanel">2</div>
              <div class="tab-pane p-20" id="tab3" role="tabpanel">3</div>
              <div class="tab-pane  p-20" id="tab4" role="tabpanel">2</div>
              <div class="tab-pane p-20" id="tab5" role="tabpanel">3</div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <script src="../assets/plugins/dropify/dist/js/dropify.min.js"></script>
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
@endsection
