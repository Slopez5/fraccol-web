@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crear Lote</h1>
                <form action="{{ route('realEstate.development.lote.store', $development->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="lote_type_id">Tipo de lote<span>*</span></label>
                        <select name="lote_type_id" id="lote_type_id" class="form-control">
                            @foreach ($loteTypes as $loteType)
                                <option value="{{ $loteType->id }}">{{ $loteType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lote_number">Número de lote<span>*</span></label>
                        <input type="text" name="lote_number" id="lote_number" class="form-control">
                        @error('lote_number')
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
                        <label for="lote_size">Tamaño del lote<span>*</span></label>
                        <input type="text" name="lote_size" id="lote_size" class="form-control">
                        @error('lote_size')
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
                            <option value="1">Disponible</option>
                            <option value="2">Vendido</option>
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
            