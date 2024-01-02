<div class="card card-widget widget-user" wire:click="goToDevelopment()">
    <div class="widget-user-header text-white"
        style="background: url('{{ asset('images/developments/el_encanto_II/Foto1.jpeg') }}') center center;">
        <h3 class="widget-user-username text-right">{{ $development->name }}</h3>

    </div>
    <div class="widget-user-image">
        <img src="{{ asset('images/Logo.png') }}" alt="" class="img-circle">
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $development->total_land_area }}</h5>
                    <span class="description-text">Area</span>
                </div>
            </div>
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $development->total_lots }}</h5>
                    <span class="description-text">Lotes</span>
                </div>
            </div>
            <div class="col-sm-4 border-right">
                <div class="description-block">
                    <h5 class="description-header">{{ $development->available_lots }}</h5>
                    <span class="description-text">Disponibles</span>
                </div>
            </div>
        </div>
    </div>
</div>
