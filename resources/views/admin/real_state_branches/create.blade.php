@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <h1>
            Sucursales
            <small>Agregar sucursal</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Sucursal</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('branch.store',$real_state_id) }}" method="POST">
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
                            <label for="street">Dirección</label>
                            <input type="text" name="street" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Codigo postal</label>
                            <input type="text" name="postal_code" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <input type="text" name="state" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input type="text" name="city" class="form-control" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
