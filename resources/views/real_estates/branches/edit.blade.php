@extends('layouts.real_estate.real_estates')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-12">
            <livewire:panel.real-estates.branches.form-edit :branch="$branch" />
        </div>
    </div>
@endsection
