@extends('layouts.template')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Fraccionamientos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Fraccionamientos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Fraccionamientos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                @foreach ($developments as $index => $development)
                                    <div class="col-4">
                                        @livewire('development-card-view', ['development' => $development], key($development->id))
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
