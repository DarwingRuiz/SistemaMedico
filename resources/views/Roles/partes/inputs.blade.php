<div class="form-group form-float">
    <div class="form-line">
        {{ Form::label('name', 'Nombre de la etiqueta',['class' => 'form-label']) }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
</div>
{{--  <div class="form-group form-float">
    <div class="form-line">
        {{ Form::label('guard', 'URL ',['class' => 'form-label']) }}
        {{ Form::text('guard', 'web', ['class' => 'form-control', 'id' => 'slug']) }}
    </div>
</div>  --}}
<label class="card-inside-tittle">Lista de permisos</label>
<hr>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
	    <li>
	        <label>
                <input type="checkbox" id="{{$permission->name}}" name="permissions[]" value="{{$permission->id}}" />
                <label for="{{$permission->name}}">{{$permission->name}}</label>
	        {{--  {{ Form::checkbox('permissions[]', $permission->id, true) }}
	        {{ $permission->name }}  --}}
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>