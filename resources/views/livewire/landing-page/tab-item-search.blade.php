<div class="tab-pane fade {{ $status }}" id="{{ $id }}">
    <div class="rld-main-search">
        <div class="row">
            <div class="rld-single-input">
                <input type="text" placeholder="Buscar">
            </div>
            <div class="rld-single-select ml-22">
                <select class="select single-select">
                    <option value="1">Tipo de propiedad</option>
                    @if ($dataTabItem)
                        @foreach ($dataTabItem['propertyType'] as $index => $propertyType)
                            <option value="{{ $index }}">{{ $propertyType }}</option>
                        @endforeach
                    @endif

                </select>
            </div>
            <div class="rld-single-select">
                <select class="select single-select mr-0">
                    <option value="1">Ubicación</option>
                    @if ($dataTabItem)
                        @foreach ($dataTabItem['location'] as $index => $propertyType)
                            <option value="{{ $index }}">{{ $propertyType }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="dropdown-filter"><span>Busqueda avanzada</span></div>
            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                <a class="btn btn-yellow" href="#">Buscar</a>
            </div>
            <div class="explore__form-checkbox-list full-filter">
                <div class="row">
                    @if ($dataTabItem['bedrooms'] ?? null !== null)
                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                            <!-- Form Bedrooms -->
                            <div class="form-group beds">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i
                                            class="fa fa-bed" aria-hidden="true"></i>
                                        Recamaras</span>
                                    <ul class="list">
                                        @for ($i = 1; $i <= $dataTabItem['bedrooms']; $i++)
                                            <li data-value="{{ $i }}" class="option">{{ $i }}
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Form Bedrooms -->
                        </div>
                    @endif
                    @if ($dataTabItem['bathrooms'] ?? null !== null)
                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                            <!-- Form Bathrooms -->
                            <div class="form-group bath">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i
                                            class="fa fa-bath" aria-hidden="true"></i>
                                        Baños</span>
                                    <ul class="list">
                                        @for ($i = 1; $i <= $dataTabItem['bathrooms']; $i++)
                                            <li data-value="{{ $i }}" class="option">{{ $i }}
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Form Bathrooms -->
                        </div>
                    @endif
                    <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                        <!-- Price Fields -->
                        <div class="main-search-field-2">
                            <!-- Area Range -->
                            <div class="range-slider">
                                <label>Area Size</label>
                                <div id="area-range-{{ $type }}" data-min="0" data-max="1300" data-unit="m2">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <br>
                            <!-- Price Range -->
                            <div class="range-slider">
                                <label>Price Range</label>
                                <div id="price-range-{{ $type }}" data-min="0" data-max="600000"
                                    data-unit="$">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    @foreach ($dataTabItem['amenities'] as $index => $amenity)
                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                @foreach ($amenity as $index => $amenityItem)
                                    <input id="check-{{ $type }}-{{ $amenityItem['id'] }}" type="checkbox"
                                        name="check-{{ $type }}">
                                    <label
                                        for="check-{{ $type }}-{{ $amenityItem['id'] }}">{{ $amenityItem['name'] }}</label>
                                @endforeach
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
