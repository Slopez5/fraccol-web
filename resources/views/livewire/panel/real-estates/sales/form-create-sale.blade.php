<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar Venta</h3>
        <div class="card-tools">
            <button class="btn btn-primary" wire:click='clearForm'>
                <i class="fas fa-solid fa-eraser"></i>
            </button>

        </div>
    </div>
    <div class="card-body">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" wire:ignore>
                <button class="nav-link active" id="leads-tab" data-toggle="tab" data-target="#leads" type="button"
                    role="tab" aria-controls="leads" aria-selected="true">Prospecto</button>
            </li>
            <li class="nav-item" role="presentation" wire:ignore>
                <button class="nav-link" id="developments-tab" data-toggle="tab" data-target="#developments"
                    type="button" role="tab" aria-controls="developments" aria-selected="false">Terrenos</button>
            </li>
            <li class="nav-item" role="presentation" wire:ignore>
                <button class="nav-link disabled" id="sales-tab" data-toggle="tab" data-target="#sales" type="button"
                    role="tab" aria-controls="sales" aria-selected="false">Confirmar Venta</button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="leads" role="tabpanel" aria-labelledby="leads-tab" wire:ignore.self>
                @livewire('panel.real-estates.sales.create.leads-tab')
            </div>
            <div class="tab-pane" id="developments" role="tabpanel" aria-labelledby="developments-tab"
                wire:ignore.self>
                @livewire('panel.real-estates.sales.create.developments-tab')
            </div>
            <div class="tab-pane" id="sales" role="tabpanel" aria-labelledby="sales-tab" wire:ignore.self>
                @livewire('panel.real-estates.sales.create.sales-tab')
            </div>
        </div>

    </div>
</div>
</div>
