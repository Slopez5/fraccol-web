@extends('layouts.dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fraccionamientos</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Inmobiliaria</th>
                                <th>Name</th>
                                <th>Ubicación</th>
                                <th>Lotes</th>
                                <th>Lotes Disponibles</th>
                                <th>Plano</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developments as $development)
                                <tr onclick="selectDevelopment()">
                                    <td>{{ $development->id }}</td>
                                    <td>{{ $development->realStateAgency->name }}</td>
                                    <td>{{ $development->name }}</td>
                                    <td>{{ $development->location }}</td>
                                    <td>200</td>
                                    <td>{{ $development->available_lots }}</td>
                                    <td>
                                        <a href="#"><i class="far fa-file-pdf"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection

@section('extra-scripts')
    <script>
        function selectDevelopment() {
            alert("click");
        }
    </script>
@endsection
