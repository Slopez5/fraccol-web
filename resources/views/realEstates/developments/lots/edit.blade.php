@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Editar Lote</h1>
                <form action="{{ route('realEstate.development.lot.update', [$development->id, $lot->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="lot_type_id">Tipo de lote<span>*</span></label>
                        <select name="lot_type_id" id="lot_type_id" class="form-control">
                            @foreach ($lotTypes as $lotType)
                                <option value="{{ $lotType->id }}" {{ $lot->lot_type_id == $lotType->id ? 'selected' : '' }}>{{ $lotType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lot_number">Número de lote<span>*</span></label>
                        <input type="text" name="lot_number" id="lot_number" class="form-control" value="{{ $lot->lot_number }}">
                        @error('lot_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="block_number">Número de manzana<span>*</span></label>
                        <input type="text" name="block_number" id="block_number" class="form-control" value="{{ $lot->block_number }}">
                        @error('block_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group?">
                        <label for="lot_size">Tamaño del lote<span>*</span></label>
                        <input type="text" name="lot_size" id="lot_size" class="form-control" value="{{ $lot->lot_size }}">
                        @error('lot_size')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Ubicación<span>*</span></label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $lot->location }}">
                        @error('location')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Estatus<span>*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="sold" {{ $lot->status == "sold" ? 'selected' : '' }}>Vendido</option>
                            <option value="available" {{ $lot->status == "available" ? 'selected' : '' }}>Disponible</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción<span>*</span></label>
                        <textarea name="description" id="description" class="form-control">{{ $lot->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen<span>*</span></label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div> 
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection