@extends('layouts.dashboard.template')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lead Details</h1>
                <div class="card">
                    <div class="card-header">
                        <h5>Lead Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Lead ID:</strong> {{ $lead->id }}</p>
                                <p><strong>Lead Name:</strong> {{ $lead->first_name . " " . $lead->last_name }}</p>
                                <p><strong>Lead Birthday:</strong> {{ $lead->birthday ?? "N/A" }}</p>
                                <p><strong>Lead Birthplace:</strong> {{ $lead->birthplace  ?? "N/A" }}</p>
                                <p><strong>Lead Marital status:</strong> {{ $lead->maritalStatus  ?? "N/A" }}</p>
                                <p><strong>Lead Occupation:</strong> {{ $lead->occupation  ?? "N/A" }}</p>
                                <p><strong>Lead Unnoficial Manager:</strong> {{ $lead->unnoficialManager  ?? "N/A" }}</p>
                                <p><strong>Lead Beneficiary:</strong> {{ $lead->beneficiary  ?? "N/A" }}</p>
                                <p><strong>Lead Email:</strong> {{ $lead->email }}</p>
                                <p><strong>Lead Phone:</strong> {{ $lead->phone }}</p>
                                <p><strong>Lead Address:</strong> {{ $lead->address->street . " " . $lead->neighborhood . " " . $lead->address->city->name . "," . $lead->address->state->abbreviation . " " . $lead->address->zip_code }}</p>
                                <p><strong>Lead Source:</strong> {{ $lead->source }}</p>
                                <p><strong>Lead Status:</strong> {{ $lead->status }}</p>
                                <p><strong>Lead ine: </strong> {{ $lead->ine_file ?? "N/A" }}</p>
                                <p><strong>Lead lead agent:</strong> {{ $lead->leadAgent->first_name }}</p>
                                <p><strong>Lead notes:</strong> {{ $lead->notes }}</p>
                                <p><strong>Lead Created At:</strong> {{ $lead->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection