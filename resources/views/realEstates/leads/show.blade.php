@extends('layouts.dashboard.template')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-card :title="'Detalles de prospecto'">
                    <x-slot:body>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nombre:</strong> {{ $lead->first_name . " " . $lead->last_name }}</p>
                                <p><strong>Fecha de nacimiento:</strong> {{ $lead->birthday ?? "N/A" }}</p>
                                <p><strong>Lugar de nacimiento:</strong> {{ $lead->birthplace  ?? "N/A" }}</p>
                                <p><strong>Estado civil:</strong> {{ $lead->maritalStatus  ?? "N/A" }}</p>
                                <p><strong>Ocupación:</strong> {{ $lead->occupation  ?? "N/A" }}</p>
                                <p><strong>Gerente no oficial:</strong> {{ $lead->unnoficialManager  ?? "N/A" }}</p>
                                <p><strong>Beneficiario:</strong> {{ $lead->beneficiary  ?? "N/A" }}</p>
                                <p><strong>Correo:</strong> {{ $lead->email }}</p>
                                <p><strong>Teléfono:</strong> {{ $lead->phone }}</p>
                                <p><strong>Dirección:</strong> {{ $lead->address->street . " " . $lead->neighborhood . " " . $lead->address->city->name . "," . $lead->address->state->abbreviation . " " . $lead->address->zip_code }}</p>
                                <p><strong>Origen:</strong> {{ $lead->source }}</p>
                                <p><strong>Estatus:</strong> {{ $lead->status }}</p>
                                <p><strong>INE: </strong> {{ $lead->ine_file ?? "N/A" }}</p>
                                @isset($lead->leadAgent)
                                    <p><strong>Agente asignado:</strong> {{ $lead->leadAgent->first_name }}</p>
                                    
                                @endisset
                                <p><strong>Notas:</strong> {{ $lead->notes }}</p>
                                <p><strong>Fecha de creación:</strong> {{ $lead->created_at }}</p>
                            </div>
                        </div>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>
@endsection