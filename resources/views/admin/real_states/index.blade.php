@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Inmobiliarias
            <small>Listado de inmobiliarias registradas</small>
        </h1>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Inmobiliarias</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.real_state.create') }}" class="btn btn-primary btn-sm">
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
                            @foreach ($real_states as $real_state)
                                <tr>
                                    <td>{{ $real_state->id }}</td>
                                    <td>{{ $real_state->name }}</td>
                                    <td>{{ $real_state->email }}</td>
                                    <td>{{ $real_state->phone }}</td>
                                    <td>{{ $real_state->website }}</td>
                                    <td>
                                        <a href="{{ route('admin.real_state.edit', $real_state->id) }}"
                                            class="btn btn-info btn-sm">Editar</a>
                                        <form action="{{ route('admin.real_state.destroy', $real_state->id) }}" method="POST"
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
