@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <x-card :title="'Sucursales'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.settings.realEstateBranch.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Nombre', 'Correo', 'Teléfono', 'Dirección']" :dataCell="$realEstateBranches" :action="function ($realEstateBranch) {
                        return view('components.table.actions', [
                            'data' => $realEstateBranch,
                            'edit' => route('realEstate.settings.realEstateBranch.edit', $realEstateBranch->id),
                            'delete' => route('realEstate.settings.realEstateBranch.delete', $realEstateBranch->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
</div>

@endsection