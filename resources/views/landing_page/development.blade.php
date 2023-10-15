@extends('layouts.landing_page.template1')


@section('header')
    <div id="header">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="{{ asset('images/SVG/LogoFull.svg') }}" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Listing</a></li>
                        <li><a href="#">Property</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

        </div>
    </div>
@endsection


@section('header-search')
    <section id="hero-area" class="parallax-searchs home17 overlay" data-stellar-background-ratio="0.5"
        style="background: url({{ asset('images/developments/el_encanto_2/Foto1.jpeg') }});">
        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="banner-inner-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-inner">
                                <h1 class="title text-center">Construye el hogar de tus sueños</h1>
                                <h5 class="sub-title text-center">Tenemos el lugar ideal para ti</h5>
                            </div>
                        </div>
                        <!-- Search Form -->
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">Habitacional</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_2">Campestre</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Buscar...">
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Ubicación</option>
                                                        <option value="2">Colima</option>
                                                        <option value="3">Cuauhtemoc</option>
                                                        <option value="4">Villa de Alvarez</option>
                                                        <option value="5">Comala</option>
                                                        <option value="6">Minatitlan</option>
                            
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Buscador Avanzado</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Buscar</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i
                                                                            class="fa fa-home"></i>Property
                                                                        Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For
                                                                            Sale</li>
                                                                        <li data-value="2" class="option">For Rent
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i class="fa fa-bed"
                                                                            aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i class="fa fa-bath"
                                                                            aria-hidden="true"></i>
                                                                        Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div
                                                            class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range" data-min="0" data-max="1300"
                                                                        data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range" data-min="0"
                                                                        data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-2" type="checkbox" name="check">
                                                                <label for="check-2">Air Conditioning</label>
                                                                <input id="check-3" type="checkbox" name="check">
                                                                <label for="check-3">Swimming Pool</label>
                                                                <input id="check-4" type="checkbox" name="check">
                                                                <label for="check-4">Central Heating</label>
                                                                <input id="check-5" type="checkbox" name="check">
                                                                <label for="check-5">Laundry Room</label>
                                                                <input id="check-6" type="checkbox" name="check">
                                                                <label for="check-6">Gym</label>
                                                                <input id="check-7" type="checkbox" name="check">
                                                                <label for="check-7">Alarm</label>
                                                                <input id="check-8" type="checkbox" name="check">
                                                                <label for="check-8">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div
                                                            class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-9" type="checkbox" name="check">
                                                                <label for="check-9">WiFi</label>
                                                                <input id="check-10" type="checkbox" name="check">
                                                                <label for="check-10">TV Cable</label>
                                                                <input id="check-11" type="checkbox" name="check">
                                                                <label for="check-11">Dryer</label>
                                                                <input id="check-12" type="checkbox" name="check">
                                                                <label for="check-12">Microwave</label>
                                                                <input id="check-13" type="checkbox" name="check">
                                                                <label for="check-13">Washer</label>
                                                                <input id="check-14" type="checkbox" name="check">
                                                                <label for="check-14">Refrigerator</label>
                                                                <input id="check-15" type="checkbox" name="check">
                                                                <label for="check-15">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs_2">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i
                                                                            class="fa fa-home"></i>Property
                                                                        Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For
                                                                            Sale</li>
                                                                        <li data-value="2" class="option">For Rent
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i class="fa fa-bed"
                                                                            aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current"><i class="fa fa-bath"
                                                                            aria-hidden="true"></i>
                                                                        Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range-rent" data-min="0"
                                                                        data-max="1300" data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range-rent" data-min="0"
                                                                        data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-16" type="checkbox" name="check">
                                                                <label for="check-16">Air Conditioning</label>
                                                                <input id="check-17" type="checkbox" name="check">
                                                                <label for="check-17">Swimming Pool</label>
                                                                <input id="check-18" type="checkbox" name="check">
                                                                <label for="check-18">Central Heating</label>
                                                                <input id="check-19" type="checkbox" name="check">
                                                                <label for="check-19">Laundry Room</label>
                                                                <input id="check-20" type="checkbox" name="check">
                                                                <label for="check-20">Gym</label>
                                                                <input id="check-21" type="checkbox" name="check">
                                                                <label for="check-21">Alarm</label>
                                                                <input id="check-22" type="checkbox" name="check">
                                                                <label for="check-22">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-23" type="checkbox" name="check">
                                                                <label for="check-23">WiFi</label>
                                                                <input id="check-24" type="checkbox" name="check">
                                                                <label for="check-24">TV Cable</label>
                                                                <input id="check-25" type="checkbox" name="check">
                                                                <label for="check-25">Dryer</label>
                                                                <input id="check-26" type="checkbox" name="check">
                                                                <label for="check-26">Microwave</label>
                                                                <input id="check-27" type="checkbox" name="check">
                                                                <label for="check-27">Washer</label>
                                                                <input id="check-28" type="checkbox" name="check">
                                                                <label for="check-28">Refrigerator</label>
                                                                <input id="check-29" type="checkbox" name="check">
                                                                <label for="check-29">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('recently-properties')
    <section class="recently portfolio bg-white-3">
        <div class="container-fluid recently-slider">
            <div class="section-title">
                <h2>Fraccionamientos</h2>
                <h3>Recientes</h3>
                
            </div>
            <div class="portfolio right-slider">
                <div class="owl-carousel home5-right-slider">
                    <div class="inner-box">
                        <a href="{{route('developmentDetails',1)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                            <div class="recent-img16 img-fluid img-center"
                                style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">Oasis</div>
                                <div class="recent-price">$230,000</div>
                            </div>
                            <div class="view-proper">Ver detalless</div>
                        </a>
                    </div>
                    <a href="{{route('developmentDetails',2)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('images/developments/el_rehilete/Foto1.jpeg')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">El Rehilete</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',3)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Monte verde II</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',4)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Monte verde III</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',5)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Alta Vista</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',6)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Verde Ladera</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',7)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('images/developments/palmares/Foto2.jpg')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Palmares</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',8)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">El encanto</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',9)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('images/developments/el_encanto_2/Foto2.jpeg')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">El encanto 2</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',10)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Real Hacienda</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',11)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Buenavista II</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',12)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('landingPage/images/interior/p-1.png')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Buenavista</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',13)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('images/developments/agua_dulce/Foto2.jpeg')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Agua Dulce</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                    <a href="{{route('developmentDetails',14)}}" class="recent-16" data-aos="fade-up" data-aos-delay="150">
                        <div class="recent-img16 img-fluid img-center"
                            style="background-image: url({{{asset('images/developments/olivos/Foto3.jpeg')}}});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Los Olivos</div>
                            <div class="recent-price">$230,000</div>
                        </div>
                        <div class="view-proper">Ver detalless</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('why-choose')
    <section class="info-help h18" style="background: url({{asset('images/developments/el_encanto_2/Foto3.jpeg')}}) no-repeat scroll center center">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-12 col-md-8 col-xs-8">
                    <div class="info-text" data-aos="fade-up" data-aos-delay="150">
                        <h3 class="text-center mb-0">¿Por que elegirnos?</h3>
                        <p class="text-center mb-4 p-0">Tenemos las mejores opciones con los precios mas accesibles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section _ngcontent-bgi-c3="" class="featured-boxes-area">
        <div _ngcontent-bgi-c3="" class="container">
            <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
                <div _ngcontent-bgi-c3="" class="row m-0">
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up"
                        data-aos-delay="250">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="{{asset('landingPage/images/icons/i-5.svg')}}"
                                    width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Planea tu futuro</h3>
                            <p _ngcontent-bgi-c3="">Contamos con diferentes opciones de terrenos campestres para una casa de campo o habitacionales para construir tu hogar. </p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                href="single-property-1.html">Leer Mas</a>
                        </div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up"
                        data-aos-delay="350">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="{{asset('landingPage/images/icons/i-6.svg')}}"
                                    width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Compra seguro</h3>
                            <p _ngcontent-bgi-c3="">Realiza las compras de forma segura, elaboramos contrato de compraventa certificado ante notario publico.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                href="single-property-1.html">Leer Mas</a>
                        </div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up"
                        data-aos-delay="450">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="{{asset('landingPage/images/icons/i-7.svg')}}"
                                    width="85" height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Financiamientos accesibles</h3>
                            <p _ngcontent-bgi-c3="">Contamos con financiamientos accesibles para que el sueño de comprar un terreno pueda ser alcanzado por cada uno de ustedes.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                href="single-property-1.html">Leer Mas</a>
                        </div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up"
                        data-aos-delay="550">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon"><img src="{{asset('landingPage/images/icons/i-8.svg')}}" width="85"
                                    height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Atención de Calidad</h3>
                            <p _ngcontent-bgi-c3="">Todos nuestros asesores son capacitados constantemente para brindar atencion de calidad.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                href="single-property-1.html">Leer Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('popular-places')
    <section class="popular-places">
        <div class="container">
            <div class="sec-title">
                <h2><span>Lugares </span>Populares</h2>
                <p>Fraccionamientos en el estado de Colima.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="150">
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="{{asset('images/estados/armeria/Foto1.jpg')}}" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Armeria </h4>
                            <span>1 Fraccionamiento</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="250">
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="{{asset('images/estados/comala/Foto1.jpg')}}" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Comala</h4>
                            <span>5 Fraccionamientos</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="350">
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="{{asset('images/estados/colima/Foto1.jpg')}}" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Colima</h4>
                            <span>2 Fraccionamientos</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="150">
                    <a href="properties-map.html" class="img-box hover-effect">
                        <img src="{{asset('images/estados/cuauhtemoc/Foto1.jpg')}}" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Cuauhtemoc </h4>
                            <span>6 Fraccionamientos</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4" data-aos="zoom-in" data-aos-delay="250">
                    <a href="properties-map.html" class="img-box hover-effect no-mb">
                        <img src="{{asset('images/estados/villa_de_alvarez/Foto1.jpg')}}" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Villa de Alvarez</h4>
                            <span>1 Fraccionamiento</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('contact-us')
    <section class="info-help h17" style="background: url({{asset('images/developments/el_encanto_2/Foto2.jpeg')}}) no-repeat scroll center center">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-right">
                    <div class="info-text">
                        <h3>Fraccionamientos campestres</h3>
                        <h5 class="mt-3">Financiamientos disponibles</h5>
                        <p class="pt-2">Te ayudamos a encontrar el mejor terreno para construir una cabaña o casa de campo de ensueño en Fraccionamientos Colima te ayudamos a encontrar el espacio perfecto para que construyas el hogar seguro que estas buscando..</p>
                        <div class="inf-btn pro">
                            <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">Contactar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('team')
    <section class="team bg-white-3">
        <div class="container-fluid recently-slider">
            <div class="section-title">
                <h3>Nuestros</h3>
                <h2>Agentes</h2>
            </div>
            <div class="row">
                <div class="owl-carousel home5-right-slider">
                    <!--Team Block-->
                    <div class="team-block" data-aos="fade-up" data-aos-delay="150">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/sonia_ceballos/perfil.jpg')}}" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Sonia Ceballos</a></h3>
                                <div class="designation">Agente Inmobiliaria</div>
                            </div>
                        </div>
                    </div>
                    <!--Team Block-->
                    <div class="team-block" data-aos="fade-up" data-aos-delay="250">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/elena_ceballos/perfil.jpg')}}" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Elena Ceballos</a></h3>
                                <div class="designation">Agente Inmobiliaria</div>
                            </div>
                        </div>
                    </div>
                    <!--Team Block-->
                    <div class="team-block pb-none" data-aos="fade-up" data-aos-delay="350">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/javier_lopez/perfil.jpg')}}" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Javier Lopez</a></h3>
                                <div class="designation">Agente Inmobiliario</div>
                            </div>
                        </div>
                    </div>
                    <!--Team Block-->
                    <div class="team-block pb-none" data-aos="fade-up" data-aos-delay="450">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/kevin_garibay/perfil.png')}}" alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Kevin Garibay</a></h3>
                                <div class="designation">Agente Inmobiliario</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block pb-none" data-aos="fade-up" data-aos-delay="550">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/francisco_leon/perfil.jpg')}}"
                                        alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Francisco Leon</a></h3>
                                <div class="designation">Agente Inmobiliario</div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block pb-none" data-aos="fade-up" data-aos-delay="650">
                        <div class="inner-box team-details">
                            <div class="image team-head">
                                <a href="agents-listing-grid.html"><img src="{{asset('images/agents/aaren_yttesen/perfil.jpg')}}"
                                        alt="" /></a>
                                <div class="team-hover">
                                    <ul class="team-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h3><a href="agents-listing-grid.html">Aaren Yttesen</a></h3>
                                <div class="designation">Agente Inmobiliaria</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('blog')
    <section class="blog-section bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Articulos &amp; </span>Tips</h2>
                <p>Lee nuestras ultimas noticias y tips sobre inversiones inmobiliarias.</p>
            </div>
            <div class="news-wrap">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{asset('images/developments/el_encanto_2/Foto5.jpeg')}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Viviendo en la Naturaleza: Las Ventajas de los Fraccionamientos Campestres</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">Septiembre 11, 2023 &nbsp;</span>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>Los fraccionamientos campestres son una opción de vivienda cada vez más popular para aquellos que buscan una vida tranquila en contacto con la naturaleza.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Leer mas...</a>
                                    <div class="admin">
                                        <p>By, Fraccionamientos Colima</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item" data-aos="fade-up" data-aos-delay="250">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{asset('landingPage/images/blog/Inversion.jpg')}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Fraccionamientos Campestres: Una Inversión para el Futuro</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">Septiembre 12, 20230 &nbsp;</span>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>La inversión en un terreno en un fraccionamiento campestre puede ser una estrategia inteligente para aquellos que desean asegurar su patrimonio.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Leer mas...</a>
                                    <div class="admin">
                                        <p>By, Fraccionamientos Colima</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-xs-12">
                        <div class="news-item no-mb" data-aos="fade-up" data-aos-delay="350">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="img-responsive" src="{{asset('landingPage/images/blog/escrituracion.jpg')}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>Escrituración en Fraccionamientos Campestres: La Importancia de la Paciencia</h3>
                                </a>
                                <div class="dates">
                                    <span class="date">Septiembre 13, 2023 &nbsp;</span>
                                </div>
                                <div class="news-item-descr big-news">
                                    <p>En muchos fraccionamientos campestres, la escrituración de los terrenos se entrega una vez que se completan los servicios y la infraestructura.</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="blog-details.html" class="news-link">Leer mas...</a>
                                    <div class="admin">
                                        <p>By, Fraccionamientos Colima</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer class="first-footer">
        <div class="top-footer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="{{asset('images/SVG/LogoFull.svg')}}" alt="netcom">
                            </a>
                            <p>Fraccionamientos Colima es una empresa de asesoría inmobiliaria especializada en la venta de terrenos campestres y habitacionales.</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+52 312 219 2524</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">slopez@fraccionamientoscolima.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer bg-white-3">
            <div class="container">
                <p>2023 © Copyright Fraccionamientos Colima - All Rights Reserved.</p>
                <ul class="netsocials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
