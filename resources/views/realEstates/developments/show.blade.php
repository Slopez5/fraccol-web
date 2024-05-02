@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Tipos de lote</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($development->lotTypes as $lotType)
                                    <tr>
                                        <td>{{ $lotType->name }}</td>
                                        <td>{{ $lotType->description }}</td>
                                        <td>{{ $lotType->pivot->price }}</td>
                                        <td>
                                            <form action="{{ route('realEstate.development.lotType.delete', [$development->id, $lotType->id]) }}"
                                                method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('realEstate.development.lotType.create', $development->id) }}"
                            class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Finaciamientos</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Lote</th>
                                    <th>Nombre</th>
                                    <th>Enganche</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($development->paymentPlans as $paymentPlan)
                                    <tr>
                                        <td>{{ $paymentPlan->pivot->lotType->name }}</td>
                                        <td>{{ $paymentPlan->name }}</td>
                                        <td>{{ $paymentPlan->pivot->down_payment }}</td>
                                        <td>{{ $paymentPlan->pivot->price_per_sqm }}</td>
                                        <td>
                                            <form action="{{ route('realEstate.development.paymentPlan.delete', [$development->id, $paymentPlan->id]) }}"
                                                method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('realEstate.development.paymentPlan.create',[ $development->id, 1]) }}"
                            class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Lotes</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Manzana</th>
                                    <th>Lote</th>
                                    <th>Superficie</th>
                                    <th>Precio</th>
                                    <th>Estatus</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    @foreach ($development->lotes as $lot)
                                        <tr>
                                            <td>
                                                <button class="border-0 padding-0 bg-transparent" data-toggle="collapse"
                                                    data-target="#lotDetails{{ $lot->id }}">
                                                    <i class="fas fa-angle-right"></i>
                                                </button>
                                            <td>{{ $lot->block_number }}</td>
                                            <td>{{ $lot->lot_number }}</td>
                                            <td>{{ $lot->lot_size }}</td>
                                            <td>{{ $lot->price }}</td>
                                            <td>{{ $lot->status }}</td>
                                            <td>
                                                <a href="{{ route('realEstate.development.lot.edit', [$development->id, $lot->id]) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('realEstate.development.lot.show', [$development->id, $lot->id]) }}"><i
                                                        class="fas fa-eye"></i></a>
                                                <form action="{{ route('realEstate.development.lot.delete', [$development->id, $lot->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="lotDetails{{ $lot->id }}">
                                            <td colspan="5">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Enganche</th>
                                                            <th>Precio</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lot->paymentPlans as $paymentPlan)
                                                            <tr>
                                                                <td>{{ $paymentPlan->name }}</td>
                                                                <td>{{ $paymentPlan->down_payment }}</td>
                                                                <td>{{ $paymentPlan->price }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                           
                            </tbody>
                        </table>
                        <a href="{{ route('realEstate.development.lot.create', $development->id) }}"
                            class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
