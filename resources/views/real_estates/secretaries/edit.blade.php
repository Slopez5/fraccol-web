@extends('layouts.real_estate.real_estates')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
        <livewire:panel.real-estates.secretaries.form-edit :user="$user"/>
    </div>
</div>
@endsection
