@extends('layouts.dashboard')

@section('content')
    <div class="row" style="padding-top:10px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Chatbot</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group col-12">
                            <label for="question">Pregunta </label>
                            <input type="text" class="form-control form-control-border" id="question"
                                placeholder="Pregunta 1">
                        </div>
                        <div class=" d-flex justify-content-end" style="padding-top:5px">
                            <div class="input-group col-11">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="addOption()"><i class="fas fa-trash"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class=" d-flex justify-content-end" style="padding-top:5px">
                            <div class="input-group col-11">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="addOption()"><i class="fas fa-plus"></i></span>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
