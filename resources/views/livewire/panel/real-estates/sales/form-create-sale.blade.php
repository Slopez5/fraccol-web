<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar Venta</h3>
    </div>
    <div class="card-body">
        <div class="option-lead">
            <x-panel.real-estates.sales.manual-lead wire:click='openModal' />
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Nombres</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="client">Apellidos</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Fecha de nacimiento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="client">Lugar de nacimiento</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Estado Civil</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Ocupación</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Gestor Oficioso</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="client">Beneficiario</label>
                        <input type="text" class="form-control">

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Teléfono</label>
                        <input type="text" class="form-control">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Correo electronico</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            ` <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">INE</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="developmentAgent">Vendedor</label>
                        <select name="developmentAgent" id="selectDevelopmentAgent" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="saleCloser">Cerrador</label>
                        <select name="saleCloser" id="selectSaleCloser" class="form-control">
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>
