<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Books</title>
    <!-- Enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // Simulación de autenticación (cambia esto según tu lógica de autenticación)
    $isAuthenticated = false; // Cambia a true si el usuario está autenticado
    ?>

    <?php if ($isAuthenticated) : ?>
        <!-- Header para usuarios autenticados -->
        <header class="w-full h-20 flex z-20 bg-red-300">
            <div class="w-full h-full mx-auto flex justify-between items-center px-4">
                <!-- Logo y nombre -->
                <div class="flex items-center">
                    <!-- Aquí se agrega tu imagen -->
                    <img src="logo.png" alt="logo" class="h-16 md:h-24">
                    <span class="self-center text-lg sm:text-xl lg:text-2xl font-semibold whitespace-nowrap text-white ml-2">Virtual Books</span>
                </div>

                <!-- Menú hamburguesa para dispositivos móviles -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                            </path>
                        </svg>
                    </button>
                </div>

                <!-- Menú para pantallas grandes -->
                <ul class="hidden md:flex justify-center gap-10 items-center">
                    <li class="font-bold text-white tracking-wider">Inicio</li>
                    <li class="font-bold text-white tracking-wider">Libros</li>
                    <li class="font-bold text-white tracking-wider">Autores</li>
                    <li class="font-bold text-white tracking-wider">Acerca de</li>
                </ul>

                <!-- Controles de usuario -->
                <div class="hidden md:flex items-center gap-4 pr-4">
                    <div class="w-[50px] h-[50px]">
                        <img src="templates/user.svg" alt="user_icon"
                            class="w-full p-2 bg-gray-200 rounded-full">
                    </div>
                </div>
            </div>

            <!-- Menú para móviles -->
            <div id="mobile-menu" class="hidden fixed top-20 z-20 right-0 w-full h-full bg-stone-100 bg-opacity-95 md:hidden">
                <div class="flex flex-col h-full space-y-6 py-4 mx-4">
                    <ul class="space-y-4 text-lg font-semibold">
                        <li class="w-6/12 sm:4/12 block px-2 py-2 text-white bg-red-500 rounded">Inicio</li>
                        <li class="w-6/12 block px-2 py-2 text-white bg-red-500 rounded">Libros</li>
                        <li class="w-6/12 block px-2 py-2 text-white bg-red-500 rounded">Autores</li>
                        <li class="w-6/12 block px-2 py-2 text-white bg-red-500 rounded">Acerca de</li>
                    </ul>
                </div>
            </div>
        </header>
    <?php else : ?>
        <!-- Header para usuarios no autenticados -->
        <header class="w-full h-20 flex items-center justify-between px-6 bg-red-300 shadow-md">
            <div class="flex items-center">
                <!-- Aquí se agrega tu imagen -->
                <img src="templates/logo.svg" alt="logo" class="h-24">
                <span class="self-center text-lg sm:text-xl lg:text-2xl font-semibold whitespace-nowrap text-white ml-2">Virtual Books</span>
            </div>
            <div class="ml-auto">
                <button
                    class="inline-block px-6 py-2 tracking-wide text-white font-semibold bg-red-500 hover:bg-gray-300 hover:text-black rounded-lg shadow-md transition duration-300 ease-in-out">
                    Iniciar Sesión
                </button>
                <button
                    class="inline-block px-6 py-2 tracking-wide text-white font-semibold bg-red-500 hover:bg-gray-300 hover:text-black rounded-lg shadow-md transition duration-300 ease-in-out">
                    Registrate
                </button>
            </div>
        </header>
    <?php endif; ?>

    <!-- Script para el menú móvil -->
    <script>
        // Script para mostrar/ocultar el menú móvil
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>