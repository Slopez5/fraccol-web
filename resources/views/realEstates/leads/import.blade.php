@extends('layouts.dashboard.template')

@section('content')
    <div class="container">
        <div class="row">
            <x-card :title="'Leads'">
                <x-body>
                    <form action="{{ route('realEstate.lead.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group
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
                        <x-table :headers="['active', 'Nombres', 'Apellidos', 'teléfono']" :dataCell="$leadPaginate">
                        </x-table>
                        @if (empty($leadPaginate))
                            <div class="alert alert-warning">
                                No hay registros
                            </div>
                        @else
                            {{ $leadPaginate->links('pagination::bootstrap-4', ['url' => '/lead/import']) }}
                        @endif
                    </form>
                </x-body>
            </x-card>
        </div>
    </div>
@endsection
