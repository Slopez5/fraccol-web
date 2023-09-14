<div class="card">
    <div class="card-header">
        <h3 class="card-title">Encargados de Fraccionamiento</h3>
        <div class="card-tools">
            <a href="{{ route('realEstate.developmentManager.create') }}" class="btn btn-primary btn-sm">
                <span class="fa fa-plus"></span>
            </a>
        </div>

    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Corréo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <a href="{{ route('realEstate.developmentManager.edit', $user->id) }}">
                                <i class="fas fa-solid fa-pen"></i>
                            </a>
                            <a href=""
                                onclick="event.preventDefault(); document.getElementById('deleteDevelopment').submit();">
                                <i class="fas fa-solid fa-trash"></i>
                            </a>
                            <form id="deleteDevelopment"
                                action="{{ route('realEstate.developmentManager.destroy', $user->id) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
