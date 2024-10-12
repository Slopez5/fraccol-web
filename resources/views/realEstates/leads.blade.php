@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Leads'">
                <x-slot:tools>
                    {{-- <a href="{{ route('realEstate.lead.import') }}" class="btn btn-primary">
                        <i class="fas fa-file-import"></i>
                    </a> --}}
                    <a href="{{ route('realEstate.lead.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Nombre', 'Apellido', 'Teléfono']" :dataCell="$leads" :action="function ($lead) {
                        return view('components.table.actions', [
                            'data' => $lead,
                            'edit' => route('realEstate.lead.edit', $lead->id),
                            'delete' => route('realEstate.lead.delete', $lead->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection