@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">Ventas</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Prospecto</th>
                            <th>Vendedor</th>
                            <th>Encargado</th>
                            <th>Ultima Actividad</th>
                            <th>Fraccionamiento</th>
                            <th>Precio total</th>
                            <th>Enganche</th>
                            <th>Saldo</th>
                            <th>Fecha de cierre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sales as $sale)
                        <tr>
                            <td>{{ $sale->lead_id }}</td>
                            <td>{{ $sale->lead_agent_id }}</td>
                            <td>{{ $sale->sale_closer_id }}</td>
                            <td>{{ $sale->activity_id }}</td>
                            <td>{{ $sale->development_id }}</td>
                            <td>{{ $sale->total_price }}</td>
                            <td>{{ $sale->down_payment }}</td>
                            <td>{{ $sale->remaining_balance }}</td>
                            <td>{{ $sale->sale_date }}</td>
                            <td>{{ $sale->status }}</td>
                            <td>
                                <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <a href="{{ route('realEstate.sale.create') }}" class="btn btn-success">Crear Venta</a>
        </div>
    </div>
</div>
@endsection