<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8" / />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" / />
    <title>Gestión de Libros</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" />/>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-b from-white to-red-50 text-gray-800 font-sans">

    @include('templates.header')
<body class="bg-gradient-to-b from-white to-red-50 text-gray-800 font-sans">

    @include('templates.header')

    <!-- Hero Section -->
    <section class="w-full py-24 bg-gradient-to-r from-red-100 via-white to-red-100">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl font-extrabold text-gray-800 leading-tight mb-6">
                    Gestiona tu <span class="text-red-500">Colección de Libros</span>
                </h1>
                <p class="text-lg text-gray-600 mb-6">
                    Organiza, clasifica y mantén un registro de tus lecturas favoritas. ¡Nunca olvides un libro!
                </p>
                <a href="#caracteristicas" class="inline-block bg-red-500 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:bg-red-600 transition">Ver características</a>
    <!-- Hero Section -->
    <section class="w-full py-24 bg-gradient-to-r from-red-100 via-white to-red-100">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl font-extrabold text-gray-800 leading-tight mb-6">
                    Gestiona tu <span class="text-red-500">Colección de Libros</span>
                </h1>
                <p class="text-lg text-gray-600 mb-6">
                    Organiza, clasifica y mantén un registro de tus lecturas favoritas. ¡Nunca olvides un libro!
                </p>
                <a href="#caracteristicas" class="inline-block bg-red-500 text-white font-semibold px-6 py-3 rounded-xl shadow-lg hover:bg-red-600 transition">Ver características</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('img/index.png') }}" alt="Gestión de libros" class="w-full max-w-md mx-auto rounded-xl shadow-2xl" />
            </div>
        </div>
    </section>

    <!-- Características -->
    <section id="caracteristicas" class="w-full py-20 bg-white">
        <h2 class="text-4xl font-bold text-center text-red-500 mb-4">Características</h2>
        <p class="text-lg text-gray-600 text-center mx-auto max-w-3xl mb-12">
            Registra libros, gestiona autores, organiza por categoría y crea una lista de deseos para tus próximas lecturas.
        </p>
        <div class="flex flex-wrap justify-center gap-6 px-4">
            <div class="bg-red-100 p-6 max-w-xs w-full rounded-2xl shadow-md hover:shadow-xl transition-transform transform hover:scale-105">
                <p class="font-medium text-gray-700">📖 Registra libros con título, autor y más detalles.</p>
    </section>

    <!-- Características -->
    <section id="caracteristicas" class="w-full py-20 bg-white">
        <h2 class="text-4xl font-bold text-center text-red-500 mb-4">Características</h2>
        <p class="text-lg text-gray-600 text-center mx-auto max-w-3xl mb-12">
            Registra libros, gestiona autores, organiza por categoría y crea una lista de deseos para tus próximas lecturas.
        </p>
        <div class="flex flex-wrap justify-center gap-6 px-4">
            <div class="bg-red-100 p-6 max-w-xs w-full rounded-2xl shadow-md hover:shadow-xl transition-transform transform hover:scale-105">
                <p class="font-medium text-gray-700">📖 Registra libros con título, autor y más detalles.</p>
            </div>
            <div class="bg-red-100 p-6 max-w-xs w-full rounded-2xl shadow-md hover:shadow-xl transition-transform transform hover:scale-105">
                <p class="font-medium text-gray-700">📚 Clasifica por género, autor o estado de lectura.</p>
            </div>
            <div class="bg-red-100 p-6 max-w-xs w-full rounded-2xl shadow-md hover:shadow-xl transition-transform transform hover:scale-105">
                <p class="font-medium text-gray-700">📝 Crea una lista de deseos para futuras compras.</p>
            </div>
        </div>
    </section>
    </section>

    <!-- ¿Por qué usar la plataforma? -->
    <section class="w-full py-20 bg-gray-50">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 gap-12">
            <div class="lg:w-1/2">
                <img src="{{ asset('img/leer.png') }}" alt="Lectura" class="w-52 lg:w-64 mx-auto lg:ml-auto" />
    <!-- ¿Por qué usar la plataforma? -->
    <section class="w-full py-20 bg-gray-50">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 gap-12">
            <div class="lg:w-1/2">
                <img src="{{ asset('img/leer.png') }}" alt="Lectura" class="w-52 lg:w-64 mx-auto lg:ml-auto" />
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-red-400 mb-6 text-center lg:text-left">
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-red-400 mb-6 text-center lg:text-left">
                    ¿Por qué usar nuestra plataforma?
                </h2>
                <div class="bg-white p-6 rounded-xl shadow-xl">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Beneficios</h3>
                    <ul class="space-y-5 text-gray-600">
                        <li class="flex items-center">
                            <img src="{{ asset('img/libros.png') }}" class="w-7 h-7 mr-3" />
                            Registro detallado de cada libro en tu colección.
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('img/retroalimentacion.png') }}" class="w-7 h-7 mr-3" />
                            Clasificación flexible y personalizada de tu biblioteca.
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('img/publicidad-online.png') }}" class="w-7 h-7 mr-3" />
                            Lista de deseos organizada para tus futuras lecturas.
                        </li>
                    </ul>
                <div class="bg-white p-6 rounded-xl shadow-xl">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Beneficios</h3>
                    <ul class="space-y-5 text-gray-600">
                        <li class="flex items-center">
                            <img src="{{ asset('img/libros.png') }}" class="w-7 h-7 mr-3" />
                            Registro detallado de cada libro en tu colección.
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('img/retroalimentacion.png') }}" class="w-7 h-7 mr-3" />
                            Clasificación flexible y personalizada de tu biblioteca.
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('img/publicidad-online.png') }}" class="w-7 h-7 mr-3" />
                            Lista de deseos organizada para tus futuras lecturas.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </section>

    <!-- Footer -->
    <footer>
        @include('templates.footer')
    </footer>
    <!-- Footer -->
    <footer>
        @include('templates.footer')
    </footer>

</body>
</html>

