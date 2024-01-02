@extends('layouts.template')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fraccionamiento {{ $development['name'] }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">{{ $development['name'] }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $development['name'] }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Manzana</th>
                                        <th>Lote</th>
                                        <th>Medidas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($development->lotes as $index => $lote)
                                        <tr>
                                            <td>{{ $lote->id }}</td>
                                            <td>{{ $lote->block_number }}</td>
                                            <td>{{ $lote->lot_number }}</td>
                                            <td>{{ $lote->lot_size }}m<sup>2</sup></td>
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
@endsection
