@extends('layouts.real_estate.real_estates')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ventas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('realEstate.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Ventas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @livewire('panel.real-estates.sales.form-create-sale')
        </div>
        @livewire('panel.real-estates.sales.modal.add-client')
    </div>
@endsection

@section('extra-scripts')
    <script>
        window.onload = function() {
            var object = document.getElementById("blueprint");
            var svgDocument = object.contentDocument;
            var lotes = svgDocument.getElementsByClassName("lote");

            for (let i = 0; i < lotes.length; i++) {
                lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
            }


            for (let i = 0; i < lotes.length; i++) {
                lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
                lotes[i].addEventListener('mouseleave', function() {
                    lotes[i].setAttribute("style", "fill:white; opacity: 0.1;");
                });

                lotes[i].addEventListener('mouseover', function() {
                    lotes[i].setAttribute("style", "fill:aqua; opacity: 0.5;");
                    Livewire.dispatch('select-lote', [
                        {loteString: lotes[i].id},

                        {area: lotes[i].dataset.area}

                    ]);
                });
            };

        }

        Livewire.on('select-lead', ({
            user
        }) => {
            $('#addNewLead').modal('hide');
        });

        Livewire.on('next-developments-tab', () => {
            $("#developments-tab").tab("show");
        });

        Livewire.on('next-sales-tab', () => {
            $("#sales-tab").tab("show");
        });

        Livewire.on('back-developments-tab', () => {
            $("#developments-tab").tab("show");
        });

        Livewire.on('back-leads-tab', () => {
            $("#leads-tab").tab("show");
        });
    </script>
@endsection
