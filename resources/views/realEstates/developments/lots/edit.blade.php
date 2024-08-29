@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Editar Lote</h1>
                <form action="{{ route('realEstate.development.lot.update', [$development->id, $lote->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="lote_type_id">Tipo de lote<span>*</span></label>
                        <select name="lote_type_id" id="lote_type_id" class="form-control">
                            @foreach ($loteTypes as $loteType)
                                <option value="{{ $loteType->id }}" {{ $lote->lote_type_id == $loteType->id ? 'selected' : '' }}>{{ $loteType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lote_number">Número de lote<span>*</span></label>
                        <input type="text" name="lote_number" id="lote_number" class="form-control" value="{{ $lote->lote_number }}">
                        @error('lote_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="block_number">Número de manzana<span>*</span></label>
                        <input type="text" name="block_number" id="block_number" class="form-control" value="{{ $lote->block_number }}">
                        @error('block_number')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group?">
                        <label for="lote_size">Tamaño del lote<span>*</span></label>
                        <input type="text" name="lote_size" id="lote_size" class="form-control" value="{{ $lote->lote_size }}">
                        @error('lote_size')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Ubicación<span>*</span></label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $lote->location }}">
                        @error('location')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Estatus<span>*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="sold" {{ $lote->status == "sold" ? 'selected' : '' }}>Vendido</option>
                            <option value="available" {{ $lote->status == "available" ? 'selected' : '' }}>Disponible</option>
                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción<span>*</span></label>
                        <textarea name="description" id="description" class="form-control">{{ $lote->description }}</textarea>
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