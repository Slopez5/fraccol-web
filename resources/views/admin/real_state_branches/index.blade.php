@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Sucursales
            <small>Listado de sucursales registradas</small>
        </h1>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Sucursales</h3>
                    <div class="card-tools">
                        <a href="{{ route('branch.create',$real_state_id) }}" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>
                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Sitio Web</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($real_states_branches as $branch)
                                <tr>
                                    <td>{{ $branch->id }}</td>
                                    <td>{{ $branch->name }}</td>
                                    <td>{{ $branch->email }}</td>
                                    <td>{{ $branch->phone }}</td>
                                    <td>{{ $branch->website }}</td>
                                    <td>
                                        <a href="{{ route('branch.edit',[$real_state_id, $branch->id]) }}"
                                            class="btn btn-info btn-sm">Editar</a>
                                        <form action="{{ route('branch.destroy',[$real_state_id, $branch->id]) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('¿Estás seguro de eliminar esta inmobiliaria?')">Eliminar</button>
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
