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
                                @foreach ($development->loteTypes as $loteType)
                                    <tr>
                                        <td>{{ $loteType->name }}</td>
                                        <td>{{ $loteType->description }}</td>
                                        <td>{{ $loteType->pivot->price }}</td>
                                        <td>
                                            <form action="{{ route('realEstate.development.loteType.delete', [$development->id, $loteType->id]) }}"
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
                        <a href="{{ route('realEstate.development.loteType.create', $development->id) }}"
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
                                        <td>{{ $paymentPlan->pivot->loteType->name }}</td>
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
                              
                                    @foreach ($development->lotes as $lote)
                                        <tr>
                                            <td>
                                                <button class="border-0 padding-0 bg-transparent" data-toggle="collapse"
                                                    data-target="#lotDetails{{ $lote->id }}">
                                                    <i class="fas fa-angle-right"></i>
                                                </button>
                                            <td>{{ $lote->block_number }}</td>
                                            <td>{{ $lote->lote_number }}</td>
                                            <td>{{ $lote->lote_size }}</td>
                                            <td>{{ $lote->price }}</td>
                                            <td>{{ $lote->status }}</td>
                                            <td>
                                                <a href="{{ route('realEstate.development.lot.edit', [$development->id, $lote->id]) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('realEstate.development.lot.show', [$development->id, $lote->id]) }}"><i
                                                        class="fas fa-eye"></i></a>
                                                <form action="{{ route('realEstate.development.lot.delete', [$development->id, $lote->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="lotDetails{{ $lote->id }}">
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
                                                        @foreach ($lote->paymentPlans as $paymentPlan)
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
