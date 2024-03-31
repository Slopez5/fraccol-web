@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Asignar Plan de Pago</h1>
                <form action="{{ route('realEstate.development.paymentPlan.store', $development->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="lote_type_id">Tipo de lote<span>*</span></label>
                        <select name="lote_type_id" id="lote_type_id" class="form-control">
                            @foreach ($loteTypes as $loteType)
                                <option value="{{ $loteType->id }}">{{ $loteType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment_plan_id">Plan de pago<span>*</span></label>
                        <select name="payment_plan_id" id="payment_plan_id" class="form-control">
                            @foreach ($paymentPlans as $paymentPlan)
                                <option value="{{ $paymentPlan->id }}">{{ $paymentPlan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="down_payment">Enganche<span>*</span></label>
                        <input type="text" name="down_payment" id="down_payment" class="form-control">
                        @error('down_payment')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Precio<span>*</span></label>
                        <input type="text" name="price" id="price" class="form-control">
                        @error('price')
                            <div class="alert alert-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection