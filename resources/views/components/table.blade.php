<div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                @foreach ($headers as $header)
                    <th class="">{{ $header }}</th>
                @endforeach
                @isset($action)
                    <th>Acciones</th>
                @endisset
            </tr>
        </thead>
        <tbody>
            @foreach ($dataCell as $key => $row)
                <tr>
                    @foreach ($row->toArray() as $index => $value)
                        {{-- Verify if $value different array --}}
                        @if (!is_array($value))
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach
                    @isset($action)
                        <td>
                            {{-- Actions with icons --}}
                            {{ $action($row) }}
                        </td>
                    @endisset
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
