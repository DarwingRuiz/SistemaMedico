@extends('layouts.admin')
@section('content')
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="header">Roles</div>

                <div class="body">                    
                    {{ Form::open(['route' => 'roles.store']) }}

                        @include('roles.partes.inputs')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection