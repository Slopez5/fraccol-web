@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Lead</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('realEstate.lead.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="form-group">
                        <label for="birthplace">Birthplace</label>
                        <input type="text" class="form-control" id="birthplace" name="birthplace" required>
                    </div>
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-control" id="marital_status" name="marital_status" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" id="occupation" name="occupation" required>
                    </div>
                    <div class="form-group">
                        <label for="unofficail_manager">Unofficial Manager</label>
                        <input type="text" class="form-control" id="unofficail_manager" name="unofficail_manager" required>
                    </div>
                    <div class="form-group">
                        <label for="beneficiary">Beneficiary</label>
                        <input type="text" class="form-control" id="beneficiary" name="beneficiary" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="neighborhood">Neighborhood</label>
                        <input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" id="city" name="city" required>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control" id="state" name="state" required>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                   
                   
                    <div class="form-group">
                        <label for="ine_file">INE File</label>
                        <input type="file" class="form-control" id="ine_file" name="ine_file" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lead_agent_id">Lead Agent</label>
                        <select class="form-control" id="lead_agent_id" name="lead_agent_id" required>
                            <option value="-1">Select an agent</option>
                            @foreach ($agents as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="source">Source</label>
                        <select class="form-control" id="source" name="source" required>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="whatsapp">Whatsapp</option>
                            <option value="google">Google</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection