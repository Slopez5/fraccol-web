<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agregar Venta</h3>
                </div>
                <div class="card-body">
                    <form  method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="client">Cliente</label>
                            <select name="client" id="selectClient" class="form-control">

                            </select>
                            <div class="addLead text-right">
                                <a href="#" data-toggle="modal" data-target="#addNewLead">
                                    Nuevo cliente
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="developmentAgent">Vendedor</label>
                            <select name="developmentAgent" id="selectDevelopmentAgent" class="form-control">

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="saleCloser">Cerrador</label>
                            <select name="saleCloser" id="selectSaleCloser" class="form-control">

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @livewire('panel.real-estates.sales.modal.add-client')

</div>
