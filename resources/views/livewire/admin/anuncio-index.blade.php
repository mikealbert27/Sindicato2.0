<div>
    <div class="">
        @include('layouts.sideboot')
    </div>
    <div class="container cont-anuncio-index">
        <div class="row">
            <div class="col mb-1">
                <div class="float-left">
                    <a type="button" class="btn-sm btn-dark"><i class="fa fa-file-pdf"></i> Generar reporte</a>
                </div>
            </div>
            <div class="col mb-1">
                <div class="float-right">
                    <a href="{{ route('admin.anuncio-create') }}" type="button" class="btn-sm btn-success"><i
                            class="fa fa-plus-square"></i> Crear nuevo anuncio</a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                @if (count((array) $anuncios))
                    <table class="table table-striped">
                        <thead class="table-dark" style="text-aling-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">TITULO</th>
                                <th scope="col">ESPECIFICACIONES</th>
                                <th scope="col">ESTADO</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                        </thead>
                        @foreach ($anuncios as $anuncio)
                            <tbody>

                                <tr>
                                    <th scope="row">{{ $anuncio->id }}</th>
                                    <td>{{ $anuncio->titulo }}</td>
                                    <td>{{ $anuncio->contenido }}</td>
                                    <td><span class="badge badge-pill badge-success">Activo</span></td>
                                    <td>
                                        <a href="" type="button" title="Eliminar anuncio" class="btn-sm btn-danger"><i
                                                class="fa fa-trash"></i></a>
                                        <a href="{{ route('admin.anuncio-edit', $anuncio) }}" title="Editar anuncio"
                                            type="button" class="btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Especificaciones</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th>No hay resultados</th>
                            <th>No hay resultados</th>
                            <th>No hay resultados</th>
                            <th>No hay resultados</th>
                            <th>No hay resultados</th>
                        </tbody>


                    </table>
                    <h1>No hay resultados</h1>
                @endif
            </div>
        </div>
    </div>
</div>

{{ $cargado == true ? $anuncios->links() : null }}
