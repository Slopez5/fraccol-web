@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Appointments</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Real Estate</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->realEstate->name }}</td>
                                    <td>{{ $appointment->client->first_name }}</td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.appointment.edit', $appointment->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('realEstate.appointment.show', $appointment->id) }}"
                                            class="btn btn-info">Show</a>
                                        <form action="{{ route('realEstate.appointment.delete', $appointment->id) }}"
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
                <a href="{{ route('realEstate.appointment.create') }}" class="btn btn-success">Create Appointment</a>
            </div>
        </div>
    </div>
@endsection
