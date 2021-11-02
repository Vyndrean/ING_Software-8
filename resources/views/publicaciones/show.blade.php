@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 2%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2> Vista Contrato</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Fecha :</strong>
                        {{ $publicacion->created_at}}
                        <br>
                        <strong>Titulo:</strong>{{ $publicacion->titulo }}
                        <br>
                        <strong>Descripcion:</strong>
                        {{ $publicacion->descripcion }}
                        <br>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('votos.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Voto:</strong>
                                <select class="form-control" name="voto" requires='required'>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo </option>
                                    <option value="Nulo">Nulo</option>
                                </select>
                            </div>
                        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-secondary" href="{{ route('publicaciones.index') }}"> Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <br>
                </div>
            </div>
        </div>


    </div>

    </div>

    </div>
    </div>

    @endsection