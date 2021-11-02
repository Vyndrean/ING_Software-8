@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 2%;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Crear Publicacion
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/publicaciones" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <label for="" class="form-label">Titulo</label>
                            <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="" class="form-label">descripcion</label>
                            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
                        </div>
                        <a href="/publicaciones" class="btn btn-secondary" tabindex="5">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/js/gijgo.min.js"></script>
@endsection