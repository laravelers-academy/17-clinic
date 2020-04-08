@extends('theme.backoffice.layouts.admin')


@section('title', 'Rol: ')

@section('head')
@endsection

@section('content')
<div class="section">
    <p class="caption">
        <strong>Rol: </strong> {{ $role->name }}
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card-panel">
                    <h4 class="header2">
                        Usuarios con el rol de {{ $role->name }}
                    </h4>
                    <div class="row">
                        <ul>
                        	<li>Raul.</li>
                        	<li>Jorge.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
@endsection