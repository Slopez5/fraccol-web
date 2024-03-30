@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Users</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role->description }}</td>
                                        <td>
                                            <a href="{{ route('realEstate.user.edit', $user->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('realEstate.user.show', $user->id) }}"
                                                class="btn btn-info">Show</a>
                                            <form action="{{ route('realEstate.user.delete', $user->id) }}" method="POST"
                                                style="display: inline;">
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
                <div class="mt-4">
                    <a href="{{ route('realEstate.user.create') }}" class="btn btn-success">Create User</a>
                </div>
            </div>
        </div>
    </div>
@endsection
