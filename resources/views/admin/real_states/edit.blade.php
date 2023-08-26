@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Inmobiliaria
            <small>Editar Inmobiliara</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Inmobiliaria</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.real_state.update', $real_state->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $real_state->name }}">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" name="correo" class="form-control" value="{{ $real_state->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="phone" name="phone" class="form-control" value="{{ $real_state->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="website">Sitio Web</label>
                            <input type="text" name="website" class="form-control" value="{{ $real_state->website }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
