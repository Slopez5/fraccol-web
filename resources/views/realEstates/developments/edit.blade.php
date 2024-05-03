@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Development</h1>
                <form action="{{ route('realEstate.development.update', $development->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="real_estate_branch_id">Real Estate Branch</label>
                        <select name="real_estate_branch_id" id="real_estate_branch_id" class="form-control">
                            @foreach ($realEstateBranches as $realEstateBranch)
                                <option value="{{ $realEstateBranch->id }}" @if ($realEstateBranch->id == $development->real_estate_branch_id) selected @endif>{{ $realEstateBranch->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="development_type_id">Development Type</label>
                        <select name="development_type_id" id="development_type_id" class="form-control">
                            @foreach ($developmentTypes as $developmentType)
                                <option value="{{ $developmentType->id }}" @if ($developmentType->id == $development->development_type_id) selected @endif>{{ $developmentType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $development->name }}">
                        @error('name')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="blueprint">Blueprint</label>
                        <input type="file" name="blueprint" id="blueprint" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="location">Location<span>*</span></label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $development->location }}">
                        <a href="https://www.google.com/maps" target="_blank" class="btn btn-primary mt-2"> Open Google Maps
                        </a>
                        @error('location')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_land_area">Total Land Area<span>*</span></label>
                        <input type="text" name="total_land_area" id="total_land_area" class="form-control" value="{{ $development->total_land_area }}">
                        @error('total_land_area')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_lots">Total Lots<span>*</span></label>
                        <input type="text" name="total_lots" id="total_lots" class="form-control" value="{{ $development->total_lots }}">
                        @error('total_lots')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="available_lots">Available Lots<span>*</span></label>
                        <input type="text" name="available_lots" id="available_lots" class="form-control" value="{{ $development->available_lots }}">
                        @error('available_lots')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $development->start_date }}">
                       
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $development->end_date }}">
                       
                    </div>
                    <div class="from-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" class="form-control" rows="3">{{ $development->short_description }}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="full_description">Full Description</label>
                        <textarea name="full_description" id="full_description" class="form-control" rows="5">{{ $development->full_description }}</textarea>
                        
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if ($development->status == 1) selected @endif>Active</option>
                            <option value="0" @if ($development->status == 0) selected @endif>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Development</button>
                </form>
            </div>
        </div>
    </div>
@endsection