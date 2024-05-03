@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Agregar nueva inmobiliaria</h1>
                <form action="{{ route('realEstate.settings.realEstateAgency.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="website">Pagina</label>
                        <input type="text" name="website" id="website" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Inmobiliaria</button>
                </form>
            </div>
        </div>
    </div>
@endsection