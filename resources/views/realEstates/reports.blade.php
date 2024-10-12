@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Reports'">
                <x-slot:tools>
                    <a href="{{ route('realEstate.report.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </a>
                </x-slot>
                <x-slot:body>
                    <x-table :headers="['Id', 'Real Estate', 'Client']" :dataCell="$reports" :action="function ($report) {
                        return view('components.table.actions', [
                            'data' => $report,
                            'edit' => route('realEstate.report.edit', $report->id),
                            'delete' => route('realEstate.report.delete', $report->id),
                        ]);
                    }">
                    </x-table>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection