<div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="block_number">Manzana</label>
                <input id="block_number" type="number" min="1" value="" class="form-control"
                    wire:model='block_number'>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="lote_number">Lote</label>
                <input id="lote_number" type="number" min="1" value="" class="form-control"
                    wire:model='lote_number'>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="price">Precio</label>
                <input id="price" type="text" class="form-control" wire:model.live='price'>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="size">Tamaño m<sup>2</sup></label>
                <input id="size" type="text" value="" class="form-control" wire:model='lote_size'>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="birthDay">Plan de financiamiento</label>
                <select id="birthDay" class="form-control" wire:model.live='payment_plan_id'>
                    <option value="-1">Contado</option>
                    @foreach ($development->paymentPlans as $plan)
                        <option wire:key="{{ $plan->id }}" value="{{ $plan->id }}">{{ $plan->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="payment_down">Enganche</label>
                <input id="payment_down" type="text" value="" class="form-control" wire:model.live='payment_down'>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="payment_monthly">Mensualidades</label>
                <input id="payment_monthly" type="text" value="" class="form-control"
                    wire:model='payment_monthly'>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="anuality">Anualidades</label>
                <input id="anuality" type="text" value="" class="form-control" wire:model='anuality'>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" wire:click='calculate'>Calcular</button>
</div>
