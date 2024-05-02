@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Permissions</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->id }}</td>
                                    <td>{{ $expense->name }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.expense.edit', $expense->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('realEstate.expense.show', $expense->id) }}"><i
                                                class="fas fa-eye"></i></a>
                                        <form action="{{ route('realEstate.expense.delete', $expense->id) }}" method="POST"
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
                <a href="{{ route('realEstate.expense.create') }}" class="btn btn-success">Create Permission</a>
            </div>
        </div>
    </div>
@endsection