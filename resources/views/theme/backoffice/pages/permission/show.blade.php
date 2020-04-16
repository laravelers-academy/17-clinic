@extends('theme.backoffice.layouts.admin')


@section('title', 'Permiso: ' . $permission->name)

@section('head')
@endsection

@section('breadcrumbs')
<li><a href="{{ route('backoffice.role.index') }}">Roles del Sistema</a></li>
    <li>Rol: <a href="{{ route('backoffice.role.show', $permission->role) }}">{{  $permission->role->name }}</a></li>
    <li>{{ $permission->name }}</li>
@endsection

@section('content')

<div class="section">
    <p class="caption">
        <strong>Permiso: </strong> {{ $permission->name }}</strong>
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Permiso: {{ $permission->name }}</span>

                        <p>Slug: {{ $permission->slug }}</p>
                        <p>Descripción: {{ $permission->description }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('backoffice.permission.edit', $permission) }}">EDITAR</a>
                        <a href="#" style="color: red" onclick="delete_permission()">ELIMINAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('backoffice.permission.destroy', $permission) }}" name="delete_form">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>

@endsection

@section('foot')

    <script type="text/javascript">


        function delete_permission()
        {
            Swal.fire({
                title: "¿Deseas eliminar este permiso?",
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