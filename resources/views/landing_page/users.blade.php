<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page de Vendedor</title>
    <link rel="stylesheet" href="{{ asset('css/landingPage/users.css') }}">
    <!-- Agregar aquí los enlaces a los archivos CSS y JS que necesites -->
</head>

<body>
    <!-- Encabezado e Identidad del Vendedor -->
    <header>
        <div class="logo">
            <img src="ruta-del-logo.png" alt="Logo del Vendedor">
            <h1>Nombre del Vendedor</h1>
        </div>
    </header>

    <!-- Introducción al Vendedor -->
    <section class="introduccion">
        <p>Breve descripción o mensaje de bienvenida del vendedor.</p>
        <p>Destacando su experiencia y los servicios que ofrece.</p>
    </section>

    <!-- Lista de Fraccionamientos - Cards con efecto de volteo -->
    <section class="fraccionamientos">
        <h2>Fraccionamientos</h2>
        <div class="fraccionamiento-cards">
            <!-- Fraccionamiento 1 -->
            <div class="fraccionamiento-card" data-id="1" onclick="mostrarDetalles(1)">
                <div class="card-front">
                    <img src="fraccionamiento1.jpg" alt="Fraccionamiento 1">
                    <h3>Fraccionamiento 1</h3>
                    <p>Ubicación del Fraccionamiento 1</p>
                </div>
                <div class="card-back">
                    <h3>Fraccionamiento 1</h3>
                    <p>Características del desarrollo</p>
                    <p>Tipos de propiedades disponibles</p>
                    <p>Precios</p>
                    <!-- Agregar más detalles si es necesario -->
                </div>
            </div>
            <!-- Fraccionamiento 2 (Agregar más fraccionamientos como sea necesario) -->
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <section class="galeria">
        <h2>Galería de Imágenes</h2>
        <div class="imagenes">
            <img src="{{ asset('images/developments/palmares/foto1.jpg') }}" alt="Imagen 1">
            <img src="{{ asset('images/developments/palmares/foto2.jpg') }}" alt="Imagen 2">
            <!-- Agregar más imágenes según sea necesario -->
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section class="contacto">
        <h2>Contacto</h2>
        <form action="enviar_mensaje.php" method="post">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>
            <div>
                <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" required>
            </div>
            <div>
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Información de Contacto -->
    <section class="informacion-contacto">
        <h2>Información de Contacto</h2>
        <p>Número de teléfono: XXX-XXX-XXXX</p>
        <p>Correo electrónico: ejemplo@ejemplo.com</p>
        <!-- Agregar más información de contacto si es necesario -->
    </section>

    <!-- Mapa de Ubicación -->
    <section class="mapa">
        <h2>Ubicación de los Fraccionamientos</h2>
        <!-- Agregar aquí el mapa interactivo -->
    </section>

    <!-- Testimonios de Clientes -->
    <section class="testimonios">
        <h2>Testimonios de Clientes</h2>
        <div class="testimonios-container">
            <div class="testimonio">
                <p>Excelente servicio y atención.</p>
                <p>- Cliente 1</p>
            </div>
            <div class="testimonio">
                <p>Muy satisfecho con mi compra.</p>
                <p>- Cliente 2</p>
            </div>
            <!-- Agregar más testimonios si es necesario -->
        </div>
    </section>

    <!-- Enlaces a Redes Sociales -->
    <section class="redes-sociales">
        <h2>Síguenos en Redes Sociales</h2>
        <div class="redes-container">
            <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
            <!-- Agregar más enlaces a redes sociales si es necesario -->
        </div>
    </section>

    <!-- Información Adicional -->
    <section class="informacion-adicional">
        <h2>Información Adicional</h2>
        <p>Políticas de venta y devolución.</p>
        <p>Beneficios de trabajar con nosotros.</p>
        <!-- Agregar más información adicional si es necesario -->
    </section>

    <!-- Call to Action (Llamada a la Acción) -->
    <section class="cta">
        <h2>¿Interesado en nuestros fraccionamientos?</h2>
        <p>Contáctanos para más información o visita nuestros fraccionamientos.</p>
        <a href="#contacto">Contactar Ahora</a>
    </section>

    <!-- Agregar aquí los scripts necesarios, por ejemplo para el efecto de volteo de las cards -->
    <script>
        // Mostrar detalles al hacer clic en la tarjeta de fraccionamiento
        function mostrarDetalles(fraccionamientoId) {
            const card = document.querySelector(`.fraccionamiento-card[data-id="${fraccionamientoId}"]`);
            const front = card.querySelector('.card-front');
            const back = card.querySelector('.card-back');

            if (front.style.transform === 'rotateY(0deg)' || front.style.transform === '') {
                front.style.transform = 'rotateY(180deg)';
                back.style.transform = 'rotateY(0deg)';
                back.style.display = 'block';
                front.style.display = 'none';
            } else {
                back.style.transform = 'rotateY(180deg)';
                front.style.transform = 'rotateY(0deg)';
                front.style.display = 'block';
                back.style.display = 'none';
            }

        }

        // Volver a ocultar detalles al hacer clic fuera de la tarjeta de fraccionamiento
        document.addEventListener('click', (event) => {
            const card = event.target.closest('.fraccionamiento-card');
            if (!card) {
                const fronts = document.querySelectorAll('.card-front');
                const backs = document.querySelectorAll('.card-back');
                fronts.forEach(front => {
                    front.style.transform = 'rotateY(0deg)';
                    front.style.display = 'block';
                });
                backs.forEach(back => {
                    back.style.transform = 'rotateY(180deg)';
                    back.style.display = 'none';

                });
            }
        });
    </script>
</body>

</html>
