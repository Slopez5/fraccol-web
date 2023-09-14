@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Ventas
            <small>Listado de Ventas registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Ventas</h3>
                    <div class="card-tools">
                        <a href="{{ route('realEstate.sale.create') }}" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Vendedor</th>
                                <th>Cerrador</th>
                                <th>Fraccionamiento</th>
                                <th>Precio Total</th>
                                <th>Enganche</th>
                                <th>Saldo</th>
                                <th>Fecha de venta</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $index => $sale)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('realEstate.development.show', $sale->id) }}">
                                            <i class="fas fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('realEstate.development.edit', $sale->id) }}">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deleteDevelopment').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deleteDevelopment"
                                            action="{{ route('realEstate.development.destroy', $sale->id) }}"
                                            method="POST" style="display: none;">
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
