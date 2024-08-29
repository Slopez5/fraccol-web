@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Asignar Tipo de Lote</h1>
                <form action="{{ route('realEstate.development.loteType.store', $development->id) }}" method="POST">
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
                        <label for="price">Precio<span>*</span></label>
                        <input type="text" name="price" id="price" class="form-control">
                        @error('price')
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
