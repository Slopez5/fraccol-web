@extends('layouts.admin')


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
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Inmobiliaria</th>
                                <th>Name</th>
                                <th>Ubicación</th>
                                <th>Lotes</th>
                                <th>Lotes Disponibles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developments as $development)
                                <tr>
                                    <td>{{ $development->id }}</td>
                                    <td>{{ $development->realStateAgency->name }}</td>
                                    <td>{{ $development->name }}</td>
                                    <td>{{ $development->location }}</td>
                                    <td>{{ $development->total_lots }}</td>
                                    <td>{{ $development->available_lots }}</td>
                                    <td>
                                        <form method="POST" action="" style="display: inline;">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="icon-action" style="border: none; background-color: transparent; cursor: pointer;">
                                                <i class="far fa-file-pdf" style="color: gray"></i>
                                            </button>
                                        </form>
                                        <form method="GET" action="" style="display: inline;">
                                            <button type="submit" class="icon-action" style="border: none; background-color: transparent; cursor: pointer;">
                                                <i class="far far fa-eye"></i>
                                            </button>
                                        </form>
                                        <form method="POST" action="" style="display: inline;">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="icon-action" style="border: none; background-color: transparent; cursor: pointer;">
                                                <i class="far fa-edit" style="color: #4682b4"></i>
                                            </button>
                                        </form>
                                        <form method="POST" action="" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="icon-action" style="border: none; background-color: transparent; cursor: pointer;">
                                                <i class="far fa fa-trash" style="color: red;"></i>
                                            </button>
                                        </form>
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
