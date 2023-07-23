<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionamiento Campestre</title>
    <link rel="stylesheet" href="{{ asset('css/landingPage/development.css') }}">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>Fraccionamiento {{ $development->name }}</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#ubicacion">Ubicación</a></li>
                <li><a href="#desarrollo">Desarrollo</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección Inicio -->
    <section id="inicio">
        <div class="banner">
            <img src="fraccionamiento.jpg" alt="Fraccionamiento Campestre">
        </div>
        <div class="contenido">
            <h2>Fraccionamiento {{ $development->name }}</h2>
            <p>Un lugar rodeado de naturaleza y tranquilidad, donde podrás disfrutar de momentos inolvidables junto a tu familia.</p>
            <a href="#contacto" class="boton">Contáctanos</a>
        </div>
    </section>

    <!-- Sección Ubicación -->
    <section id="ubicacion">
        <h2>Ubicación</h2>
        <p>Nuestro fraccionamiento campestre se encuentra en una zona privilegiada, rodeado de hermosos paisajes y con fácil acceso desde la ciudad.</p>
        <!-- Agregar mapa interactivo con la ubicación -->
    </section>

    <!-- Sección Desarrollo -->
    <section id="desarrollo">
        <h2>Desarrollo</h2>
        <p>Nuestro fraccionamiento está proyectado a 5 años y contará con diversas amenidades y servicios para que disfrutes de la vida en la naturaleza:</p>
        <ul>
            <li>Pistas de senderismo</li>
            <li>Áreas verdes y parques</li>
            <li>Piscinas y zonas recreativas</li>
            <li>Club social</li>
            <li>Seguridad las 24 horas</li>
        </ul>
        <a href="#contacto" class="boton">Solicita más información</a>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto">
        <h2>Contacto</h2>
        <p>Si estás interesado en conocer más sobre nuestro fraccionamiento, déjanos tus datos y te contactaremos a la brevedad.</p>
        <form action="#" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
            <button type="submit" class="boton">Enviar mensaje</button>
        </form>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>Todos los derechos reservados &copy; Fraccionamiento Campestre 2023</p>
    </footer>
</body>
</html>
