<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultorio Dental</title>
    <style>
        /* Variables CSS */
        :root {
            --primary-color: #007bff;
            --secondary-color: #f2f2f2;
            --text-color: #333;
            --light-text-color: #fff;
            --highlight-color: #f8f9fa;
        }

        /* Estilos generales */
        body {
            background-color: var(--secondary-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-color);
        }

        header {
            background-color: var(--primary-color);
            color: var(--light-text-color);
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: var(--primary-color);
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: var(--light-text-color);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--highlight-color);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            max-height: 50px;
        }

        h1 {
            font-size: 28px;
            margin: 0;
        }

        #hero {
            background-color: var(--highlight-color);
            padding: 50px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        #hero h2 {
            font-size: 24px;
            color: var(--primary-color);
        }

        #hero p {
            font-size: 18px;
            margin: 10px 0;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: var(--light-text-color);
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .services-grid,
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .service-item,
        .team-member {
            text-align: center;
            padding: 15px;
            background-color: var(--secondary-color);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .service-item img,
        .team-member img {
            max-width: 100%;
            border-radius: 5px;
        }

        .service-item h3,
        .team-member h3 {
            font-size: 20px;
            color: var(--primary-color);
            margin-top: 10px;
        }

        .testimonial-slider {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .testimonial {
            padding: 15px;
            background-color: var(--secondary-color);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .testimonial h4 {
            margin-top: 10px;
            font-size: 16px;
            color: var(--primary-color);
        }

        #contacto {
            margin-top: 20px;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        #map iframe {
            width: 100%;
            height: 250px;
            border-radius: 5px;
            border: none;
        }

        footer {
            background-color: var(--primary-color);
            color: var(--light-text-color);
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .social-media a {
            color: var(--light-text-color);
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }

        .social-media a:hover {
            color: #d1e7ff;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <img src="logo.png" alt="Consultorio Dental Logo" class="logo">
            <h1>Bienvenido al Consultorio Dental</h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#medicos">Médicos</a></li>
                    <li><a href="#testimonios">Testimonios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="hero">
            <div class="hero-content">
                <h2>Tu sonrisa, nuestra prioridad</h2>
                <p>Ofrecemos servicios dentales de alta calidad para toda la familia</p>
                <a href="#servicios" class="cta-button">Conoce más</a>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <h2>Servicios</h2>
                <div class="services-grid">
                    <div class="service-item">
                        <img src="blanqueamiento.jpg" alt="Blanqueamiento Dental">
                        <h3>Blanqueamiento Dental</h3>
                        <p>Recupera el brillo de tu sonrisa con nuestro tratamiento de blanqueamiento dental.</p>
                    </div>
                    <div class="service-item">
                        <img src="implantes.jpg" alt="Implantes Dentales">
                        <h3>Implantes Dentales</h3>
                        <p>Soluciones permanentes para la pérdida de dientes, diseñadas para durar toda la vida.</p>
                    </div>
                    <div class="service-item">
                        <img src="ortodoncia.jpg" alt="Ortodoncia">
                        <h3>Ortodoncia</h3>
                        <p>Alineamos tus dientes para lograr una sonrisa perfecta y saludable.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="medicos">
            <div class="container">
                <h2>Nuestros Médicos</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="dr-juan-perez.jpg" alt="Dr. Juan Pérez">
                        <h3>Dr. Juan Pérez</h3>
                        <p>Especialista en Implantología</p>
                    </div>
                    <div class="team-member">
                        <img src="dra-maria-gomez.jpg" alt="Dra. María Gómez">
                        <h3>Dra. María Gómez</h3>
                        <p>Experta en Ortodoncia</p>
                    </div>
                    <div class="team-member">
                        <img src="dr-carlos-rodriguez.jpg" alt="Dr. Carlos Rodríguez">
                        <h3>Dr. Carlos Rodríguez</h3>
                        <p>Especialista en Estética Dental</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonios">
            <div class="container">
                <h2>Testimonios</h2>
                <div class="testimonial-slider">
                    <div class="testimonial">
                        <p>"El mejor consultorio dental, el personal es muy profesional y amable. ¡Altamente recomendado!"</p>
                        <h4>- Ana López</h4>
                    </div>
                    <div class="testimonial">
                        <p>"Mis implantes dentales quedaron perfectos, un cambio total en mi vida."</p>
                        <h4>- Mario García</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto">
            <div class="container">
                <h2>Contacto</h2>
                <div class="contact-info">
                    <p>Teléfono: 123-456-7890</p>
                    <p>Email: info@consultoriodental.com</p>
                    <p>Dirección: Calle Principal, Ciudad, País</p>
                </div>
                <div id="map">
                    <!-- Integración de Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317713.99894673667!2d-0.3817804851846373!3d51.52877180991613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b333cf25c03%3A0x4e6b1d48c4b9a133!2sConsultorio%20Dental!5e0!3m2!1ses!2s!4v1618824721884!5m2!1ses!2s" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> Consultorio Dental. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
