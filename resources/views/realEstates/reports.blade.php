@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Reports</h4>
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
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <td>{{ $report->realEstate->name }}</td>
                                    <td>{{ $report->client->first_name }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.report.edit', $report->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('realEstate.report.show', $report->id) }}"
                                            class="btn btn-info">Show</a>
                                        <form action="{{ route('realEstate.report.delete', $report->id) }}"
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
                <a href="{{ route('realEstate.report.create') }}" class="btn btn-success">Create Report</a>
            </div>
        </div>
    </div>
@endsection