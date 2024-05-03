@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Fraccionamientos</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developments as $development)
                                <tr>
                                    <td>{{ $development->id }}</td>
                                    <td>{{ $development->name }}</td>
                                    <td>{{ $development->address }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.development.edit', $development->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.development.show', $development->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.development.delete', $development->id) }}"
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
            <div class="col-4">
                <a href="{{ route('realEstate.development.create') }}" class="btn btn-success">Create Development</a>
            </div>
        </div>
    </div>
@endsection