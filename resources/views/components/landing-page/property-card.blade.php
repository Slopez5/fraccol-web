<div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single" >
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

                                <div class="homes-price">{{ $property['price'] }}</div>
                                <img src="{{ asset('findhouses/images/blog/b-11.jpg') }}" alt="home-1"
                                    class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            @if ($property['hasDetails'])
                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            @endif
                            @if ($property['hasVideo'])
                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            @endif
                            @if ($property['hasGallery'])
                                <a href="single-property-2.html" class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
                            @endif
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
                                <span>{{ $property['area'] }}m<sup>2</sup></span>
                            </li>
                            @foreach ($property['services'] as $index => $service)
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                    <span>{{ $service['name'] }}</span>
                                </li>
                            @endforeach

                        </ul>
                        <div class="footer">
                            <a href="agent-details.html">
                                <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2"> Lisa Jhonson
                            </a>
                            <span>2 months ago</span>
                        </div>
                    </div>
                </div>
            </div>