<div>
    <div class="row">
        <div class="col">
            <div>
                <object id="blueprint" data="{{asset('images/planos/El_encanto_2.svg')}}" type="image/svg+xml">
                  </object>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="Development">Fraccionamiento</label>
                            <select name="development" id="selectDevelopment" class="form-control">
                                @foreach ($developments as $index => $development)
                                    <option value="{{$development->id}}">{{$development->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="lastName">Manzana</label>
                            <input type="number" min="1" value="{{$block}}" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="firstName">Lote</label>
                            <input type="number" min="1" value="{{$lote}}" class="form-control">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstName">Precio</label>
                            <input type="text" value="{{$precio}}" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="firstName">Tamaño m<sup>2</sup></label>
                            <input type="text" value="{{$area}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="birthDay">Plan de financiamiento</label>
                            <select wire:model='plan_financing_id_selected' class="form-control">
                                @foreach ($plan_financing as $index => $plan)
                                <option wire:key='{{$plan["id"]}}' value="{{$plan["id"]}}">{{$plan["name"]}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="birthPlace">Enganche</label>
                            <input type="text" value="{{$enganche}}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <button type="button" wire:click='back' class="btn btn-primary">Atras</button>
                    </div>
                    <div class="col-auto">
                        <button type="button" wire:click='saveDevelopment' class="btn btn-primary">Guardar</button>
                        <button type="button" wire:click='next' class="btn btn-primary">Siguiente</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Lote</th>
                        <th>Manzana</th>
                        <th>Precio</th>
                        <th>Plan de financiamiento</th>
                        <th>Enganche</th>
                        <th>Mensualidades</th>
                    </tr>
                </thead>
               <tbody>
                <tr>
                    <td>{{$lote}}</td>
                    <td>{{$block}}</td>
                    <td>{{$precio}}</td>
                    <td>{{$plan_financing_selected["name"]}}</td>
                    <td>{{$enganche}}</td>
                    <td>{{$mensualidad}}</td>
                </tr>
               </tbody>

            </table>
        </div>
    </div>

</div>
