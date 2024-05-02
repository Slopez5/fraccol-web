@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4>Expense Categories</h4>
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
                            @foreach ($expenseCategories as $expenseCategory)
                                <tr>
                                    <td>{{ $expenseCategory->id }}</td>
                                    <td>{{ $expenseCategory->name }}</td>
                                    <td>
                                        <a href="{{ route('realEstate.settings.expenseCategories.edit', $expenseCategory->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('realEstate.settings.expenseCategories.delete', $expenseCategory->id) }}"
                                            method="POST" style="display: inline;">
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
                <a href="{{ route('realEstate.settings.expenseCategories.create') }}" class="btn btn-success">Create Expense Category</a>
            </div>
        </div>
    </div>
@endsection