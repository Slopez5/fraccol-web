<div class="row portfolio-items">
    @foreach ($developments as $index => $development)
        <div wire:key="{{$index}}" class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
            <div class="project-single" data-aos="fade-right">
                <div class="project-inner project-head">
                    <div class="homes">
                        <a href="single-property-1.html" class="homes-img">
                            @if ($development['isFeatured'])
                                <div class="homes-tag button alt featured">Destacada</div>
                            @endif
                            @if ($development['isSale'])
                                <div class="homes-tag button alt sale">Venta</div>
                            @endif

                            <img src="{{ asset($development['image']) }}" alt="home-1" class="img-responsive">
                        </a>
                    </div>
                    <div class="button-effect">
                        @if ($development['hasDetails'])
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                        @endif
                        @if ($development['hasVideo'])
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                        @endif
                        @if ($development['hasGallery'])
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        @endif



                    </div>
                </div>
                <!-- homes content -->
                <div class="homes-content">
                    <!-- homes address -->
                    <h3><a href="single-property-1.html">{{ $development['title'] }}</a></h3>
                    <p class="homes-address mb-3">
                        <a href="single-property-1.html">
                            <i class="fa fa-map-marker"></i><span>{{ $development['location'] }}</span>
                        </a>
                    </p>
                    <!-- homes List -->
                    <ul class="homes-list clearfix pb-3">
                        <li class="the-icons">
                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                            <span>{{ $development['size'] }} m<sup>2</sup></span>
                        </li>
                        @foreach ($development['services'] as $indexService => $service)
                            <li class="the-icons">
                                <i class="{{$service["icon"]}} mr-2" aria-hidden="true"></i>
                                <span>{{$service["name"]}}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="price-properties footer pt-3 pb-0">
                        <h3 class="title mt-3">
                            <a href="single-property-1.html">$ {{ $development['price'] }}</a>
                        </h3>
                        <div class="compare">
                            @if ($development['hasCompare'])
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                            @endif
                            @if ($development['hasShare'])
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                            @endif
                            @if ($development['hasFavorite'])
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
