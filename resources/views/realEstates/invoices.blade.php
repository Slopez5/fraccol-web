@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Invoices'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.invoice.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Real Estate', 'Client', 'Amount']" :dataCell="$invoices" :action="function ($invoice) {
                        return view('components.table.actions', [
                            'data' => $invoice,
                            'edit' => route('realEstate.invoice.edit', $invoice->id),
                            'delete' => route('realEstate.invoice.delete', $invoice->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection
