@extends('layouts.admin')
@section('content')
   <form class="form-material m-t-40">
  <div class="form-group">
      <label for="">Your Provinces</label>
      <select class="form-control" name="provinces" id="select-deporte">
        <option value="0" disable="true" selected="true">=== Select Provinces ===</option>
          @foreach ($provinces as $key => $value)
            <option value="{{$value->id}}">{{ $value->nombre }}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="">Your Regencies</label>
      <select class="form-control" name="regencies" id="select-categoria">
        <option value="0" disable="true" selected="true">=== Select Regencies ===</option>
      </select>
    </div>
  </form>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(function () {
      $('#select-deporte').on('change',categoriaSelec);
    });

    function categoriaSelec() {
      var Id_deporte = $(this).val();
      //Ajax
        $.get('/api/categoria/'+Id_deporte+'/categoria',function (data) {
          var html_select= '<option value="" disable>--Seleccione una Categoria--</option>';
          for (var i = 0; i < data.length; ++i) {
            html_select += '<option value="'+data[i].id+'">'+data[i].categoria+'</option>';
           }
           $('#select-categoria').html(html_select);
        });

    }
    </script>
@endsection
{{--
                              <div class="form-group col-md-3 m-t-20 ">
                                  <input type="text" id="pnombre" class="form-control" name="pnombre" value="{{old('pnombre')}}" required>
                                  <span class="bar"></span>
                                  <label for="pnombre">Primer Nombre</label>
                              </div>


                              <div class="form-group col-md-3 m-t-20">
                                  <input type="text" id="snombre" class="form-control" name="snombre" value="{{old('snombre')}}" required>
                                  <span class="bar"></span>
                                  <label for="snombre">Segundo Nombre</label>
                              </div>

                            <div class="col-md-3 m-t-20">
                              <div class="form-group m-b-40">
                                  <input type="text" id="papellido" class="form-control" name="papellido" value="{{old('papellido')}}" required>
                                  <span class="bar"></span>
                                  <label for="papellido">Primer Apellido</label>
                              </div>
                            </div>
                            <div class="col-md-3 m-t-20">
                              <div class="form-group m-b-40">
                                <input type="text" id="sapellido" class="form-control" name="sapellido" value="{{old('sapellido')}}" required>
                                <span class="bar"></span>
                                <label for="sapellido">Segundo Apellido</label>
                              </div>
                            </div> --}}
