@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Appointments'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.appointment.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Development', 'Nombre', 'Teléfono', 'Date', 'Notas']" :dataCell="$appointments" :action="function ($appointment) {
                        return view('components.table.actions', [
                            'data' => $appointment,
                            'edit' => route('realEstate.appointment.edit', $appointment->id),
                            'delete' => route('realEstate.appointment.delete', $appointment->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection
