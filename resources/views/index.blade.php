<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos de Fútbol - La Mejor Experiencia Deportiva</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- AOS CSS para animaciones de scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: var(--secondary-color);
        }

        .jumbotron {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://example.com/imagen-futbol.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 0;
            padding: 10rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .navbar {
            transition: all 0.4s;
        }

        .navbar-scrolled {
            background-color: var(--secondary-color) !important;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .card {
            transition: all 0.3s;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .team-img {
            max-width: 150px;
            margin: 0 auto;
            transition: transform 0.3s ease-in-out;
            border: 4px solid var(--primary-color);
        }

        .team-img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .countdown {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0;
        }

        .countdown-item {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .tournament-details {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stats-item {
            text-align: center;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .stats-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .stats-item i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
            margin: 1rem auto 0;
        }

        @media (max-width: 768px) {
            .jumbotron {
                padding: 8rem 1rem;
            }

            .display-4 {
                font-size: 2.5rem;
            }

            .lead {
                font-size: 1.1rem;
            }

            .countdown-item {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .display-4 {
                font-size: 2rem;
            }

            .lead {
                font-size: 1rem;
            }

            .btn-lg {
                font-size: 1rem;
                padding: 0.5rem 1rem;
            }

            .countdown-item {
                font-size: 1.5rem;
            }
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .testimonial {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .faq-item {
            margin-bottom: 1.5rem;
        }

        .faq-question {
            font-weight: bold;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            margin-top: 0.5rem;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* Aspecto 16:9 */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-futbol"></i> Torneos de Fútbol</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#torneos">Torneos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#equipos">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="inicio" class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4" data-aos="fade-up">Torneos de Fútbol</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">Descubre la emoción de los mejores torneos de fútbol
            </p>
            <a href="#torneos" class="btn btn-primary btn-lg mt-3" data-aos="fade-up" data-aos-delay="400">Ver
                Torneos</a>
        </div>
    </header>

    <section class="countdown text-center">
        <div class="container">
            <h2 class="mb-4">Próximo torneo comienza en:</h2>
            <div class="row">
                <div class="col-3">
                    <div class="countdown-item" id="days">00</div>
                    <div>Días</div>
                </div>
                <div class="col-3">
                    <div class="countdown-item" id="hours">00</div>
                    <div>Horas</div>
                </div>
                <div class="col-3">
                    <div class="countdown-item" id="minutes">00</div>
                    <div>Minutos</div>
                </div>
                <div class="col-3">
                    <div class="countdown-item" id="seconds">00</div>
                    <div>Segundos</div>
                </div>
            </div>
        </div>
    </section>

    <main class="container py-5">
        <section id="torneos" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Próximos Torneos</h2>
            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="{{ route('torneos.create') }}" class="btn btn-primary btn-block">Crear Torneo</a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-secondary btn-block" data-toggle="modal"
                        data-target="#unirseATorneoModal">Unirse a Torneo</a>
                </div>
            </div>
            <div class="row">
                @foreach($torneos as $torneo)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="card h-100 shadow">
                            <img src="{{ asset($torneo->imagen_url ?? 'ruta/por_defecto.jpg') }}" class="card-img-top"
                                alt="Imagen del Torneo">
                            <div class="card-body">
                                <h5 class="card-title">{{ $torneo->nombre }}</h5>
                                <p class="card-text">Fecha: {{ $torneo->fecha_inicio }} - {{ $torneo->fecha_fin }}</p>
                                <p class="card-text">Lugar: {{ $torneo->lugar }}</p>
                                <p class="card-text"><strong>Participantes:</strong> {{ $torneo->grupotorneos->count() }}
                                </p>
                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                    data-target="#torneoModal{{ $torneo->id }}">Más información</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de detalles del torneo -->
                    <div class="modal fade" id="torneoModal{{ $torneo->id }}" tabindex="-1"
                        aria-labelledby="torneoModalLabel{{ $torneo->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="torneoModalLabel{{ $torneo->id }}">{{ $torneo->nombre }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Descripción:</strong> {{ $torneo->descripcion }}</p>
                                    <p><strong>Premio:</strong> {{ $torneo->premio }}</p>
                                    <p><strong>Fecha:</strong> {{ $torneo->fecha_inicio }} - {{ $torneo->fecha_fin }}</p>
                                    <p><strong>Participantes:</strong> {{ $torneo->grupotorneos->count() }}</p>
                                    <p><strong>Equipos:</strong></p>
                                    <ul>
                                        @foreach($torneo->grupotorneos as $grupoTorneo)
                                            <li>{{ $grupoTorneo->equipo->nombre }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>



            <!-- Repite para otros torneos -->
            </div>
        </section>

        <section id="torneo-destacado" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Torneo Destacado: Copa Primavera</h2>
            <div class="tournament-details" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Detalles del Torneo</h3>
                        <ul>
                            <li>Fecha: 15 de Mayo - 30 de Junio</li>
                            <li>Lugar: Estadio Municipal</li>
                            <li>Categorías: Sub-15, Sub-17, Sub-20</li>
                            <li>Premios: $10,000 en total</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3>Reglas Principales</h3>
                        <ul>
                            <li>Partidos de 90 minutos</li>
                            <li>11 jugadores por equipo</li>
                            <li>Sistema de grupos y eliminatorias</li>
                            <li>VAR disponible en semifinales y final</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="estadisticas" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Estadísticas del Torneo Anterior</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in">
                    <div class="stats-item">
                        <i class="fas fa-futbol mb-3"></i>
                        <h4>120</h4>
                        <p>Goles Marcados</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stats-item">
                        <i class="fas fa-users mb-3"></i>
                        <h4>16</h4>
                        <p>Equipos Participantes</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stats-item">
                        <i class="fas fa-trophy mb-3"></i>
                        <h4>1</h4>
                        <p>Campeón</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stats-item">
                        <i class="fas fa-star mb-3"></i>
                        <h4>10</h4>
                        <p>Jugadores Destacados</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="equipos" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Equipos Destacados</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in">
                    <img src="https://example.com/equipo1.jpg" class="img-fluid rounded-circle team-img" alt="Equipo 1">
                    <h5 class="text-center mt-2">Los Tigres</h5>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://example.com/equipo2.jpg" class="img-fluid rounded-circle team-img" alt="Equipo 2">
                    <h5 class="text-center mt-2">Águilas FC</h5>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://example.com/equipo3.jpg" class="img-fluid rounded-circle team-img" alt="Equipo 3">
                    <h5 class="text-center mt-2">Leones</h5>
                </div>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://example.com/equipo4.jpg" class="img-fluid rounded-circle team-img" alt="Equipo 4">
                    <h5 class="text-center mt-2">Real Deportivo</h5>
                </div>
            </div>
        </section>

        <section id="noticias" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Últimas Noticias</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="card">
                        <img src="https://example.com/noticia1.jpg" class="card-img-top" alt="Noticia 1">
                        <div class="card-body">
                            <h5 class="card-title">Se anuncia la sede del próximo torneo</h5>
                            <p class="card-text">La ciudad de Valencia ha sido elegida como sede para el próximo
                                Campeonato Regional...</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <!-- Repite para otras noticias -->
            </div>
        </section>

        <section id="momentos-destacados" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Momentos Destacados</h2>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="video-container" data-aos="zoom-in">
                        <iframe width="560" height="315" url="https://www.youtube.com/watch?v=2X2RN02Dq1M"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p data-aos="fade-up">Revive los mejores momentos de nuestros torneos anteriores y prepárate para la
                    emoción que te espera en los próximos eventos.</p>
                <a href="#torneos" class="btn btn-primary" data-aos="fade-up" data-aos-delay="100">Ver Próximos
                    Torneos</a>
            </div>
        </section>

        <section id="caracteristicas" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Características de Nuestros Torneos</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="text-center">
                        <i class="fas fa-trophy feature-icon"></i>
                        <h4>Premios Atractivos</h4>
                        <p>Ofrecemos premios en efectivo y trofeos para los equipos ganadores.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <i class="fas fa-video feature-icon"></i>
                        <h4>Transmisión en Vivo</h4>
                        <p>Todos los partidos son transmitidos en vivo a través de nuestra plataforma.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h4>Estadísticas Detalladas</h4>
                        <p>Ofrecemos estadísticas completas de equipos y jugadores en tiempo real.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonios" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Lo que dicen nuestros participantes</h2>
            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up">
                    <div class="testimonial">
                        <img src="https://example.com/jugador1.jpg" alt="Jugador 1">
                        <h5>Carlos Rodríguez</h5>
                        <p>"Participar en estos torneos ha sido una experiencia increíble. La organización es excelente
                            y la competencia de alto nivel."</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial">
                        <img src="https://example.com/jugador2.jpg" alt="Jugador 2">
                        <h5>Laura Martínez</h5>
                        <p>"Los torneos están muy bien organizados y ofrecen una gran oportunidad para mejorar nuestras
                            habilidades y conocer a otros equipos."</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Preguntas Frecuentes</h2>
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">¿Cómo puedo inscribir a mi equipo en un torneo?</div>
                <div class="faq-answer">Para inscribir a tu equipo, debes crear una cuenta en nuestra plataforma y luego
                    seleccionar el torneo en el que deseas participar. Sigue las instrucciones para completar el proceso
                    de inscripción y pago.</div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-question">¿Cuál es la edad mínima para participar?</div>
                <div class="faq-answer">La edad mínima varía según la categoría del torneo. Generalmente, ofrecemos
                    categorías desde Sub-12 hasta adultos. Consulta los detalles específicos de cada torneo para conocer
                    los requisitos de edad.</div>
            </div>
            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-question">¿Qué pasa si un jugador se lesiona durante el torneo?</div>
                <div class="faq-answer">Contamos con personal médico en todos nuestros torneos para atender cualquier
                    emergencia. Además, recomendamos que todos los jugadores tengan un seguro médico vigente.</div>
            </div>
        </section>

        <section id="newsletter" class="mb-5">
            <h2 class="text-center mb-4" data-aos="fade-up">Suscríbete a nuestro boletín</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="newsletterForm" data-aos="fade-up">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Tu correo electrónico" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Suscribirse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Torneos de Fútbol. Todos los derechos reservados.</p>
            <div class="mt-3">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- Modal para detalles del torneo -->
    <div class="modal fade" id="torneoModal1" tabindex="-1" role="dialog" aria-labelledby="torneoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="torneoModalLabel">Copa Primavera</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Detalles del Torneo</h3>
                    <p>La Copa Primavera es nuestro torneo más prestigioso, reuniendo a los mejores equipos juveniles de
                        la región.</p>
                    <ul>
                        <li>Fecha: 15 de Mayo - 30 de Junio</li>
                        <li>Lugar: Estadio Municipal</li>
                        <li>Categorías: Sub-15, Sub-17, Sub-20</li>
                        <li>Premios: $10,000 en total</li>
                    </ul>
                    <h3>Formato del Torneo</h3>
                    <p>El torneo se divide en dos fases:</p>
                    <ol>
                        <li>Fase de grupos: 4 grupos de 4 equipos cada uno</li>
                        <li>Fase eliminatoria: Cuartos de final, semifinales y final</li>
                    </ol>
                    <h3>Cómo Participar</h3>
                    <p>Las inscripciones están abiertas hasta el 30 de abril. Para más información, contacta con nuestro
                        equipo de organización.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <a href="#" class="btn btn-primary">Inscribirse</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Crear Torneo -->
    <div class="modal fade" id="crearTorneoModal" tabindex="-1" role="dialog" aria-labelledby="crearTorneoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearTorneoModalLabel">Crear Nuevo Torneo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nombreTorneo">Nombre del Torneo</label>
                            <input type="text" class="form-control" id="nombreTorneo" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaInicio">Fecha de Inicio</label>
                            <input type="date" class="form-control" id="fechaInicio" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaFin">Fecha de Fin</label>
                            <input type="date" class="form-control" id="fechaFin" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcionTorneo">Descripción</label>
                            <textarea class="form-control" id="descripcionTorneo" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Crear Torneo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Unirse a Torneo -->
    <div class="modal fade" id="unirseATorneoModal" tabindex="-1" role="dialog"
        aria-labelledby="unirseATorneoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="unirseATorneoModalLabel">Unirse a un Torneo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="codigoTorneo">Código del Torneo</label>
                            <input type="text" class="form-control" id="codigoTorneo" required>
                        </div>
                        <div class="form-group">
                            <label for="nombreEquipo">Nombre del Equipo</label>
                            <input type="text" class="form-control" id="nombreEquipo" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Unirse al Torneo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <!-- AOS JS para animaciones de scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Navbar scroll
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('navbar-scrolled');
            } else {
                $('.navbar').removeClass('navbar-scrolled');
            }
        });

        // Desplazamiento suave
        $('a[href^="#"]').on('click', function (event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
            }
        });

        // Cuenta regresiva
        function updateCountdown() {
            const targetDate = new Date("2023-12-31T23:59:59").getTime();
            const now = new Date().getTime();
            const difference = targetDate - now;

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = days.toString().padStart(2, '0');
            document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Funcionalidad para las preguntas frecuentes
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });

        // Manejar el formulario de suscripción al boletín
        document.getElementById('newsletterForm').addEventListener('submit', function (event) {
            event.preventDefault();
            alert('¡Gracias por suscribirte a nuestro boletín!');
            this.reset();
        });
    </script>
</body>

</html>