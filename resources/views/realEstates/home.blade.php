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
                                            <a href="{{ route('realEstate.development.edit', $development->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('realEstate.development.show', $development->id) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('realEstate.development.delete', $development->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Citas</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.appointment.create') }}" class="btn btn-primary">Add Appointment</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Development</th>
                                    <th>Property</th>
                                    <th>Lead</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->development->name }}</td>
                                        <td>{{ $appointment->property->name }}</td>
                                        <td>{{ $appointment->lead->name }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->time }}</td>
                                        <td>
                                            <a href="{{ route('realEstate.appointment.edit', $appointment->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('realEstate.appointment.show', $appointment->id) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('realEstate.appointment.delete', $appointment->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Leads</div>
                    <div class="card-body">
                        <a href="{{ route('realEstate.lead.create') }}" class="btn btn-primary">Add Lead</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Development</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->name }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->phone }}</td>
                                        <td>{{ $lead->development->name }}</td>
                                        <td>
                                            <a href="{{ route('realEstate.lead.edit', $lead->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('realEstate.lead.show', $lead->id) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('realEstate.lead.delete', $lead->id) }}"
                                                class="btn btn-danger">Delete</a>
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
                                            <a href="{{ route('realEstate.invoice.edit', $invoice->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('realEstate.invoice.show', $invoice->id) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('realEstate.invoice.delete', $invoice->id) }}"
                                                class="btn btn-danger">Delete</a>
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
