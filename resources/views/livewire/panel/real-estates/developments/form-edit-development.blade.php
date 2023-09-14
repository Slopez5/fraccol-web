<div class="card">
    <div class="card-header">
        <h3 class="card-title">Editar Fraccionamiento</h3>
    </div>
    <div class="card-body">
        <form name="editDevelopment" id="editDevelopment" action="{{ route('realEstate.development.update', $development->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $development->name }}">
            </div>
            <div class="form-group">
                <label for="location">Ubicación</label>
                <input type="text" name="location" class="form-control" value="{{ $development->location }}">
            </div>
            <div class="form-group">
                <label for="totalLand">Area total</label>
                <input type="text" name="totalLand" class="form-control"
                    value="{{ $development->total_land_area }}">
            </div>
            <div class="form-group">
                <label for="totalLots">Lotes totales</label>
                <input type="text" name="totalLots" class="form-control"
                    value="{{ $development->total_lots }}">
            </div>
            <div class="form-group">
                <label for="availableLots">Lotes disponibles</label>
                <input type="text" name="availableLots" class="form-control"
                    value="{{ $development->available_lots }}">
            </div>
            <div class="form-group">
                <label for="description">Descripción corta</label>
                <textarea form="editDevelopment" name="description" class="form-control" cols="30" rows="10">{{ $development->sort_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="fullDescription">Descripción completa</label>
                <textarea form="editDevelopment" name="fullDescription" class="form-control" cols="30" rows="10">{{ $development->full_description }}</textarea>
            </div>
            <div class="form-group">
                <label for="blueprint">Plano</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="blueprint" class="custom-file-input" id="blueprint">
                        <label class="custom-file-label" for="blueprint">Plano del fraccionamiento</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>