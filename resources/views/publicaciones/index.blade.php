@extends('layouts.master')
@section('css')
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 2%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Publicaciones
                    
                    <a href="publicaciones/create" class="btn btn-primary">Nuevo Publicacion</a>
                    
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                        <table id="publicaciones" class="table table-bordered table-hover dataTable dtr-inline" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N&uacute;mero</th>
                                    <th>Titulo</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Fecha Publicaci&oacute;n</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publicaciones as $publicacion)
                                <tr>
                                        <td>{{ $publicacion->id }}</td>
                                        <td>{{ $publicacion->titulo }}</td>
                                        <td>{{ $publicacion->descripcion }}</td>
                                        <td>{{ $publicacion->created_at}}</td>
                                    <td>
                                        <form action="{{ route ('publicaciones.destroy',$publicacion->id)}}" method="POST">
                                            <a class="btn btn-info" href="{{ route('publicaciones.show',$publicacion->id) }}">Ver</a>
                                            <a href="#" class="btn btn-info">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </table>

                            </tbody>
                    </table>
                        @section('js')
                        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
                        <script>
                            $(document).ready(function() {
                                $('#publicaciones').DataTable({
                                    "language": {
                                        "url": "https:////cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
                                    }
                                });
                            });
                        </script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection