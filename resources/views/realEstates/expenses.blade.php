@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Gastos'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.expense.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Nombre']" :dataCell="$expenses" :action="function ($expense) {
                        return view('components.table.actions', [
                            'data' => $expense,
                            'edit' => route('realEstate.expense.edit', $expense->id),
                            'delete' => route('realEstate.expense.delete', $expense->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection