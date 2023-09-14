<div class="modal fade" id="addNewLead">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAddClient">
                    <div class="form-group">
                        <label for="firstName">Nombre</label>
                        <input type="text" name="firstName" class="form-control" wire:model="firstName">
                        <div>
                            @error('firstName')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName">Apellidos</label>
                        <input type="text" name="lastName" class="form-control" wire:model="lastName">
                    </div>

                    <div class="form-group">
                        <label for="birthDay">Fecha de nacimiento</label>
                        <input type="text" name="birthDay" class="form-control" wire:model="birthDay">
                    </div>

                    <div class="form-group">
                        <label for="birthPlace">Lugar de nacimiento</label>
                        <input type="text" name="birthPlace" class="form-control" wire:model="birthPlace">
                    </div>

                    <div class="form-group">
                        <label for="maritalStatus">Estado civil</label>
                        <input type="text" name="maritalStatus" class="form-control" wire:model="maritalStatus">
                    </div>

                    <div class="form-group">
                        <label for="occupation">Ocupación</label>
                        <input type="text" name="occupation" class="form-control" wire:model="occupation">
                    </div>

                    <div class="form-group">
                        <label for="unofficialManager">Gestor Oficioso</label>
                        <input type="text" name="unofficialManager" class="form-control"
                            wire:model="unofficialManager">
                    </div>

                    <div class="form-group">
                        <label for="beneficiary">Beneficiario</label>
                        <input type="text" name="beneficiary" class="form-control" wire:model="beneficiary">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" wire:model="email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone">
                    </div>

                    <div class="form-group">
                        <label for="country">Pais</label>
                        <input type="text" name="country" class="form-control" wire:model="country">
                    </div>

                    <div class="form-group">
                        <label for="state">Estado</label>
                        <input type="text" name="state" class="form-control" wire:model="state">
                    </div>

                    <div class="form-group">
                        <label for="city">Ciudad</label>
                        <input type="text" name="city" class="form-control" wire:model="city">
                    </div>

                    <div class="form-group">
                        <label for="street">Dirección</label>
                        <input type="text" name="street" class="form-control" wire:model="street">
                    </div>

                    <div class="form-group">
                        <label for="zipCode">Codigo Postal</label>
                        <input type="text" name="zipCode" class="form-control" wire:model="zipCode">
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="save">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
