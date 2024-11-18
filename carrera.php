<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoría 2: Carreras</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            transition: transform 0.3s ease-in-out;
        }

        button {
            padding: 10px 20px;
            background-color: #0a9396;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        h2 {
            color: #2980b9;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            font-size: 1.2em;
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        ul li::before {
            content: '•';
            color: #2980b9;
            position: absolute;
            left: 0;
            top: 0;
            font-size: 1.5em;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .description {
            margin-top: 20px;
            background-color: #eaf2f8;
            padding: 15px;
            border-radius: 8px;
        }

        .profile {
            margin-top: 20px;
            padding-left: 20px;
        }

        .profile li::before {
            content: '✔';
            color: #27ae60;
        }

        .requisitos, .plan-estudio, .informes {
            margin-top: 20px;
        }

        .requisitos li, .plan-estudio li, .informes li {
            margin-bottom: 10px;
        }

        .plan-estudio a {
            color: #2980b9;
            text-decoration: none;
        }

        .plan-estudio a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Encabezado -->
    <header>
        <h1>Carreras</h1>
    </header>

    <!-- Contenedor principal -->
    <div class="container">

        <!-- Información de las carreras -->
        <div class="card">
            <h2>Programas Académicos</h2>
            <ul>
                <li>Tecnólogo Profesional en Electricidad Industrial</li>
                <li>Tecnólogo Profesional en Mecánica Industrial</li>
                <li>Tecnólogo Profesional en Metalurgia y Fundición</li>
                <li>Tecnólogo Profesional en Plásticos</li>
                <li>Tecnólogo Profesional en Procesos Químicos Industriales</li>
                <li>Tecnólogo Profesional en Sistemas Informáticos</li>
                <li>Tecnólogo Profesional Químico en Análisis y Procesos de Alimentos</li>
                <li>Bachillerato Tecnológico en Diseño y Construcción</li>
            </ul>
        </div>

        <!-- Descripción de la carrera: Tecnólogo Profesional en Plásticos -->
        <div class="card description">
            <h2>Tecnólogo Profesional en Plásticos</h2>
            <p>El programa del Tecnólogo Profesional en Plásticos prepara a los estudiantes para desempeñarse en el desarrollo de productos de plástico y polímeros mediante procesos de manufactura y fabricación, asegurando la calidad de los mismos, así como la implementación de técnicas innovadoras y el control de procesos industriales. Esta carrera está orientada a la industria de los plásticos y su creciente demanda en el mercado mundial.</p>
            <h3>Actividades Profesionales</h3>
            <ul>
                <li>Planificación, diseño y fabricación de productos plásticos mediante procesos como la inyección, extrusión, soplado, termoformado, entre otros.</li>
                <li>Control de calidad de materiales plásticos, asegurando la eficiencia de los procesos de producción y la calidad de los productos terminados.</li>
                <li>Implementación de tecnologías innovadoras en el proceso de fabricación de plásticos y el reciclaje de materiales plásticos.</li>
                <li>Optimización de los procesos industriales en la fabricación de productos plásticos, aplicando normativas de seguridad y eficiencia energética.</li>
            </ul>

            <h3>Perfil de Ingreso</h3>
            <ul class="profile">
                <li>Conocimientos básicos de matemáticas, física y química.</li>
                <li>Interés en la innovación tecnológica y en los procesos industriales de fabricación.</li>
                <li>Capacidad para trabajar en equipo y resolver problemas técnicos relacionados con los materiales plásticos.</li>
            </ul>

            <h3>Perfil de Egreso</h3>
            <p>El egresado del Tecnólogo Profesional en Plásticos será capaz de diseñar, optimizar, fabricar y controlar productos plásticos aplicando las técnicas más innovadoras y respetando las normativas industriales y de seguridad. Podrá desempeñarse tanto en la industria del plástico como en áreas de investigación y desarrollo en nuevas aplicaciones para este material.</p>

            <h3>Requisitos de Admisión</h3>
            <ul class="requisitos">
                <li>Acta de nacimiento original en buen estado.</li>
                <li>Certificado de secundaria original.</li>
                <li>Solicitud de ingreso.</li>
                <li>Certificado parcial de bachillerato (sólo para aspirantes a nivel superior).</li>
            </ul>

            <h3>Proceso de Admisión</h3>
            <ol class="requisitos">
                <li>Verificar las fechas del calendario de trámites del nivel al que se desea aspirar y registrarse.</li>
                <li>Imprimir la ficha de depósito y realizar el pago en la sucursal bancaria de su preferencia.</li>
                <li>Acceder a la página www.escolar.udg.mx para imprimir el comprobante de registro.</li>
                <li>Presentarse con una identificación oficial en la cita asignada para entregar la solicitud de ingreso.</li>
                <li>Aplicación del examen de admisión.</li>
                <li>Entregar documentos originales dentro del período de entrega señalado en el Calendario de Trámites.</li>
            </ol>

            <h3>Plan de Estudio</h3>
            <ul class="plan-estudio">
                <li><a href="http://politecnica.sems.udg.mx/trayectoria/Trayecto-Formativo-Plastico.pdf" target="_blank">Descargar Plan de Estudio (PDF)</a></li>
            </ul>

            <h3>Informes</h3>
            <ul class="informes">
                <li>Nombre del responsable: Mtro. Hector Orozco Nuñez</li>
                <li>Horario de atención: 8:00 a 18:00 hrs de lunes a viernes</li>
                <li>Teléfono: (33) 3942 4100 Ext. 120</li>
                <li>e-mail: <a href="mailto:hector.orozco@sems.udg.mx">hector.orozco@sems.udg.mx</a></li>
                <li>Dirección: Av. Revolución y Calle 44, Guadalajara, Jal. Tel: (33) 3619 9814</li>
            </ul>
        </div>

        <!-- Otras carreras -->
        <div class="card description">
            <h2>Tecnólogo Profesional en Electricidad Industrial</h2>
            <p>El programa del Tecnólogo Profesional en Electricidad Industrial prepara a los estudiantes para su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar en las siguientes actividades profesionales:</p>
            <ul>
                <li>Instalar, reparar y dar mantenimiento a los sistemas eléctricos automatizados y a los equipos electromecánicos.</li>
                <li>Aplicar la normativa técnica, seguridad y medio ambiente en la instalación de sistemas eléctricos.</li>
            </ul>
        </div>

    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Universidad Politécnica de Guadalajara. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
