<div wire:init="cargando">
    <div class="">
        @include('layouts.sideboot')
    </div>
    <div class="container cont-index">
        <div class="row mb-1">
            <div class="col-6">
                <a href="{{ route('admin.users.pdf') }}" type="button"
                    title="Genera un documento PDF con todos los datos obtenidos de la base datos"
                    class="float-left btn-sm btn btn-dark"><i class="fa fa-file-pdf"></i> Generar reporte</a>

            </div>

            <div class="col-6">
                <a href="{{ route('admin.create-user') }}" type="button" class="float-right btn-sm btn btn-success"><i
                        class="fa fa-user-plus"></i> Crear nuevo
                    usuario</a>
            </div>

        </div>


        <div class="row">
            <div class="col">
                @if (count($usuarios) > 0)
                    <table class="table text-center table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col"><b>NOMBRE</b></th>
                                <th scope="col"><b>APELLIDO</b></th>
                                <th scope="col"><b>DEPARTAMENTO</b></th>
                                <th scope="col"><b>PUESTO</b></th>
                                <th scope="col"><b>ESTADO</b></th>
                                <th scope="col"><b>ACCIONES</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <th scope="row">{{ $usuario->nombre }}</th>
                                    <th>{{ $usuario->apellido }}</th>
                                    <th>{{ $usuario->puesto }}</th>
                                    <th>{{ $usuario->departamento }}</th>
                                    @if ($usuario->estado == 1)
                                        <th><span class="badge badge-pill badge-success">Activo</span></th>
                                    @elseif ($usuario->estado == 0)
                                        <th><span class="badge badge-pill badge-danger">Inactivo</span></th>
                                    @endif

                                    <th>
                                        <a type="button" href="{{ route('admin.show-user', $usuario) }}"
                                            title="Informacion del usuario(Vista previa)" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i></a>
                                        <a type="button" href="{{ route('admin.user-edit', $usuario) }}"
                                            title="Editar informacion del usuario" class="btn btn-primary btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>

                        {{ $cargado == true ? $usuarios->links() : null }}
                    @elseif (count($usuarios) < 0)
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16"
                                role="img" aria-label="Warning:">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                No hay resultados
                            </div>
                        </div>
                    @else
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                @endif
                </table>
            </div>
        </div>
    </div>
</div>
