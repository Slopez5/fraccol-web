@extends('layouts.real_estate.real_estates')

@section('content')
    <section class="content-header">
        <h1>
            Desarrollos inmobiliarios
            <small>Listado de Desarrollos inmobiliarios registradas</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-12">
        <livewire:panel.real-estates.developments.table-developments :developments="$developments" />
        </div>
    </div>
@endsection
