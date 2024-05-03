@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Sucursales</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>correo</th>
                                <th>teléfono</th>
                                <th>Dirección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($realEstateBranches as $realEstateBranch)
                            <tr>
                                <td>{{ $realEstateBranch->name }}</td>
                                <td>{{ $realEstateBranch->email }}</td>
                                <td>{{ $realEstateBranch->phone }}</td>
                                <td>{{ $realEstateBranch->address->street }}</td>
                                <td>
                                    <a href="{{ route('realEstate.settings.realEstateBranch.edit', $realEstateBranch->id) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('realEstate.settings.realEstateBranch.delete', $realEstateBranch->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <a href="{{ route('realEstate.settings.realEstateBranch.create') }}" class="btn btn-success">Agregar Sucursal</a>
        </div>
    </div>
</div>

@endsection