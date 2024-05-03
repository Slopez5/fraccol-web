@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">
                            Agencias Inmobiliarias
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Pagina</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($realEstateAgencies as $realEstateAgency)
                                    <tr>
                                        <td>{{ $realEstateAgency->name }}</td>
                                        <td>{{ $realEstateAgency->email }}</td>
                                        <td>{{ $realEstateAgency->phone }}</td>
                                        <td>{{ $realEstateAgency->website }}</td>
                                        <td>
                                            <a
                                                href="{{ route('realEstate.settings.realEstateAgency.edit', $realEstateAgency->id) }}"><i
                                                    class="fas fa-edit"></i></a>
                                            <form
                                                action="{{ route('realEstate.settings.realEstateAgency.delete', $realEstateAgency->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="border-0 padding-0 bg-transparent text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <a href="{{ route('realEstate.settings.realEstateAgency.create') }}" class="btn btn-success">Agregar Agencia
                    Inmobiliaria</a>
            </div>
        </div>
    @endsection
