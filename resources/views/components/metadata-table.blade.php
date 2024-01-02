<div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metadatas as $index => $metadata)
                <tr>
                    <td>{{ $metadata['key'] }}</td>
                    <td>{{ $metadata['value'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
