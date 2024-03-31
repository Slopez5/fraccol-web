@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Lead</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('realEstate.lead.update', $lead->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $lead->first_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $lead->last_name }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $lead->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $lead->birthdate }}">
                    </div>
                    <div class="form-group">
                        <label for="birthplace">Birthplace</label>
                        <input type="text" class="form-control" id="birthplace" name="birthplace" value="{{ $lead->birthplace }}">
                    </div>
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-control" id="marital_status" name="marital_status" required>
                            <option value="single" {{ $lead->marital_status == 'single' ? 'selected' : '' }}>Single</option>
                            <option value="married" {{ $lead->marital_status == 'married' ? 'selected' : '' }}>Married</option>
                            <option value="divorced" {{ $lead->marital_status == 'divorced' ? 'selected' : '' }}>Divorced</option>
                            <option value="widowed" {{ $lead->marital_status == 'widowed' ? 'selected' : '' }}>Widowed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $lead->occupation }}">
                    </div>
                    <div class="form-group">
                        <label for="unofficail_manager">Unofficial Manager</label>
                        <input type="text" class="form-control" id="unofficail_manager" name="unofficail_manager" value="{{ $lead->unofficail_manager }}">
                    </div>
                    <div class="form-group">
                        <label for="beneficiary">Beneficiary</label>
                        <input type="text" class="form-control" id="beneficiary" name="beneficiary" value="{{ $lead->beneficiary }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $lead->address }}">
                    </div>
                    <div class="form-group">
                        <label for="neighborhood">Neighborhood</label>
                        <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ $lead->neighborhood }}">
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $lead->zip_code }}">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control" id="city" name="city" required>
                            @foreach ($cities as $city )
                                <option value="{{ $city->id }}" {{ $lead->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control" id="state" name="state" required>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}" {{ $lead->state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country" required>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}" {{ $lead->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ine_file">INE File</label>
                        <input type="file" class="form-control" id="ine_file" name="ine_file">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="active" {{ $lead->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $lead->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lead_agent_id">Lead Agent</label>
                        <select class="form-control" id="lead_agent_id" name="lead_agent_id" required>
                            @foreach ($agents as $agent)
                                <option value="{{ $agent->id }}" {{ $lead->lead_agent_id == $agent->id ? 'selected' : '' }}>{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="source">Source</label>
                        <select class="form-control" id="source" name="source" required>
                            <option value="facebook" {{ $lead->source == 'facebook' ? 'selected' : '' }}>Facebook</option>
                            <option value="instagram" {{ $lead->source == 'instagram' ? 'selected' : '' }}>Instagram</option>
                            <option value="whatsapp" {{ $lead->source == 'whatsapp' ? 'selected' : '' }}>Whatsapp</option>
                            <option value="google" {{ $lead->source == 'google' ? 'selected' : '' }}>Google</option>
                            <option value="other" {{ $lead->source == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes">{{ $lead->notes }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection