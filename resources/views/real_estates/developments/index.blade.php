@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Desarrollos inmobiliarios
            <small>Listado de Desarrollos inmobiliarios registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Inmobiliarias</h3>
                    <div class="card-tools">
                        <a href="{{ route('realEstate.development.create') }}" class="btn btn-primary btn-sm">
                            <span class="fa fa-plus"></span>
                        </a>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Ubicación</th>
                                <th>Area total</th>
                                <th>Lotes totales</th>
                                <th>Lotes disponibles</th>
                                <th>Descripción Corta</th>
                                <th>Plano</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developments as $index => $development)
                                <tr>
                                    <td>{{$development->name}}</td>
                                    <td>
                                        <a href="https://goo.gl/maps/YQaUMF6bhef5nv1y5">
                                            {{$development->location}}
                                        </a>
                                    </td>
                                    <td>{{$development->total_land_area}}m<sup>2</sup></td>
                                    <td>{{$development->total_lots}}</td>
                                    <td>{{$development->available_lots}}</td>
                                    <td>
                                        {{$development->sort_description}}
                                    </td>
                                    <td>
                                        <a href="{{$development->blueprint}}">
                                            <i class="fas fa-solid fa-file-pdf"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('realEstate.development.show',$development->id) }}">
                                            <i class="fas fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{route('realEstate.development.edit',$development->id)}}">
                                            <i class="fas fa-solid fa-pen"></i>
                                        </a>
                                        <a href=""
                                            onclick="event.preventDefault(); document.getElementById('deleteDevelopment').submit();">
                                            <i class="fas fa-solid fa-trash"></i>
                                        </a>
                                        <form id="deleteDevelopment"
                                            action="{{ route('realEstate.development.destroy', $development->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
