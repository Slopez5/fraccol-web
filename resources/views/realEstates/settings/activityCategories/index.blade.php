@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <x-card :title="'Categoría de actividades'">
            <x-slot:tools>
                <a href="{{ route('realEstate.settings.activityCategories.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
            </x-slot>
            <x-slot:body>
                <x-table :headers="['Nombre', 'Descripción']" :dataCell="$activityCategories" :action="function ($activityCategory) {
                    return view('components.table.actions', [
                        'data' => $activityCategory,
                        'edit' => route('realEstate.settings.activityCategories.edit', $activityCategory->id),
                        'delete' => route('realEstate.settings.activityCategories.delete', $activityCategory->id),
                    ]);
                }">
                </x-table>
            </x-slot>
        </x-card>
    </div>
@endsection