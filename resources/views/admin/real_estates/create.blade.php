@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Inmobiliaria
            <small>Agregar Inmobiliara</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Inmobiliaria</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.real_estate.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="phone" name="phone" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="website">Sitio Web</label>
                            <input type="text" name="website" class="form-control" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
