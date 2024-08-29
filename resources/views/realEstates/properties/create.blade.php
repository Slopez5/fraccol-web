@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Create Property</h4>
                <!-- Form to create a property with images and other details -->
                <form action="{{ route('realEstate.property.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- image upload -->
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input type="file" name="images[]" id="images" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <label for="development_id">Development</label>
                        <select name="development_id" id="development_id" class="form-control">
                            <option value="">Select Development</option>
                            @foreach ($developments as $development)
                                <option value="{{ $development->id }}">{{ $development->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lote_id">Lot</label>
                        <select name="lote_id" id="lote_id" class="form-control">
                            <option value="">Select Lot</option>
                            @foreach ($lotes as $lote)
                                <option value="{{ $lote->id }}">L{{ $lote->lote_number }}M{{$lote->block_number}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="property_type_id">Property Type</label>
                        <select name="property_type_id" id="property_type_id" class="form-control">
                            <option value="">Select Property Type</option>
                            @foreach ($propertyTypes as $propertyType)
                                <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" name="zip_code" id="zip_code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="neighborhood">Neighborhood</label>
                        <input type="text" name="neighborhood" id="neighborhood" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <select name="country" id="country" class="form-control">
                            @foreach ($countries as $country)
                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select name="state" id="state" class="form-control">
                            @foreach ($states as $state)
                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" id="city" class="form-control">
                            @foreach ($cities as $city)
                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea name="notes" id="notes" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Property</button>
                </form>
            </div>
        </div>
    </div>
@endsection


