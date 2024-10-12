@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Estados de Lote</h1>
                <a href="{{ route('realEstate.settings.loteStatus.create') }}" class="btn btn-primary">Crear Estado de
                    Lote</a>
                <x-table :headers="['id', 'Nombre']" :dataCell="$loteStatuses" :action="function ($item) {
                    return view('components.table.actions', [
                        'item' => $item,
                        'edit' => route('realEstate.settings.loteStatus.edit', $item->id),
                        'delete' => route('realEstate.settings.loteStatus.delete', $item->id),
                    ]);
                }">
                </x-table>

            </div>
        </div>
    </div>
@endsection
