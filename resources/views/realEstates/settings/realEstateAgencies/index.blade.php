@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-card :title="'Agencias Inmobiliarias'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.settings.realEstateAgency.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Nombre', 'Correo', 'Teléfono', 'Pagina']" :dataCell="$realEstateAgencies" :action="function ($realEstateAgency) {
                            return view('components.table.actions', [
                                'data' => $realEstateAgency,
                                'edit' => route('realEstate.settings.realEstateAgency.edit', $realEstateAgency->id),
                                'delete' => route('realEstate.settings.realEstateAgency.delete', $realEstateAgency->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
        </div>
    @endsection
