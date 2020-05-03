@extends('theme.backoffice.layouts.admin')


@section('title', 'Asignar permisos')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.user.index') }}">Usuarios del Sistema</a></li>
    <li><a href="{{ route('backoffice.user.show', $user) }}">{{ $user->name }}</a></li>
    <li>Asignar permisos</li>
@endsection

@section('content')
<div class="section">
    <p class="caption">
        Selecciona los permisos que deseas asignar
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8">
                <div class="card-panel">
                    <h4 class="header2">
                        Asignar permisos
                    </h4>
                    <div class="row">
                        
                        <form class="col s12" method="POST" action="{{ route('backoffice.user.permission_assignment', $user) }}">

                        	{{ csrf_field() }}

                            @foreach($roles as $role)
                                <p>{{ $role->name }}</p>
                                @foreach($role->permissions as $permission)
                                    <p>
                                        <input 
                                            type="checkbox" id="{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" @if($user->has_permission($permission->id)) checked @endif />
                                        <label for="{{ $permission->id }}">
                                            <span >{{ $permission->name }}</span>
                                        </label>
                                    </p>
                                @endforeach
                            @endforeach
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light right" type="submit">
                                        Guardar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                @include('theme.backoffice.pages.user.includes.user_nav')
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
@endsection
