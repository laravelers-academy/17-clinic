@extends('theme.backoffice.layouts.admin')


@section('title', 'Rol: ' . $role->name)

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index') }}">Roles del Sistema</a></li>
    <li>{{ $role->name }}</li>
@endsection

@section('content')

<div class="section">
    <p class="caption">
        <strong>Rol: </strong> {{ $role->name }}</strong>
    </p>
    
    <div class="divider"></div>

    <div class="section" id="basic-form">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Rol: {{ $role->name }}</span>

                        <p>Slug: {{ $role->slug }}</p>
                        <p>Descripción: {{ $role->description }}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('backoffice.role.edit', $role) }}">EDITAR</a>
                        <a href="#" style="color: red" onclick="delete_role()">ELIMINAR</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Permisos del rol</span>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><a href="{{ route('backoffice.permission.show', $permission) }}">{{ $permission->name }}</a></td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td><a href="{{ route('backoffice.permission.edit', $permission) }}">Editar</a></td>
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

<form method="POST" action="{{ route('backoffice.role.destroy', $role) }}" name="delete_form">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>

@endsection

@section('foot')

    <script type="text/javascript">


        function delete_role()
        {
            Swal.fire({
                title: "¿Deseas eliminar este rol?",
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