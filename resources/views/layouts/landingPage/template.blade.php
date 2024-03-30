<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Fraccionamientos Colima</title>
    @livewireStyles
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('findhouses/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('findhouses/font/flaticon.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('findhouses/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('findhouses/css/maps.css') }}">
    
</head>

<body class="homepage-9 hp-6 homepage-1 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        @yield('section-heading')
        <div class="clearfix"></div>

        <!-- STAR HEADER SEARCH -->
        @yield('section-search')
       
        
        <!-- END HEADER SEARCH -->

        <!-- START SECTION POPULAR PLACES -->
        @yield('section-popular-places')
        
        <!-- END SECTION POPULAR PLACES -->

        <!-- START SECTION FEATURED PROPERTIES -->
        @yield('section-featured-properties')
        
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION WHY CHOOSE US -->
        @yield('section-why-choose-us')
        
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION RECENTLY PROPERTIES -->
        @yield('section-recently-properties')
        
        <!-- END SECTION RECENTLY PROPERTIES -->

        <!-- START SECTION AGENTS -->
        @yield('section-agents')
        
        <!-- END SECTION AGENTS -->

        <!-- START SECTION TESTIMONIALS -->
        @yield('section-testimonials')
        
        <!-- END SECTION TESTIMONIALS -->

        <!-- STAR SECTION PARTNERS -->
        @yield('section-partners')
        
        <!-- END SECTION PARTNERS -->

        <!-- START FOOTER -->
        @yield('section-footer')
        

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up"
                aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                            Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with
                            Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()"
                                            value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()"
                                            value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form"
                                            id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()"
                                                value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()"
                                                value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()"
                                                value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit"
                                                class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('findhouses/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/rangeSlider.js') }}"></script>
        <script src="{{ asset('findhouses/js/tether.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/moment.js') }}"></script>
        <script src="{{ asset('findhouses/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/mmenu.js') }}"></script>
        <script src="{{ asset('findhouses/js/aos.js') }}"></script>
        <script src="{{ asset('findhouses/js/aos2.js') }}"></script>
        <script src="{{ asset('findhouses/js/animate.js') }}"></script>
        <script src="{{ asset('findhouses/js/slick.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/fitvids.js') }}"></script>
        <script src="{{ asset('findhouses/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/typed.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/lightcase.js') }}"></script>
        <script src="{{ asset('findhouses/js/search.js') }}"></script>
        <script src="{{ asset('findhouses/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('findhouses/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/newsletter.js') }}"></script>
        <script src="{{ asset('findhouses/js/jquery.form.js') }}"></script>
        <script src="{{ asset('findhouses/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('findhouses/js/searched.js') }}"></script>
        <script src="{{ asset('findhouses/js/forms-2.js') }}"></script>
        <script src="{{ asset('findhouses/js/map-style2.js') }}"></script>
        <script src="{{ asset('findhouses/js/range.js') }}"></script>
        <script src="{{ asset('findhouses/js/color-switcher.js') }}"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('findhouses/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('findhouses/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });
        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });
        </script>

        <script>
            $('.job_clientSlide').owlCarousel({
                items: 2,
                loop: true,
                margin: 30,
                autoplay: false,
                nav: true,
                smartSpeed: 1000,
                slideSpeed: 1000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 3
                    }
                }
            });
        </script>

        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 7,
                        margin: 20
                    }
                }
            });
        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });
        </script>

        <!-- MAIN JS -->
        <script src="{{ asset('findhouses/js/script.js') }}"></script>

    </div>
    <!-- Wrapper / End -->

    @livewireScripts
</body>

</html>
