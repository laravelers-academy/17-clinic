@extends('theme.backoffice.layouts.admin')


@section('title', 'Usuarios del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.user.index') }}">Usuarios del Sistema</a></li>
@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.user.create') }}" class="grey-text text-darken-2">Crear rol</a></li>
@endsection

@section('content')
<div class="section">
    <p class="caption">
        <strong>Usuarios del sistema</strong>
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card-panel">
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Correo</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{ route('backoffice.user.show', $user) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->dob }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="{{ route('backoffice.user.edit', $user) }}">Editar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
@endsection