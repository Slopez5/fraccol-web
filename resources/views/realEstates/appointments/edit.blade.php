@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Edit Appointment</h4>
                <form action="{{ route('realEstate.appointment.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="development_id">Development</label>
                        <select class="form-control" id="development_id" name="development_id">
                            @foreach ($developments as $development)
                                <option value="{{ $development->id }}"
                                    {{ $development->id == $appointment->development_id ? 'selected' : '' }}>
                                    {{ $development->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name"
                            value="{{ $appointment->customer_name }}">
                    </div>
                    <div class="form-group">
                        <label for="customer_phone">Customer Phone</label>
                        <input type="text" class="form-control" id="customer_phone" name="customer_phone"
                            value="{{ $appointment->customer_phone }}">
                    </div>
                    <div class="form-group">
                        <label for="appointment_email">Customer Email</label>
                        <input type="text" class="form-control" id="appointment_email" name="appointment_email"
                            value="{{ $appointment->appointment_email }}">
                    </div>
                    <div class="form-group">
                        <label for="appointment_date">Appointment Date</label>
                        <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date"
                            value="{{ $appointment->appointment_date }}">
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes">{{ $appointment->notes }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
