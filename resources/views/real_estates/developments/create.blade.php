@extends('layouts.real_estate.real_estates')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Fraccionamiento</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('realEstate.development.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="location">Ubicación</label>
                            <input type="text" name="location" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="totalLand">Area total</label>
                            <input type="text" name="totalLand" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="totalLots">Lotes totales</label>
                            <input type="text" name="totalLots" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="availableLots">Lotes disponibles</label>
                            <input type="text" name="availableLots" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción corta</label>
                            <input type="text" name="description" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="fullDescription">Descripción completa</label>
                            <input type="text" name="fullDescription" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="blueprint">Plano</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="blueprint" class="custom-file-input" id="blueprint">
                                    <label class="custom-file-label" for="blueprint">Plano del fraccionamiento</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
