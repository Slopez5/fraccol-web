@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Properties'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.property.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Development', 'Property Type', 'Price']" :dataCell="$properties" :action="function ($property) {
                        return view('components.table.actions', [
                            'data' => $property,
                            'edit' => route('realEstate.property.edit', $property->id),
                            'delete' => route('realEstate.property.delete', $property->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>

@endsection