<div>

    <div class="row">
        <div class="col">
            <h4>Tipos de Lotes</h4>
        </div>
        <div class="col">
            <a href="">
                Configurar
            </a>
            
        </div>
    </div>
    
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        @foreach ($lot_types as $index => $lotType)
            <label wire:key="{{ $index }}" class="btn btn-default text-center active">
                <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                {{ $lotType->name }}
            </label>
        @endforeach
    </div>
    
    <br>
    <br>
    <div class="row">
        <div class="col">
            <h4>Lotes</h4>
        </div>
        <div class="col">
            <a href="{{route('realEstate.development.lot.index',$development_id)}}">
                Configurar
            </a>
            
        </div>
    </div>
    <div class="form-group">
        <label for="lot">Lote</label>
        <input wire:model.live="lotSize" type="number" name="lot" class="form-control" value="">
    </div>

    <div class="form-group">
        <label for="annuty">Anualidad</label>
        <input wire:model.live="annuty" type="number" name="annuty" class="form-control" value="">
    </div>

    <h4 class="mt-3">Finaciamientos <small>Selecciona uno</small></h4>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
            <span class="text-xl">1</span>
            <br>
            Año
        </label>
        <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
            <span class="text-xl">2</span>
            <br>
            Años
        </label>
        <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
            <span class="text-xl">3</span>
            <br>
            Años
        </label>
        <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
            <span class="text-xl">4</span>
            <br>
            Años
        </label>
    </div>

    <div class="bg-gray py-2 px-3 mt-4">
        <h2 class="mb-0">
            ${{$priceLot}}
        </h2>
        <h3 class="mt-0">
            <small> Enganche $10,000</small>
        </h3>
        <h3 class="mt-0">
            <small> Mensualidad $5,000</small>
        </h3>
        <h4 class="mt-0">
            <small> $80.00 por m<sup>2</sup></small>
        </h4>
    </div>
</div>
