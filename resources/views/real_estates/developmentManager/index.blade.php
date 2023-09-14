@extends('layouts.real_estate.real_estates')

@section('content')
<section class="content-header">
    <h1>
        Encargados de Fraccionamiento
        <small>Listado de Encargados de fraccionamiento registradas</small>
    </h1>
</section>

<div class="row">
    <div class="col-md-12">
        <livewire:panel.real-estates.development-manager.table-development-manager :users="$users" />
    </div>
</div>
@endsection