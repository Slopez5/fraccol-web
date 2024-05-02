@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Invoices</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Real Estate</th>
                                <th>Client</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->id }}</td>
                                    <td>{{ $invoice->realEstate->name }}</td>
                                    <td>{{ $invoice->client->first_name }}</td>
                                    <td>{{ $invoice->amount }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.invoice.edit', $invoice->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.invoice.show', $invoice->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.invoice.delete', $invoice->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 padding-0 bg-transparent text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <a href="{{ route('realEstate.invoice.create') }}" class="btn btn-success">Create Invoice</a>
            </div>
        </div>
    </div>
@endsection
