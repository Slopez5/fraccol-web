<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamiento Campestre - Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingPage/development.css') }}">
    @livewireStyles
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav>
            <!-- Agrega aquí tus enlaces de navegación -->
        </nav>
    </header>

    <main>
        @livewire('landing-page.development.section-header')

        @livewire('landing-page.development.section-development-info')

        @livewire('landing-page.development.section-amenities')

        @livewire('landing-page.development.section-location')

        @livewire('landing-page.development.section-prices')

        @livewire('landing-page.development.section-financing-options')

        @livewire('landing-page.development.section-blueprint')

        @livewire('landing-page.development.section-gallery')

        @livewire('landing-page.development.section-reviews')

        @livewire('landing-page.development.section-social-media')
    </main>

    @livewire('landing-page.development.section-footer')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsoV50JXg-oaBQxnvi0N_tuK2T5T6iwtM&callback=initMap&v=weekly"
        defer></script>
    @livewireScripts
</body>

</html>
