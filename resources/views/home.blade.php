@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <d  iv class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   <br>
                   @can('Listar_atleta')
                    <a href="/atleta">Listado de atletas</a> 
                   @endcan
                   <br>
                   @can('Crear atleta')
                    <a href="/atleta/create">Registro de atlertas</a>     
                   @endcan
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
