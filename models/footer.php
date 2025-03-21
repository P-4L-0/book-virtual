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
    <!-- Footer -->
    <footer class="bg-red-200 dark:bg-gray-800">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <!-- Logo y nombre -->
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <span class="self-center text-lg sm:text-xl lg:text-2xl font-semibold whitespace-nowrap dark:text-white ml-2">Virtual Books</span>
                    </a>
                </div>

                <!-- Enlaces -->
                <div class="grid grid-cols-2 gap-4 sm:gap-6 sm:grid-cols-3">
                    <!-- Recursos -->
                    <div>
                        <h2 class="mb-4 text-xs sm:text-sm font-semibold text-gray-900 uppercase dark:text-white">Recursos</h2>
                        <ul class="text-gray-700 dark:text-gray-400 font-medium">
                            <li class="mb-2 sm:mb-4">
                                <a href="/libros" class="hover:underline">Libros</a>
                            </li>
                            <li class="mb-2 sm:mb-4">
                                <a href="/categorias" class="hover:underline">Categorías</a>
                            </li>
                            <li class="mb-2 sm:mb-4">
                                <a href="/autores" class="hover:underline">Autores</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Sobre Nosotros -->
                    <div>
                        <h2 class="mb-4 text-xs sm:text-sm font-semibold text-gray-900 uppercase dark:text-white">Sobre Nosotros</h2>
                        <ul class="text-gray-700 dark:text-gray-400 font-medium">
                            <li class="mb-2 sm:mb-4">
                                <a href="/about" class="hover:underline">¿Quiénes somos?</a>
                            </li>
                            <li class="mb-2 sm:mb-4">
                                <a href="https://github.com/tu-usuario/virtual-books" class="hover:underline">Github</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Legal -->
                    <div>
                        <h2 class="mb-4 text-xs sm:text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-700 dark:text-gray-400 font-medium">
                            <li class="mb-2 sm:mb-4">
                                <a href="#" class="hover:underline">Política de privacidad</a>
                            </li>
                            <li class="mb-2 sm:mb-4">
                                <a href="#" class="hover:underline">Términos y condiciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <hr class="my-4 sm:my-6 border-gray-200 dark:border-gray-700 lg:my-8" />

            <!-- Derechos de autor -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <span class="text-xs sm:text-sm text-gray-700 dark:text-gray-400 text-center sm:text-left">©Virtual Books™. Todos los derechos reservados.</span>
            </div>
        </div>
    </footer>
</body>
</html>