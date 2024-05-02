@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Properties</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Development</th>
                                <th>Property Type</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{  $property->development->name }}</td>
                                    <td>{{ $property->propertyType->name }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.property.edit', $property->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.property.show', $property->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.property.delete', $property->id) }}" method="POST"
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
                </div>
            </div>
            <div class="col-4">
                <a href="{{ route('realEstate.property.create') }}" class="btn btn-success">Create Property</a>
            </div>
        </div>
    </div>

@endsection