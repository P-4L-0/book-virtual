<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="storage/svg/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="flex h-screen">
    <class="min-h-screen flex font-sans">
        <!-- Incluye el archivo de la barra lateral (sidebar) -->
        <?php include 'templates/menu.php'; ?>

        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <h1 class="text-3xl font-extrabold drop-shadow-lg">
                INFORMACION
            </h1>
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <h2 class="text-3xl font-extrabold  text-red-600 i  drop-shadow-lg">
                    Libros
                </h2>
                <div class="w-full md:w-72 bg-white p-4   rounded-lg shadow-sm">
                    <div class="flex items-center gap-2">
                        <input type="text" placeholder="Buscar libro..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <button
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div
                    class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105 duration-300 max-w-md mx-auto">
                    <h4
                        class="text-2xl font-semibold text-gray-800 mb-4 hover:text-green-600 transition-colors duration-300">
                        Libro 1</h4>

                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        Descripción del libro 1. Una breve sinopsis del contenido del libro que cautivará tu atención
                        con su historia envolvente y personajes fascinantes.
                    </p>

                    <div class="flex justify-between items-center mt-6">
                        <span class="text-sm text-gray-500">Categoría: <span
                                class="font-semibold text-gray-600">Ficción</span></span>
                        <a href="#"
                            class="text-green-600 hover:underline font-semibold text-lg transition-colors duration-300">Leer
                            más</a>
                    </div>
                </div>



            </div>

            <!-- Sección de Autores -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <h2 class="text-3xl font-extrabold from--400   text-red-600 idrop-shadow-lg">
                    Autores
                </h2>
                <div class="w-full md:w-72 bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex items-center gap-2">
                        <input type="text" placeholder="Buscar autor..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <button
                            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div
                    class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105 duration-300">

                    <h4 class="text-lg font-medium text-gray-800 mb-2">Autor 1</h4>
                    <p class="text-gray-600 mb-4">Descripción del autor 1. Información relevante sobre el autor.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Libros: 5</span>
                        <a href="#" class="text-green-500 hover:underline font-semibold">Ver perfil</a>
                    </div>
                </div>


            </div>

        </main>

        </div>

</body>

</html>