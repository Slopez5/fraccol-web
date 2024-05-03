@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Real Estate Branch</h1>
                <form action="{{ route('realEstate.settings.realEstateBranch.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" name="street" id="street" class="form-control">
                        @error('street')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="neighborhood">Neighborhood</label>
                        <input type="text" name="neighborhood" id="neighborhood" class="form-control">
                        @error('neighborhood')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control">
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control">
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control">
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" name="zip_code" id="zip_code" class="form-control">
                        @error('zip_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Create Real Estate Branch</button>
                </form>
            </div>
        </div>
    </div>
@endsection
