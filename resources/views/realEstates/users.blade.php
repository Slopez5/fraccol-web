@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <x-card :title="'Usuarios'">
                    <x-slot:tools>
                        <a href="{{ route('realEstate.user.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </x-slot>
                    <x-slot:body>
                        <x-table :headers="['Id', 'Nombre', 'Correo', 'Rol']" :dataCell="$users" :action="function ($user) {
                            return view('components.table.actions', [
                                'data' => $user,
                                'edit' => route('realEstate.user.edit', $user->id),
                                'delete' => route('realEstate.user.delete', $user->id),
                            ]);
                        }">
                        </x-table>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>
@endsection
