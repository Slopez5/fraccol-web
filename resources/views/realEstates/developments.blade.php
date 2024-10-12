@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Fraccionamientos'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.development.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Nombre', 'Dirección']" :dataCell="$developments" :action="function ($development) {
                        return view('components.table.actions', [
                            'data' => $development,
                            'edit' => route('realEstate.development.edit', $development->id),
                            'delete' => route('realEstate.development.delete', $development->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection