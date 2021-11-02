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
                    Votaciones
                </div>

                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
                    <div class="small-box bg-info">
              <div class="inner">
                <h3 class="text-center">{{ $votos->where('voto')->count() }}</h3>

                <p class="text-center">Total de Votos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
                    <div class="col-lg-3 col-6">
                        
                    <!-- small box -->
                    <div class="small-box bg-success">
                    <div class="inner">
                        <h3> {{ $votos->where('voto', 'Positivo')->count() }} </h3>

                        <p>Votos Positivos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> {{ $votos->where('voto', 'Nulo')->count() }} </h3>

                <p>Votos Nulos</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $votos->where('voto', 'Negativo')->count() }}</h3>

                <p>Votos Negativos</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          </div>
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