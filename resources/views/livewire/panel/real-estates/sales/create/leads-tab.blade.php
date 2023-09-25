<div>
    <div class="option-lead">
        <x-panel.real-estates.sales.manual-lead />
    </div>
    <form>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstName">Nombres</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->first_name }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastName">Apellidos</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->last_name }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="birthDay">Fecha de nacimiento</label>
                    <input type="date" class="form-control" value="{{ $leadSelected->birthDay }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="birthPlace">Lugar de nacimiento</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->birthPlace }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="maritalStatus">Estado Civil</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->maritalStatus }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="client">Ocupación</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->occupation }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="client">Gestor Oficioso</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->unofficialManager }}">
                </div>
            </div>
            <div class="col">

                <div class="form-group">
                    <label for="client">Beneficiario</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->beneficiary }}">

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="client">Teléfono</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->phone }}">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="client">Correo electronico</label>
                    <input type="text" class="form-control" value="{{ $leadSelected->email }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="client">INE</label>
                    <input type="file" class="form-control" value="{{ $leadSelected->ine_file }}">
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
        <div class="row justify-content-between">
            <div class="col-auto">

            </div>
            <div class="col-auto">
                <button type="button" wire:click='next' class="btn btn-primary">Siguiente</button>
            </div>


        </div>
    </form>
</div>
