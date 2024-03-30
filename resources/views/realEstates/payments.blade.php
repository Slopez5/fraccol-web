@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Payments</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Invoice</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->invoice->id }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.payment.edit', $payment->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <a href="{{ route('realEstate.payment.show', $payment->id) }}"
                                            class="btn btn-info">Show</a>
                                        <form action="{{ route('realEstate.payment.delete', $payment->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <a href="{{ route('realEstate.payment.create') }}" class="btn btn-success">Create Payment</a>
            </div>
        </div>
    </div>
@endsection