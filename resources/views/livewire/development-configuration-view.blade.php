<div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tipos de Lote</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Precio m<sup>2</sup></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($loteTypes as $loteType)
                                <tr wire:key="{{ $loteType['id'] }}" wire:click="selectLoteType({{ $loteType['id'] }})">
                                    <td>{{ $loteType['id'] }}</td>
                                    <td>{{ $loteType['name'] }}</td>
                                    <td>{{ $loteType['pivot']['price'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Financiamientos</h3>
                </div>
                <div class="card-body">
                    <x-payment-plan-table :paymentPlans="$paymentPlans"></x-payment-plan-table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contratos</h3>
                </div>
                <div class="card-body">
                    <x-contract-table :contracts="$development->contract"></x-contract-table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Metadatos</h3>
                </div>
                <div class="card-body">
                    <x-metadata-table :metadatas="$metadata"></x-metadata-table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lotes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Lote</th>
                                <th>Manzana</th>
                                <th>Area (m<sup>2</sup>)</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($lotes as $lote)
                                <tr wire:key="{{ $lote['id'] }}" wire:click="selectLote({{ $lote['id'] }})">
                                    <td>{{ $lote->id }}</td>
                                    <td>{{ $lote->lot_number }}</td>
                                    <td>{{ $lote->block_number }}</td>
                                    <td>{{ $lote->lot_size }}m<sup>2</sup></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
