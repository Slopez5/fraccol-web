@extends('layouts.dashboard.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <h4>Categoria de actividades</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <a href="{{ route('realEstate.settings.activityCategories.create') }}" class="btn btn-success">Create Activity Category</a>
        </div>
    </div>
@endsection