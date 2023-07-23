<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamientos Colima</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="inicio.html">
                    <img src="images/SVG/Recurso 2.svg" class="logo-image" alt="Logo de la empresa">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="inicio.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="desarrollos.html">Fraccionamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="propiedades.html">Propiedades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.html">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main>
        <!-- Sección de inicio -->
        <section id="inicio">
            <!-- Contenido de la sección de inicio -->
            <div id="carousel-developments" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/developments/palmares/foto1.jpg" class="d-block w-100 image-carousel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/developments/palmares/foto2.jpg" class="d-block w-100 image-carousel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/developments/palmares/foto3.jpg" class="d-block w-100 image-carousel" alt="...">
                    </div>
                </div>

                <div class="carousel-caption d-none d-md-block">
                    <h5>Palmares</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-developments" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-developments" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Sección de desarrollos inmobiliarios -->
        <section id="desarrollos" class="py-5">
            <!-- Contenido de la sección de desarrollos inmobiliarios -->
            <div class="container">
                <h2 class="text-center mb-4">Desarrollos Inmobiliarios</h2>

                <!-- Filtros de búsqueda -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <label for="ubicacion">Ubicación:</label>
                        <select id="ubicacion" class="form-select">
                            <option value="">Todos</option>
                            <option value="ubicacion1">Ubicación 1</option>
                            <option value="ubicacion2">Ubicación 2</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="tipo-propiedad">Tipo de Propiedad:</label>
                        <select id="tipo-propiedad" class="form-select">
                            <option value="">Todos</option>
                            <option value="apartamentos">Apartamentos</option>
                            <option value="casas">Casas</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="precio">Precio:</label>
                        <select id="precio" class="form-select">
                            <option value="">Todos</option>
                            <option value="rango1">Rango 1</option>
                            <option value="rango2">Rango 2</option>
                            <!-- Agrega más opciones de precio -->
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="habitaciones">Número de Habitaciones:</label>
                        <select id="habitaciones" class="form-select">
                            <option value="">Todos</option>
                            <option value="1">1 Habitación</option>
                            <option value="2">2 Habitaciones</option>
                            <!-- Agrega más opciones de número de habitaciones -->
                        </select>
                    </div>
                </div>

                <!-- Tarjetas de desarrollos inmobiliarios -->
                <div class="scroll-container">
                    <div class="scroll-content d-flex justify-content-center">

                        <div class="card">
                            <img src="images/developments/palmares/foto1.jpg" class="card-img-top" alt="Desarrollo 1">
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo 1</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/developments/palmares/foto2.jpg" class="card-img-top" alt="Desarrollo 2">
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo 2</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/developments/palmares/foto3.jpg" class="card-img-top" alt="Desarrollo 3">
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo 3</h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Mapa Interactivo -->
                <div class="row map-container">
                    <div class="col-md-12">
                        <div id="map"></div>
                    </div>
                </div>

                <!-- Galería de imágenes -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h3>Galería de Imágenes</h3>
                        <div class="gallery">
                            <img src="ruta_imagen1.jpg" alt="Imagen 1">
                            <img src="ruta_imagen2.jpg" alt="Imagen 2">
                            <!-- Agrega más imágenes -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Sección de propiedades disponibles -->
        <section id="propiedades">
            <!-- Contenido de la sección de propiedades disponibles -->
        </section>

        <!-- Sección de servicios de asesoría -->
        <section id="servicios">
            <!-- Contenido de la sección de servicios de asesoría -->
        </section>

        <!-- Sección "Sobre nosotros" -->
        <section id="sobre-nosotros">
            <!-- Contenido de la sección "Sobre nosotros" -->
        </section>

        <!-- Sección de blog -->
        <section id="blog">
            <!-- Contenido de la sección de blog -->
        </section>

        <!-- Sección de contacto -->
        <section id="contacto">
            <!-- Contenido de la sección de contacto -->
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <!-- Contenido del pie de página -->
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsoV50JXg-oaBQxnvi0N_tuK2T5T6iwtM&callback=initMap&v=weekly" defer></script>
    <script>
        function initMap() {
            // The location of Uluru,
            const verde_ladera = {
                lat: 19.314809,
                lng: -103.675632
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: verde_ladera,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: verde_ladera,
                map: map,
                title: "Verde ladera"
            });
        }

        window.initMap = initMap;
    </script>
</body>

</html>
