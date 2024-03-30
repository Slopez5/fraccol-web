@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Leads</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Real Estate</th>
                                <th>Client</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $lead->id }}</td>
                                    <td>{{ $lead->realEstate->name }}</td>
                                    <td>{{ $lead->client->first_name }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.lead.edit', $lead->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('realEstate.lead.show', $lead->id) }}"
                                            class="btn btn-info">Show</a>
                                        <form action="{{ route('realEstate.lead.delete', $lead->id) }}"
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
                <a href="{{ route('realEstate.lead.create') }}" class="btn btn-success">Create Lead</a>
            </div>
        </div>
    </div>
@endsection