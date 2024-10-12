@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <x-card :title="'Ventas'">
            <x-slot:tools>
                <a href="{{ route('realEstate.sale.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
            </x-slot>
            <x-slot:body>
                <x-table :headers="['Prospecto', 'Vendedor', 'Encargado', 'Ultima Actividad', 'Fraccionamiento', 'Precio total', 'Enganche', 'Saldo', 'Fecha de cierre', 'Estado']" :dataCell="$sales" :action="function ($sale) {
                    return view('components.table.actions', [
                        'data' => $sale,
                        'edit' => route('sales.edit', $sale->id),
                        'delete' => route('sales.destroy', $sale->id),
                    ]);
                }">
                </x-table>
            </x-slot>
        </x-card>
    </div>
</div>
@endsection