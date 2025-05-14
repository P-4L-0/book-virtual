<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Gestión de Colección de Libros</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full font-sans bg-[#f3f4f6] text-gray-800">
    <div class="w-full">
        @include('templates.header')
    </div>

    <!-- Sección de "¿Por qué elegir nuestra aplicación?" -->
    <section class="w-full py-16 px-6 md:px-16 bg-red-50 text-gray-800 rounded-xl shadow-xl max-w-7xl mx-auto mb-16 mt-24">
        <div class="flex flex-col lg:flex-row gap-8 items-center justify-between">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="font-bold text-3xl lg:text-5xl mb-6">
                    ¿Por qué elegir nuestra aplicación de gestión de colección de libros?
                </h2>
                <ul class="space-y-4 text-start text-sm md:text-base lg:text-xl list-disc pl-6 lg:pl-12">
                    <li>Registra y organiza tus libros adquiridos fácilmente.</li>
                    <li>Añade detalles de los autores de cada libro.</li>
                    <li>Clasifica tu colección por categorías personalizadas.</li>
                    <li>Crea y gestiona una lista de deseos para futuras compras.</li>
                    <li>Acceso desde cualquier dispositivo para una experiencia fluida.</li>
                </ul>
            </div>

            <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img src="{{ asset('img/acercaDe.png') }}" alt="Gestión de libros" class="max-w-md w-full rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Sección Misión -->
    <section class="w-full py-16 px-6 lg:px-20 bg-white rounded-xl shadow-lg mt-16 max-w-7xl mx-auto mb-16">
        <div class="flex flex-col lg:flex-row gap-8 items-center justify-between">
            <!-- Imagen -->
            <div class="lg:w-1/3 flex justify-center">
                <img src="{{ asset('img/libro.png') }}" alt="Libro" class="w-64 h-auto rounded-xl shadow-lg">
            </div>

            <!-- Texto Misión -->
            <div class="lg:w-2/3 text-center lg:text-left">
                <h2 class="font-bold text-4xl text-red-500 mb-4">Misión</h2>
                <p class="text-lg leading-relaxed text-gray-700">
                    Nuestra misión es proporcionar una plataforma fácil de usar para que los usuarios puedan gestionar y organizar su colección de libros de manera eficiente. Buscamos ayudar a los lectores a registrar sus libros, organizar su biblioteca, gestionar detalles de los autores y crear listas de deseos para futuras adquisiciones.
                </p>
            </div>
        </div>
    </section>

    <!-- Sección Visión -->
    <section class="w-full py-16 px-6 lg:px-20 bg-red-100 text-gray-800 rounded-xl shadow-lg mt-16  max-w-7xl mx-auto mb-16">
        <div class="flex flex-col lg:flex-row-reverse gap-8 items-center justify-between">
            <!-- Texto Visión -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="font-bold text-4xl text-red-500 mb-4">Visión</h2>
                <p class="text-lg leading-relaxed text-gray-700">
                    Nuestra visión es ser la plataforma líder para la gestión de colecciones de libros, ayudando a los usuarios a organizar sus bibliotecas, descubrir nuevos libros y gestionar sus deseos de adquisición de manera eficiente y organizada.
                </p>
            </div>

            <!-- Imagen -->
            <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                <img src="{{ asset('img/leyendo.jpg') }}" alt="Niño leyendo" class="w-full max-w-md h-auto rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Beneficios con tarjetas -->
    <section class="w-full px-6 lg:px-20 py-16 bg-gray-100 rounded-xl mt-16 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="font-bold text-4xl mb-2">Beneficios de usar nuestra aplicación</h2>
            <h3 class="text-red-500 font-bold text-2xl">Tus Beneficios</h3>
            <p class="text-lg mt-2 max-w-2xl mx-auto leading-relaxed text-gray-700">
                Únete a nuestra plataforma y disfruta de una experiencia única, con acceso para registrar libros, gestionar autores y crear listas de deseos.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Beneficio 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border transform transition-transform duration-300 hover:scale-105 hover:-translate-y-2">
                <div class="bg-red-100 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <span class="text-red-500 font-bold text-3xl">01</span>
                </div>
                <h3 class="font-semibold text-xl mb-2 text-red-500">Registro de Libros</h3>
                <p class="text-base leading-loose line-clamp-3">
                    Registra tus libros con detalles completos como título, autor, fecha de adquisición y más.
                </p>
            </div>

            <!-- Beneficio 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border transform transition-transform duration-300 hover:scale-105 hover:-translate-y-2">
                <div class="bg-red-100 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <span class="text-red-500 font-bold text-3xl">02</span>
                </div>
                <h3 class="font-semibold text-xl mb-2 text-red-500">Categorización Personalizada</h3>
                <p class="text-base leading-loose line-clamp-3">
                    Organiza tu colección de libros en categorías personalizadas como género, autor, etc.
                </p>
            </div>

            <!-- Beneficio 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 border transform transition-transform duration-300 hover:scale-105 hover:-translate-y-2">
                <div class="bg-red-100 rounded-full h-16 w-16 flex items-center justify-center mb-4">
                    <span class="text-red-500 font-bold text-3xl">03</span>
                </div>
                <h3 class="font-semibold text-xl mb-2 text-red-500">Lista de Deseos</h3>
                <p class="text-base leading-loose line-clamp-3">
                    Crea una lista de libros deseados para futuras adquisiciones y compras.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('templates.footer')
    </footer>

    <script>
        function toggleText(id) {
            const el = document.getElementById(id);
            el.classList.toggle('line-clamp-3');
        }
    </script>


</body>

</html>
