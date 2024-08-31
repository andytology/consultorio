<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas - Consultorio Dental</title>
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #f2f2f2;
            --text-color: #333;
            --light-text-color: #fff;
            --highlight-color: #f8f9fa;
        }

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
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
            color: var(--primary-color);
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .consulta-item {
            background-color: var(--highlight-color);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .consulta-item h3 {
            font-size: 20px;
            margin-top: 0;
            color: var(--primary-color);
        }

        .consulta-item p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .consulta-item .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: var(--light-text-color);
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .consulta-item .cta-button:hover {
            background-color: #0056b3;
        }

        form {
            background-color: var(--highlight-color);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        form h3 {
            font-size: 20px;
            margin-top: 0;
            color: var(--primary-color);
        }

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        form button {
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: var(--light-text-color);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form button:hover {
            background-color: #0056b3;
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
            <h1>Consultas Disponibles</h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Médicos</a></li>
                    <li><a href="#">Consultas</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h2>Elige tu Consulta</h2>
        <div class="consulta-item">
            <h3>Consulta General</h3>
            <p>Realiza una consulta general con nuestros especialistas para una revisión completa de tu salud dental.</p>
            <a href="#" class="cta-button">Agendar Consulta</a>
        </div>
        <div class="consulta-item">
            <h3>Consulta de Ortodoncia</h3>
            <p>Consulta especializada en ortodoncia para la evaluación y corrección de la alineación dental.</p>
            <a href="#" class="cta-button">Agendar Consulta</a>
        </div>
        <div class="consulta-item">
            <h3>Consulta de Estética Dental</h3>
            <p>Mejora la apariencia de tu sonrisa con nuestra consulta especializada en estética dental.</p>
            <a href="#" class="cta-button">Agendar Consulta</a>
        </div>

        <form>
            <h3>Solicita más información</h3>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
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
