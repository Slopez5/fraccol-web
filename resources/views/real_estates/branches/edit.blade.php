@extends('layouts.real_estate.real_estates')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Oficina</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('realEstate.branch.update', $branch->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ $branch->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" name="email" class="form-control" value="{{ $branch->email }}">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Teléfono</label>
                            <input type="text" name="telephone" class="form-control" value="{{ $branch->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="street">Street</label>
                            <input type="text" name="street" class="form-control"
                                value="{{ $branch->address->street }}">
                        </div>
                        <div class="form-group">
                            <label for="state">Estado</label>
                            <select name="state" class="form-control">
                                @foreach ($states as $index => $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Ciudad</label>
                            <select name="city" class="form-control">
                                @foreach ($states[0]->cities as $index => $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zipCode">Codigo Postal</label>
                            <input type="text" name="zipCode" class="form-control" value="{{ $branch->address->zip_code }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
