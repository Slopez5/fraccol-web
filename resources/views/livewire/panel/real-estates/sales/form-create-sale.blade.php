<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar Venta</h3>
    </div>
    <div class="card-body">
        <div class="option-lead">
            <x-panel.real-estates.sales.manual-lead />
        </div>
        <form wire:submit='save'>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstName">Nombres</label>
                        <input type="text" class="form-control" wire:model='lead.first_name' value="{{$lead->first_name}}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastName">Apellidos</label>
                        <input type="text" class="form-control" wire:model='lead.last_name' value="{{$lead->last_name}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="birthDay">Fecha de nacimiento</label>
                        <input type="date" class="form-control" wire:model='lead.birthDay'   value="{{$lead->birthDay}}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="birthPlace">Lugar de nacimiento</label>
                        <input type="text" class="form-control" wire:model='lead.birthPlace' value="{{$lead->birthPlace}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="maritalStatus">Estado Civil</label>
                        <input type="text" class="form-control" wire:model='lead.maritalStatus' value="{{$lead->maritalStatus}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Ocupación</label>
                        <input type="text" class="form-control" wire:model='lead.occupation' value="{{$lead->occupation}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Gestor Oficioso</label>
                        <input type="text" class="form-control" wire:model='lead.unofficialManager' value="{{$lead->unofficialManager}}">
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="client">Beneficiario</label>
                        <input type="text" class="form-control" wire:model='lead.beneficiary' value="{{$lead->beneficiary}}">

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Teléfono</label>
                        <input type="text" class="form-control" wire:model='lead.phone' value="{{$lead->phone}}">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">Correo electronico</label>
                        <input type="text" class="form-control" wire:model='lead.email' value="{{$lead->email}}">
                    </div>
                </div>
            </div>
            ` <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="client">INE</label>
                        <input type="file" class="form-control" wire:model='lead.ine_file' value="{{$lead->ine_file}}">
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
