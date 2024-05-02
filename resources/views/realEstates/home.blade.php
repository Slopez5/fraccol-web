@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Developments</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.development.create') }}" class="btn btn-primary">Add Development</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($developments as $development)
                                    <tr>
                                        <td>{{ $development->name }}</td>
                                        <td>{{ $development->address }}</td>
                                        <td>{{ $development->city }}</td>
                                        <td>{{ $development->state }}</td>
                                        <td>{{ $development->zip }}</td>
                                        <td>{{ $development->country }}</td>
                                        <td>
                                            <!-- edit action with icon -->
                                            <a href="{{ route('realEstate.development.edit', $development->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- view action with icon -->
                                            <a href="{{ route('realEstate.development.show', $development->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <!-- delete action with icon using form and only icon-->
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
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Leads</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.lead.create') }}" class="btn btn-primary">Add Lead</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Phone</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->first_name }}</td>
                                        <td>{{ $lead->last_name }}</td>
                                        <td>{{ $lead->phone }}</td>

                                        <td>
                                            <!-- edit action with icon -->
                                            <a href="{{ route('realEstate.lead.edit', $lead->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- view action with icon -->
                                            <a href="{{ route('realEstate.lead.show', $lead->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <!-- delete action with icon -->
                                            <a href="{{ route('realEstate.lead.delete', $lead->id) }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $leads->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Citas</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.appointment.create') }}" class="btn btn-primary">Add Appointment</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Fraccionamiento</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->development->name }}</td>
                                        <td>{{ $appointment->customer_name }}</td>
                                        <td>{{ $appointment->appointment_date }}</td>
                                        <td>
                                            <!-- edit action with icon -->
                                            <a href="{{ route('realEstate.appointment.edit', $appointment->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- view action with icon -->
                                            <a href="{{ route('realEstate.appointment.show', $appointment->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <!-- delete action with icon -->
                                            <a href="{{ route('realEstate.appointment.delete', $appointment->id) }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Invoices</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.invoice.create') }}" class="btn btn-primary">Add Invoice</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Development</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->amount }}</td>
                                        <td>{{ $invoice->due_date }}</td>
                                        <td>{{ $invoice->development->name }}</td>
                                        <td>
                                            {{-- edit action with icon --}}
                                            <a href="{{ route('realEstate.invoice.edit', $invoice->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- view action with icon --}}
                                            <a href="{{ route('realEstate.invoice.show', $invoice->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- delete action with icon --}}
                                            <a href="{{ route('realEstate.invoice.delete', $invoice->id) }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
