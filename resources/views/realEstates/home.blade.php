@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-card :title="'Fraccionamientos'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.development.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot:tools>
                    <x-slot:body>
                        <x-table :headers="['id', 'Nombre']" :dataCell="$developments" :action="function ($item) {
                            return view('components.table.actions', [
                                'item' => $item,
                                'edit' => route('realEstate.development.edit', $item->id),
                                'delete' => route('realEstate.development.delete', $item->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-md-12">
                <x-card :title="'Prospectos'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.lead.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Nombre', 'Apellidos', 'Phone']" :dataCell="$leads" :action="function ($item) {
                            return view('components.table.actions', [
                                'item' => $item,
                                'edit' => route('realEstate.lead.edit', $item->id),
                                'delete' => route('realEstate.lead.delete', $item->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-md-6">
                <x-card :title="'Citas'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.appointment.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Fraccionamiento', 'Nombre', 'Fecha']" :dataCell="$appointments" :action="function ($item) {
                            return view('components.table.actions', [
                                'item' => $item,
                                'edit' => route('realEstate.appointment.edit', $item->id),
                                'delete' => route('realEstate.appointment.delete', $item->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-md-6">
                <x-card :title="'invoices'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.invoice.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot:tools>
                    <x-slot:body>
                        <x-table :headers="['Amount', 'Due Date', 'Development']" :dataCell="$invoices" :action="function ($item) {
                            return view('components.table.actions', [
                                'item' => $item,
                                'edit' => route('realEstate.invoice.edit', $item->id),
                                'delete' => route('realEstate.invoice.delete', $item->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot:body>
                </x-card>
            </div>
        </div>
    </div>
@endsection
