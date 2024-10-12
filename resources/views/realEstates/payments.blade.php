@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Payments'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.payment.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Invoice', 'Amount']" :dataCell="$payments" :action="function ($payment) {
                        return view('components.table.actions', [
                            'data' => $payment,
                            'edit' => route('realEstate.payment.edit', $payment->id),
                            'delete' => route('realEstate.payment.delete', $payment->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection