@extends('layouts.real_estate.real_estates')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Oficinas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.branches.index') }}">Oficinas</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <livewire:panel.real-estates.branches.form-edit :branch="$branch" />
        </div>
    </div>
@endsection
