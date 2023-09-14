@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Oficinas
            <small>Listado de Oficinas registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
            <livewire:panel.real-estates.branches.table-branches :branches="$branches" />
        </div>
    </div>
@endsection
