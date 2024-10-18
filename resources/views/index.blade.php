<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos de Fútbol - La Experiencia Definitiva</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10B981',
                        secondary: '#0369A1',
                        accent: '#F59E0B',
                    },
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="font-sans text-gray-800 bg-gray-100">
    <nav class="fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-3xl font-extrabold text-white"><i class="fas fa-futbol mr-2 text-accent"></i>Torneos de Fútbol</a>
            <div class="hidden md:flex space-x-4">
                <a href="#inicio" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">Inicio</a>
                <a href="#torneos" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">Torneos</a>
                <a href="#equipos" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">Equipos</a>
                <a href="#noticias" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">Noticias</a>
                <a href="#contacto" class="bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">Contacto</a>
            </div>
            <button class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <header id="inicio" class="relative h-screen flex items-center justify-center text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-60 z-10"></div>
        <video autoplay loop muted class="absolute w-auto min-w-full min-h-full max-w-none">
            <source src="https://example.com/background-video.mp4" type="video/mp4">
        </video>
        <div class="container mx-auto px-4 text-center relative z-20" data-aos="fade-up">
            <h1 class="text-6xl md:text-8xl font-extrabold mb-6 text-accent">Torneos de Fútbol</h1>
            <p class="text-2xl md:text-3xl mb-12">Vive la pasión del fútbol en su máxima expresión</p>
            <a href="#torneos" class="bg-primary hover:bg-secondary text-white font-bold py-4 px-10 rounded-full transition duration-300 ease-in-out transform hover:scale-105 text-xl">
                Descubre los Torneos
            </a>
        </div>
    </header>

    <section class="bg-gradient-to-r from-primary to-secondary text-white py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12" data-aos="fade-up">El próximo gran torneo comienza en:</h2>
            <div class="flex justify-center space-x-8" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-6xl font-bold" id="days">00</div>
                    <div class="text-2xl mt-2">Días</div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-6xl font-bold" id="hours">00</div>
                    <div class="text-2xl mt-2">Horas</div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-6xl font-bold" id="minutes">00</div>
                    <div class="text-2xl mt-2">Minutos</div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-6xl font-bold" id="seconds">00</div>
                    <div class="text-2xl mt-2">Segundos</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nueva sección de botones -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="{{ route('torneos.create') }}" class="bg-primary hover:bg-secondary text-white font-bold py-4 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 text-center text-xl">
                    <i class="fas fa-plus-circle mr-2"></i> Crear Torneo
                </a>
                <a href="{{ route('torneos.index') }}" class="bg-accent hover:bg-primary text-white font-bold py-4 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 text-center text-xl">
                    <i class="fas fa-trophy mr-2"></i> Ver Torneos
                </a>
                <a href="{{ route('equipos.create') }}" class="bg-secondary hover:bg-primary text-white font-bold py-4 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 text-center text-xl">
                    <i class="fas fa-users mr-2"></i> Crear Equipo
                </a>
                <a href="{{ route('equipos.index') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 text-center text-xl">
                    <i class="fas fa-list mr-2"></i> Ver Equipos
                </a>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 py-24">
        <section id="torneos" class="mb-24">
            <h2 class="text-5xl font-bold text-center mb-16" data-aos="fade-up">Próximos Torneos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach($torneos as $torneo)
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition duration-500 hover:scale-105" data-aos="fade-up">
                        <img src="{{ asset($torneo->imagen_url ?? 'ruta/por_defecto.jpg') }}" class="w-full h-64 object-cover" alt="Imagen del Torneo">
                        <div class="p-8">
                            <h3 class="text-3xl font-bold mb-4">{{ $torneo->nombre }}</h3>
                            <p class="text-gray-600 mb-4"><i class="far fa-calendar-alt mr-2 text-primary"></i>{{ $torneo->fecha_inicio }} - {{ $torneo->fecha_fin }}</p>
                            <p class="text-gray-600 mb-4"><i class="fas fa-map-marker-alt mr-2 text-primary"></i>{{ $torneo->lugar }}</p>
                            <p class="text-gray-600 mb-6"><i class="fas fa-users mr-2 text-primary"></i><strong>Participantes:</strong> {{ $torneo->grupotorneos->count() }}</p>
                            <a href="#" class="bg-primary hover:bg-secondary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4" data-toggle="modal" data-target="#torneoModal{{ $torneo->id }}">
                                Más información
                            </a>
                            <a href="#" class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4">
                                Inscribirse
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="#" class="bg-secondary hover:bg-primary text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out inline-block">
                    Ver todos los torneos
                </a>
            </div>
        </section>

        <section id="estadisticas" class="mb-24">
            <h2 class="text-5xl font-bold text-center mb-16" data-aos="fade-up">Estadísticas del Torneo Anterior</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="bg-white rounded-xl shadow-2xl p-8 text-center transform transition duration-500 hover:scale-105" data-aos="zoom-in">
                    <i class="fas fa-futbol text-7xl text-primary mb-6"></i>
                    <h4 class="text-4xl font-bold mb-4">120</h4>
                    <p class="text-xl text-gray-600">Goles Marcados</p>
                </div>
                <div class="bg-white rounded-xl shadow-2xl p-8 text-center transform transition duration-500 hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-users text-7xl text-primary mb-6"></i>
                    <h4 class="text-4xl font-bold mb-4">16</h4>
                    <p class="text-xl text-gray-600">Equipos Participantes</p>
                </div>
                <div class="bg-white rounded-xl shadow-2xl p-8 text-center transform transition duration-500 hover:scale-105" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-trophy text-7xl text-primary mb-6"></i>
                    <h4 class="text-4xl font-bold mb-4">1</h4>
                    <p class="text-xl text-gray-600">Campeón</p>
                </div>
                <div class="bg-white rounded-xl shadow-2xl p-8 text-center transform transition duration-500 hover:scale-105" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fas fa-star text-7xl text-primary mb-6"></i>
                    <h4 class="text-4xl font-bold mb-4">10</h4>
                    <p class="text-xl text-gray-600">Jugadores Destacados</p>
                </div>
            </div>
        </section>

        <section id="equipos" class="mb-24">
            <h2 class="text-5xl font-bold text-center mb-16" data-aos="fade-up">Equipos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach($equipos as $equipo)
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition duration-500 hover:scale-105" data-aos="fade-up">
                        <img src="{{ asset($equipo->logo_url ?? 'ruta/logo_por_defecto.jpg') }}" class="w-full h-48 object-contain bg-gray-100 p-4" alt="Logo del Equipo">
                        <div class="p-8">
                            <h3 class="text-3xl font-bold mb-4">{{ $equipo->nombre }}</h3>
                            <p class="text-gray-600 mb-4"><i class="fas fa-trophy mr-2 text-primary"></i>Títulos: {{ $equipo->titulos }}</p>
                            <p class="text-gray-600 mb-6"><i class="fas fa-user-friends mr-2 text-primary"></i>Jugadores: {{ $equipo->jugadores->count() }}</p>
                            <a href="#" class="bg-primary hover:bg-secondary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4">
                                Ver Perfil
                            </a>
                            <a href="#" class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4">
                                Seguir Equipo
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="#" class="bg-secondary hover:bg-primary text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out inline-block">
                    Ver todos los equipos
                </a>
            </div>
        </section>

        <section id="noticias" class="mb-24">
            <h2 class="text-5xl font-bold text-center mb-16" data-aos="fade-up">Últimas Noticias</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach($noticias as $noticia)
                    <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition duration-500 hover:scale-105" data-aos="fade-up">
                        <img src="{{ asset($noticia->imagen_url ?? 'ruta/imagen_por_defecto.jpg') }}" class="w-full h-48 object-cover" alt="Imagen de la Noticia">
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-4">{{ $noticia->titulo }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($noticia->contenido, 100) }}</p>
                            <a href="#" class="bg-primary hover:bg-secondary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4">
                                Leer más
                            </a>
                            <a href="#" class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out block text-center mt-4">
                                Compartir
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="#" class="bg-secondary hover:bg-primary text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out inline-block">
                    Ver todas las noticias
                </a>
            </div>
        </section>

        <section id="contacto" class="mb-24">
            <h2 class="text-5xl font-bold text-center mb-16" data-aos="fade-up">Contáctanos</h2>
            <div class="bg-white rounded-xl shadow-2xl p-12" data-aos="fade-up">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="w-full px-4 py-3 rounded-lg bg-gray-100 border-transparent focus:border-primary focus:bg-white focus:ring-0">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-100 border-transparent focus:border-primary focus:bg-white focus:ring-0">
                        </div>
                    </div>
                    <div class="mb-8">
                        <label for="mensaje" class="block text-gray-700 font-bold mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="w-full px-4 py-3 rounded-lg bg-gray-100 border-transparent focus:border-primary focus:bg-white focus:ring-0"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-primary hover:bg-secondary text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-secondary text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Torneos de Fútbol</h3>
                    <p class="mb-4">La mejor experiencia en torneos de fútbol.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-accent transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-accent transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-accent transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white hover:text-accent transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Enlaces Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="hover:text-accent transition">Inicio</a></li>
                        <li><a href="#torneos" class="hover:text-accent transition">Torneos</a></li>
                        <li><a href="#equipos" class="hover:text-accent transition">Equipos</a></li>
                        <li><a href="#noticias" class="hover:text-accent transition">Noticias</a></li>
                        <li><a href="#contacto" class="hover:text-accent transition">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Contacto</h4>
                    <ul class="space-y-2">
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Calle Principal, Ciudad</li>
                        <li><i class="fas fa-phone mr-2"></i> +1 234 567 890</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@torneosdefutbol.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Boletín Informativo</h4>
                    <p class="mb-4">Suscríbete para recibir las últimas noticias y actualizaciones.</p>
                    <form>
                        <input type="email" placeholder="Tu email" class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 border-transparent focus:border-accent focus:bg-white focus:ring-0 mb-2">
                        <button type="submit" class="bg-accent hover:bg-primary text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out w-full">
                            Suscribirse
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p>&copy; 2024 Torneos de Fútbol. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-secondary', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-secondary', 'shadow-lg');
            }
        });

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
    </script>
</body>

</html>
