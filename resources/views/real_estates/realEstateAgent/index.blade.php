@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Vendedores
            <small>Listado de Vendedores registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
            <livewire:panel.real-estates.real-estate-agents.table-real-estate-agents :users="$users"/>
        </div>
    </div>
@endsection
