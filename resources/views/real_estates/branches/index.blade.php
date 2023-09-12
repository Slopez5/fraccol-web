@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Oficinas
            <small>Listado de Oficinas registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Oficinas</h3>
                    <div class="card-tools">
                        <a href="{{ route('realEstate.branch.create') }}" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Street</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $index => $branch)
                                <tr>
                                    <td>{{ $branch->name }}</td>
                                    <td>{{ $branch->email }}</td>
                                    <td>{{ $branch->phone }}</td>
                                    <td>{{ $branch->address->street }}</td>
                                    <td>{{ $branch->address->city->name }}</td>
                                    <td>{{ $branch->address->state->name }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.branch.edit', $branch->id) }}">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deleteDevelopment').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deleteDevelopment"
                                            action="{{ route('realEstate.branch.destroy', $branch->id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
