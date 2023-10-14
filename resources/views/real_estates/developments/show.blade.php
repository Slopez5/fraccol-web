@extends('layouts.real_estate.real_estates')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $development->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="{{ route('realEstate.developments.index') }}">Fraccionamientos</a></li>
                        <li class="breadcrumb-item active">Detalles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lotes</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Manzana</th>
                                <th>Lote</th>
                                <th>Medidas</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($development->lotes as $index => $lote)
                                <tr>
                                    <td>{{$lote->block_number}}</td>
                                    <td>{{$lote->lot_number}}</td>
                                    <td>{{$lote->lot_size}}m<sup>2</sup></td>
                                    <td>{{$lote->status}}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deleteLote').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deleteLote" action="" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ventas</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Varidad de Lotes</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($development->lotTypes as $index => $lotType)
                                <tr>
                                    <td>{{ $lotType->name }}</td>
                                    <td>{{ $lotType->description }}</td>
                                    <td>{{ $lotType->pivot->price }}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deleteLoteType').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deleteLoteType" action="" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Financiamientos</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio por m<sup>2</sup></th>
                                <th>Enganche</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($development->paymentPlans as $index => $paymentPlan)
                                <tr>
                                    <td>{{ $paymentPlan->name }}</td>
                                    <td>${{ $paymentPlan->price_per_sqm }}</td>
                                    <td>${{ $paymentPlan->down_payment }}</td>
                                    <td>
                                        <a href="#">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deletePaymentPlan').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deletePaymentPlan" action="" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
