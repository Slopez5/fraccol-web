<section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" style="background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #001319; background-image: url('{{ asset('images/developments/agua_dulce/Foto1.jpeg') }}')" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <div class="welcome-text">
                            <h1 class="h1">Encuentra tu futuro hogar
                                <br class="d-md-none">
                            </h1>
                            <p class="mt-4"></p>
                        </div>
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">Venta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_2">Renta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_3">Fraccionamiento</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <livewire:landing-page.tab-item-search id="tabs_1" status="show active" type="sale" :dataTabItem="$tabFilterItemSaleData"/>
                                    <livewire:landing-page.tab-item-search id="tabs_2" type="rent" :dataTabItem="$tabFilterItemRentData"/>
                                    <livewire:landing-page.tab-item-search id="tabs_3" type="development" :dataTabItem="$tabFilterItemDevelopmentData"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
