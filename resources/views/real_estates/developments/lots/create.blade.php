@extends('layouts.real_estate.real_estates')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Lote</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('realEstate.development.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="lote">Lote</label>
                            <input type="text" name="lote" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="block">Manzana</label>
                            <input type="text" name="block" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="loteType">Tipo de Terreno</label>
                            <select name="loteType" class="form-control">
                                @foreach ($lot_types as $index => $lot_type)
                                    <option value="{{ $lot_type->id }}">{{ $lot_type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lotSize">Tamaño</label>
                            <input type="text" name="lotSize" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="totalLand">Precio</label>
                            <input type="text" name="totalLand" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="totalLots">Estatus</label>
                            <input type="text" name="totalLots" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="availableLots">Ubicación</label>
                            <input type="text" name="availableLots" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" class="form-control" value="">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
