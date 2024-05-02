@extends('layouts.dashboard.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Payment</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('realEstate.property.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
