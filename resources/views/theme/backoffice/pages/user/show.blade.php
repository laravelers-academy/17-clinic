@extends('theme.backoffice.layouts.admin')


@section('title', 'Usuario: ' . $user->name)

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.user.index') }}">Usuarios del Sistema</a></li>
    <li>{{ $user->name }}</li>
@endsection

@section('content')

<div class="section">
    <p class="caption">
        <strong>Usuario: </strong> {{ $user->name }}</strong>
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Usuario: {{ $user->name }}</span>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('backoffice.user.edit', $user) }}">EDITAR</a>
                        <a href="#" style="color: red" onclick="delete_user()">ELIMINAR</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                @include('theme.backoffice.pages.user.includes.user_nav')
            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('backoffice.user.destroy', $user) }}" name="delete_form">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>

@endsection

@section('foot')

    <script type="text/javascript">


        function delete_user()
        {
            Swal.fire({
                title: "¿Deseas eliminar este usuario?",
                text: "Esta acción no se puede deshacer",
                showCancelButton: true,
                confirmButtonText: "Si continuar",
                cancelButtonText: "No, cancelar",
            }).then((result) => {
                if(result.value){
                    document.delete_form.submit();
                }else{
                    Swal.fire(
                        'Operación cancelada',
                        'Registro no eliminado',
                        'error'
                    );
                }
            });
        }
    </script>

@endsection