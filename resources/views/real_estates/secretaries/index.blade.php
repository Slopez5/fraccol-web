@extends('layouts.real_estate.real_estates')

@section('content')
<section class="content-header">
    <h1>
        Secretarias
        <small>Listado de Secretarias registradas</small>
    </h1>
</section>

<div class="row">
    <div class="col-md-12">
        <livewire:panel.real-estates.secretaries.table-secretaries :users="$users"/>
    </div>
</div>
@endsection