<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('landingPage/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800, 700"
        rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/search-form.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landingPage/css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('landingPage/css/colors/black.css') }}">
</head>

<body class="homepage-5 the-search hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            @yield('header')
        </header>
        <div class="clearfix"></div>
        @yield('header-search');
        @yield('single-property')
        @yield('recently-properties')
        @yield('why-choose')
        @yield('popular-places')
        @yield('contact-us')
        @yield('team')
        @yield('blog')
        @yield('partners')
        @yield('footer')


        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
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
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
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
        <script src="{{ asset('landingPage/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/rangeSlider.js') }}"></script>
        <script src="{{ asset('landingPage/js/tether.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/moment.js') }}"></script>
        <script src="{{ asset('landingPage/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/mmenu.js') }}"></script>
        <script src="{{ asset('landingPage/js/aos.js') }}"></script>
        <script src="{{ asset('landingPage/js/aos2.js') }}"></script>
        <script src="{{ asset('landingPage/js/nice-select.js') }}"></script>
        <script src="{{ asset('landingPage/js/slick.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/slick.js') }}"></script>
        <script src="{{ asset('landingPage/js/fitvids.js') }}"></script>
        <script src="{{ asset('landingPage/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/typed.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/lightcase.js') }}"></script>
        <script src="{{ asset('landingPage/js/search.js') }}"></script>
        <script src="{{ asset('landingPage/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('landingPage/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/newsletter.js') }}"></script>
        <script src="{{ asset('landingPage/js/jquery.form.js') }}"></script>
        <script src="{{ asset('landingPage/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('landingPage/js/searched.js') }}"></script>
        <script src="{{ asset('landingPage/js/forms-2.js') }}"></script>
        <script src="{{ asset('landingPage/js/range.js') }}"></script>
        <script src="{{ asset('landingPage/js/color-switcher.j') }}"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('landingPage/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('landingPage/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script>
            $('.home5-right-slider').owlCarousel({
                loop: true,
                margin: 30,
                dots: false,
                nav: true,
                rtl: false,
                autoplayHoverPause: false,
                autoplay: false,
                singleItem: true,
                smartSpeed: 1200,
                navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    480: {
                        items: 1,
                        center: false
                    },
                    520: {
                        items: 2,
                        center: false
                    },
                    600: {
                        items: 2,
                        center: false
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 5
                    },
                    1366: {
                        items: 5
                    },
                    1400: {
                        items: 5
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
        <script src="{{ asset('landingPage/js/script.js') }}"></script>
        <script>
            (g => {
                var h, a, k, p = "The Google Maps JavaScript API",
                    c = "google",
                    l = "importLibrary",
                    q = "__ib__",
                    m = document,
                    b = window;
                b = b[c] || (b[c] = {});
                var d = b.maps || (b.maps = {}),
                    r = new Set,
                    e = new URLSearchParams,
                    u = () => h || (h = new Promise(async (f, n) => {
                        await (a = m.createElement("script"));
                        e.set("libraries", [...r] + "");
                        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                        e.set("callback", c + ".maps." + q);
                        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                        d[q] = f;
                        a.onerror = () => h = n(Error(p + " could not load."));
                        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                        m.head.append(a)
                    }));
                d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                    d[l](f, ...n))
            })
            ({
                key: "AIzaSyAsoV50JXg-oaBQxnvi0N_tuK2T5T6iwtM",
                v: "weekly"
            });
        </script>
        @yield('extra-scripts')

    </div>
    <!-- Wrapper / End -->
</body>

</html>
