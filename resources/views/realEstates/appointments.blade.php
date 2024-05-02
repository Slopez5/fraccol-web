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
                                <th>Development</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Date</th>
                                <th>Notas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->development->name }}</td>
                                    <td>{{ $appointment->customer_name }}</td>
                                    <td>{{ $appointment->customer_phone }}</td>
                                    <td>{{ $appointment->appointment_date }}</td>
                                    <td>{{ $appointment->notes }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.appointment.edit', $appointment->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.appointment.show', $appointment->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.appointment.delete', $appointment->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
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
