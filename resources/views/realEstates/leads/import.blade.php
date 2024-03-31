@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12">
                <div class="card-header">
                    <h4 class="card-title">Leads</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('realEstate.lead.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div
                            class="form-group
                            @error('file')
                                has-error
                            @enderror">
                            <label for="file">File</label>
                            <input type="file" name="file" class="form-control">
                            @error('file')
                                <span
                                    class="help-block
                                    text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>active</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>teléfono</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($leadPaginate as $lead)
                                    <tr>
                                        <td><input type="checkbox" name="leads[]" id="lead_{{ $lead['id'] }}"
                                                value="{{ $lead['id'] }}" checked></td>
                                        <td>{{ $lead['first_name'] }}</td>
                                        <td>{{ $lead['last_name'] }}</td>
                                        <td>{{ $lead['phone'] }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @if (empty($leadPaginate))
                            <div class="alert alert-warning">
                                No hay registros
                            </div>
                        @else
                            {{ $leadPaginate->links('pagination::bootstrap-4', ['url' => '/lead/import']) }}
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
