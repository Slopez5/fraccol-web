@extends('layouts.dashboard.template')

@section('content')
    {{-- Map Interactive SVG in Development --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card :title="'Mapa de desarrollo'">
                    <x-slot:body>
                        <livewire:developments.show.map-interactive :development="$development" />
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>

    {{-- Form to calculate lotes --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card :title="'Calculadora de lotes'">
                    <x-slot:body>
                        <livewire:developments.show.form-price-simulator :development="$development" />
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>
@endsection