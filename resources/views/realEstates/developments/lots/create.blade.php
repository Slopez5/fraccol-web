@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crear Lote</h1>
                <form action="{{ route('realEstate.development.lot.store', $development->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="isMultiples">¿Agregar multiples lotes?</label>
                        <select name="isMultiples" id="isMultiples" class="form-control">
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lot_type_id">Tipo de lote<span>*</span></label>
                        <select name="lot_type_id" id="lot_type_id" class="form-control">
                            @foreach ($lotTypes as $lotType)
                                <option value="{{ $lotType->id }}">{{ $lotType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lot_number">Número de lote<span>*</span></label>
                        <input type="text" name="lot_number" id="lot_number" class="form-control">
                        @error('lot_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="block_number">Número de manzana<span>*</span></label>
                        <input type="text" name="block_number" id="block_number" class="form-control">
                        @error('block_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="lot_size">Tamaño del lote<span>*</span></label>
                        <input type="text" name="lot_size" id="lot_size" class="form-control">
                        @error('lot_size')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Ubicación<span>*</span></label>
                        <input type="text" name="location" id="location" class="form-control">
                        @error('location')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Estatus<span>*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="available">Disponible</option>
                            <option value="sold">Vendido</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción<span>*</span></label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                        @error('description')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen<span>*</span></label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
            