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
                                    <td>{{ $property->development->name }}</td>
                                    <td>{{ $property->propertyType->name }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.property.edit', $property->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('realEstate.property.show', $property->id) }}"
                                            class="btn btn-info">Show</a>
                                        <form action="{{ route('realEstate.property.delete', $property->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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