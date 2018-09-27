@extends('layouts.admin')
@section('content')
    <div class="row-clearfix">
         @if (session('info'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-lg-12-col-md-12">
            <div class="card">
                <div class="header">Roles De Usuarios
                     {{--  @can('roles.create')  --}}
                        <a href="/roles/create" class="btn btn-sm btn-primary pull-right">
                        Crear
                        </a>
                     {{--  @endcan  --}}
                </div>
                <div class="body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                {{--  @can('roles.show')  --}}
                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}" 
                                    class="btn btn-sm bg-teal">
                                        ver
                                    </a>
                                </td>
                                {{--  @endcan  --}}
                                {{--  @can('roles.edit')  --}}
                                <td width="10px">
                                    <a href="{{ route('roles.edit', $role->id) }}" 
                                    class="btn btn-sm btn-info">
                                        editar
                                    </a>
                                </td>
                                {{--  @endcan  --}}
                                {{--  @can('roles.destroy')  --}}
                                <td width="10px">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                {{--  @endcan  --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection