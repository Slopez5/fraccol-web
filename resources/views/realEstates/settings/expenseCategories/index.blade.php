@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Expense Categories'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.settings.expenseCategories.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Name']" :dataCell="$expenseCategories" :action="function ($expenseCategory) {
                        return view('components.table.actions', [
                            'data' => $expenseCategory,
                            'edit' => route('realEstate.settings.expenseCategories.edit', $expenseCategory->id),
                            'delete' => route('realEstate.settings.expenseCategories.delete', $expenseCategory->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection