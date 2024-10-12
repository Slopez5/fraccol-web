@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tipos de Lote</h1>
                <a href="{{ route('realEstate.settings.loteType.create') }}" class="btn btn-primary">Crear Tipo de
                    Lote</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loteTypes as $loteType)
                            <tr>
                                <td>{{ $loteType->name }}</td>
                                <td>
                                    {{-- Actions with icons --}}
                                    <a
                                        href="{{ route('realEstate.settings.loteType.edit', $loteType->id) }}"><i
                                            class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('realEstate.settings.loteType.delete', $loteType->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
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
@endsection