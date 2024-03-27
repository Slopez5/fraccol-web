<div class="slick-lancers">
    @foreach ($properties as $index => $property)
        <div class="agents-grid" data-aos="fade-up" data-aos-delay="{{ $property['delay'] }}">
            <div class="landscapes">
                <div class="project-single">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                @if ($property['isFeatured'])
                                    <div class="homes-tag button alt featured">Featured</div>
                                @endif
                                @if ($property['isSale'])
                                    <div class="homes-tag button alt sale">For Sale</div>
                                @endif
                                <img src="{{ asset($property['image']) }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">{{ $property['name'] }}</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>{{ $property['location'] }}</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>{{ $property['area'] }}</span>
                            </li>
                            @foreach ($property['services'] as $index => $service)
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>{{ $service['name'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="single-property-1.html">$ {{ $property['price'] }}</a>
                            </h3>
                            <div class="compare">
                                @if ($property['hasCompare'])
                                    <a href="#" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                @endif
                                @if ($property['hasShare'])
                                    <a href="#" title="Share">
                                        <i class="flaticon-share"></i>
                                    </a>
                                @endif
                                @if ($property['hasFavorite'])
                                    <a href="#" title="Favorites">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
