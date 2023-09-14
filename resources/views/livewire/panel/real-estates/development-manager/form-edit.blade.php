<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar Oficina</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('realEstate.developmentManager.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="username">usuario</label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}">
            </div>
            <div class="form-group">
                <label for="first_name">Nombres</label>
                <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
            </div>
            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" value="">
            </div>
           
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>