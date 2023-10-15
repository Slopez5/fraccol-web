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

@section('single-property')
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h3>El encanto 2 <span class="mrg-l-5 category-tag">Fraccionamiento
                                                    Campestre</span></h3>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>Cuauhtemoc,
                                                    Colima
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper mr-2">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>$ 166,400</h4>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <p>$ 640 / m<sup>2</sup></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->
                            <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                <h5 class="mb-4">Galeria</h5>
                                <div class="carousel-inner">
                                    <div class="active item carousel-item" data-slide-number="0">
                                        <img src="{{ asset('images/developments/el_encanto_2/Foto1.jpeg') }}"
                                            class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="1">
                                        <img src="{{ asset('images/developments/el_encanto_2/Foto2.jpeg') }}"
                                            class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="2">
                                        <img src="{{ asset('images/developments/el_encanto_2/Foto3.jpeg') }}"
                                            class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="4">
                                        <img src="{{ asset('images/developments/el_encanto_2/Foto4.jpeg') }}"
                                            class="img-fluid" alt="slider-listing">
                                    </div>
                                    <div class="item carousel-item" data-slide-number="5">
                                        <img src="{{ asset('images/developments/el_encanto_2/Foto5.jpeg') }}"
                                            class="img-fluid" alt="slider-listing">
                                    </div>

                                    <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                            class="fa fa-angle-left"></i></a>
                                    <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                            class="fa fa-angle-right"></i></a>

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators smail-listing list-inline">
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                            data-target="#listingDetailsSlider">
                                            <img src="{{ asset('images/developments/el_encanto_2/Foto1.jpeg') }}"
                                                class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                            <img src="{{ asset('images/developments/el_encanto_2/Foto2.jpeg') }}"
                                                class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                            <img src="{{ asset('images/developments/el_encanto_2/Foto3.jpeg') }}"
                                                class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-3" data-slide-to="3"
                                            data-target="#listingDetailsSlider">
                                            <img src="{{ asset('images/developments/el_encanto_2/Foto4.jpeg') }}"
                                                class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a id="carousel-selector-4" data-slide-to="4"
                                            data-target="#listingDetailsSlider">
                                            <img src="{{ asset('images/developments/el_encanto_2/Foto5.jpeg') }}"
                                                class="img-fluid" alt="listing-small">
                                        </a>
                                    </li>
                                </ul>
                                <!-- main slider carousel items -->
                            </div>
                            <div class="blog-info details mb-30">
                                <h5 class="mb-4">Description</h5>
                                <p class="mb-3">En El Encanto 2, le damos vida a su sueño de hogar ideal en una ubicación
                                    excepcional en la hermosa Colima. Nuestro fraccionamiento está diseñado para brindar a
                                    las familias un lugar donde puedan construir sus vidas en un entorno seguro y
                                    confortable. Aquí, destacamos lo que hace a El Encanto 2 un lugar verdaderamente
                                    especial:</p>
                                <p class="mb-3">El Encanto 2 se encuentra en una zona residencial privilegiada, a poca
                                    distancia de la prestigiosa zona de Altozano en Colima. Esta ubicación estratégica
                                    ofrece fácil acceso a tiendas, restaurantes, centros educativos y áreas de
                                    entretenimiento, brindando a los residentes una vida conveniente y vibrante.</p>
                                <p class="mb-3">Nuestros lotes, con un generoso tamaño de 260 m2, ofrecen espacio
                                    suficiente para crear la casa de sus sueños y disfrutar de áreas al aire libre. Ya sea
                                    que esté planeando una residencia familiar o una inversión, nuestros lotes son la base
                                    perfecta para su visión.</p>
                                <p class="mb-3">Entendemos que la adquisición de una propiedad es una inversión
                                    significativa. Por eso, en El Encanto 2, ofrecemos opciones de financiamiento flexibles
                                    que se adaptan a sus necesidades. Puede elegir pagar al contado o aprovechar planes de
                                    financiamiento a plazos que hacen que la inversión sea accesible para todos.</p>
                                <p class="mb-3">En El Encanto 2, miramos hacia el futuro. Estamos comprometidos con
                                    proporcionar servicios esenciales para su comodidad. En un plazo de 5 años, proyectamos
                                    contar con servicios de agua, luz, calles empedradas y drenaje. Esto garantiza que su
                                    inversión siga creciendo y que su vida en El Encanto 2 sea sin preocupaciones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single homes-content details mb-30">
                        <!-- title -->
                        <h5 class="mt-5">Amenidades</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Agua</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Luz</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Calles empedradas</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Areas Verdes</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Asadores</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Aparatos para hacer ejercicio</span>
                            </li>
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>Canchas multiusos</span>
                            </li>
                        </ul>
                    </div>
                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Plano</h5>
                        <img alt="image" src="{{ asset('images/planos/El_encanto_2.png') }}">
                    </div>

                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Precios</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-info">
                                           <b class="title">Lotes Estandar</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Contado</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$640/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">1 Año</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$674/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">2 Años</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$702/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">3 Años</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$730/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">4 Años</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$758/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">5 Años</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$786/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">6 Años</h6>
                                                    <ul class="list-unstyled list-inline ml-auto">
                                                        <li class="list-inline-item m-0 text-warning"><span>$870/m<sup>2</sup></span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-location map">
                        <h5>Ubicación</h5>
                        <div class="divider-fade"></div>
                        <div id="map" class="contact-map"></div>
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
                                <img src="{{ asset('images/SVG/LogoFull.svg') }}" alt="netcom">
                            </a>
                            <p>Fraccionamientos Colima es una empresa de asesoría inmobiliaria especializada en la venta de
                                terrenos campestres y habitacionales.</p>
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


@section('extra-scripts')
    <script>
        let map;

        async function initMap() {
            const position = {
                lat: 19.325321,
                lng: -103.665049
            };
            // Request needed libraries.
            //@ts-ignore
            const {
                Map
            } = await google.maps.importLibrary("maps");

            // The map, centered at Uluru
            map = new Map(document.getElementById("map"), {
                zoom: 14,
                center: position
            });

            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: position,
                map: map,
                tile: "El encanto 2"
            });
        }

        initMap();
    </script>
@endsection
