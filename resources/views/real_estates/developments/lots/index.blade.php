@extends('layouts.real_estate.real_estates')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lotes {{$development->name}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.developments.index') }}">Fraccionamientos</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.development.show',$development->id) }}">{{$development->name}}</a></li>
                        <li class="breadcrumb-item active">Lotes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Inmobiliarias</h3>
                    <div class="card-tools">
                        <a href="{{ route('realEstate.development.lot.create',$development->id) }}" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Terreno</th>
                                <th>Tamaño</th>
                                <th>Precio de contado</th>
                                <th>Estatus</th>
                                <th>Ubicación</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($development->lotes as $index => $lote)
                                <tr>
                                    <td>{{$lote->lot_number}}</td>
                                    <td>{{$lote->lot_size}}m<sup>2</sup></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
