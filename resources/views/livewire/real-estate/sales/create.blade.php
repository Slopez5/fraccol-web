<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Crear Venta</h1>
        </div>
        <div class="col-6" style="padding-top: 10px;">
            <button class="btn btn-primary float-right" wire:click="newSale">Guardar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form wire:submit="newSale">
                @csrf
                <div class="form-group">
                    <label for="development_id">Fraccionamiento</label>
                    <select id="development_id" class="form-control" wire:model.live='development_id'>
                        @foreach ($developments as $development)
                            <option wire:key="{{ $development->id }}" value="{{ $development->id }}">
                                {{ $development->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lead_agent_id">Vendedor</label>
                            <select name="lead_agent_id" id="lead_agent_id" class="form-control">
                                @foreach ($agents as $agent)
                                    <option wire:key="{{ $agent->id }}" value="{{ $agent->id }}">
                                        {{ $agent->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="sale_closer_id">Encargado</label>
                            <select name="sale_closer_id" id="sale_closer_id" class="form-control">
                                @foreach ($closers as $closer)
                                    <option wire:key="{{ $closer->id }}" value="{{ $closer->id }}">
                                        {{ $closer->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lead_id">Cliente</label>
                            <select name="lead_id" id="lead_id" class="form-control">
                                @foreach ($leads as $lead)
                                    <option wire:key="{{ $lead->id }}" value="{{ $lead->id }}">
                                        {{ $lead->first_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="activity_id">Ultima Actividad</label>
                            <select name="activity_id" id="activity_id" class="form-control">
                                @foreach ($activities as $activity)
                                    <option wire:key="{{ $activity->id }}" value="{{ $activity->id }}">
                                        {{ $activity->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lotes">Lotes</label>
                    <select id="lotes" class="form-control"  wire:model.live='loteSelected'>
                        <option value="0">Selecciona un lote</option>
                        @foreach ($lotes as $lote)
                            <option wire:key="{{ $lote->id }}" value="{{ $lote->id }}">
                                {{ $lote->lote_number }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>
    {{-- Loader full screen--}}
    <div wire:loading>
        <div class="loader">
            {{-- Center loading --}}
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero de Lote</th>
                        <th>Manzana</th>
                        <th>Precio</th>
                        <th>Superficie</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lotesSelected as $lote)
                        <tr>
                            <td>{{ $lote->lote_number }}</td>
                            <td>{{ $lote->block }}</td>
                            <td>{{ $lote->price }}</td>
                            <td>{{ $lote->surface }}</td>
                            <td>
                                <button class="btn btn-danger" wire:click="removeLot({{ $lote->id }})">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
