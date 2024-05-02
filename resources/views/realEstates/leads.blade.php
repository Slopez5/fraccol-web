@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4 class="card-title">Leads</h4>
                    <div class="card-tools">
                        <a href="{{ route('realEstate.lead.import') }}" class="btn btn-primary">Import Leads</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $lead->id }}</td>
                                    <td>{{ $lead->first_name }}</td>
                                    <td>{{ $lead->last_name }}</td>
                                    <td>{{ $lead->phone }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.lead.edit', $lead->id) }}"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.lead.show', $lead->id) }}"><i class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.lead.delete', $lead->id) }}" method="POST"
                                            style="display: inline;">
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
                    <div class="d-flex justify-content-center">
                        {{ $leads->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <a href="{{ route('realEstate.lead.create') }}" class="btn btn-success">Create Lead</a>
            </div>
        </div>
    </div>
@endsection