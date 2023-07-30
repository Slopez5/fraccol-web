<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamiento Campestre - Landing Page</title>
    <!-- Agrega aquí tus enlaces a hojas de estilo y scripts si los necesitas -->
    <link rel="stylesheet" href="{{ asset('css/landingPage/development.css') }}">
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsoV50JXg-oaBQxnvi0N_tuK2T5T6iwtM&callback=initMap&v=weekly" defer></script>
</body>

</html>
