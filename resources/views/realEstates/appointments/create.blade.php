@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Appointment</h1>
                <div id="tabsSection">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " id="tab_new_lead" data-toggle="tab" href="#new_lead">New Lead</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tab_existing_lead" data-toggle="tab"
                                href="#existing_lead">Existing Lead</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="new_lead">
                            <form action="{{ route('realEstate.appointment.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="development_id">Development</label>
                                    <select class="form-control" id="development_id" name="development_id" required>
                                        <option value="">Select Development</option>
                                        @foreach ($developments as $development)
                                            <option value="{{ $development->id }}">{{ $development->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('development_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="customer_name">Customer Name</label>
                                    <input type="text" class="form-control" id="customer_name" name="customer_name"
                                        required>
                                    @error('customer_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="customer_email">Customer Email</label>
                                    <input type="email" class="form-control" id="customer_email" name="customer_email">
                                    @error('customer_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="customer_phone">Customer Phone</label>
                                    <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                                        required>
                                    @error('customer_phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Appointment Date</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date"
                                        name="appointment_date" required>
                                    @error('appointment_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                        <option value="cancelled">Cancelled</option>
                                    </select>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                    @error('notes')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sale_closer_id">Sale Closer</label>
                                    <select class="form-control" id="sale_closer_id" name="sale_closer_id">
                                        <option value="">Select Sale Closer</option>
                                        @foreach ($saleClosers as $saleCloser)
                                            <option value="{{ $saleCloser->id }}">
                                                {{ $saleCloser->first_name . ' ' . $saleCloser->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('sale_closer_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lead_agent_id">Lead Agent</label>
                                    <select class="form-control" id="lead_agent_id" name="lead_agent_id">
                                        <option value="">Select Lead Agent</option>
                                        @foreach ($leadAgents as $leadAgent)
                                            <option value="{{ $leadAgent->id }}">
                                                {{ $leadAgent->first_name . ' ' . $leadAgent->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('lead_agent_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                        <div class="tab-pane fade show active" id="existing_lead">
                            <form action="{{ route('realEstate.appointment.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="development_id">Development</label>
                                    <select class="form-control" id="development_id" name="development_id" required>
                                        <option value="">Select Development</option>
                                        @foreach ($developments as $development)
                                            <option value="{{ $development->id }}">{{ $development->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lead_id">Lead</label>
                                    <select class="form-control" id="lead_id" name="lead_id" required>
                                        <option value="">Select Lead</option>
                                        @foreach ($leads as $lead)
                                            <option value="{{ $lead->id }}">
                                                {{ $lead->first_name . ' ' . $lead->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Appointment Date</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date"
                                        name="appointment_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                        <option value="cancelled">Cancelled</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sale_closer_id">Sale Closer</label>
                                    <select class="form-control" id="sale_closer_id" name="sale_closer_id">
                                        <option value="">Select Sale Closer</option>
                                        @foreach ($saleClosers as $saleCloser)
                                            <option value="{{ $saleCloser->id }}">
                                                {{ $saleCloser->first_name . ' ' . $saleCloser->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lead_agent_id">Lead Agent</label>
                                    <select class="form-control" id="lead_agent_id" name="lead_agent_id">
                                        <option value="">Select Lead Agent</option>
                                        @foreach ($leadAgents as $leadAgent)
                                            <option value="{{ $leadAgent->id }}">
                                                {{ $leadAgent->first_name . ' ' . $leadAgent->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
