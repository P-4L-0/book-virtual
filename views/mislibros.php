<?php

session_start();

if(isset($_SESSION["id_usuario"])){
   //nothing here for now
}else{
    header('Location: ../views/index.php');
    exit;
}
?>
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
    <div class="min-h-screen flex font-sans">
        <?php include 'templates/menu.php'; ?>
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div class="container mx-auto p-4">
                <header class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-800">Mis Libros</h1>
                </header>

                <div class="mb-8">
                    <input type="text" placeholder="Buscar libro..."
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Carta 1 -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <!-- Contenido de la tarjeta -->
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">La Metamorfosis</h2>
                            <p class="text-gray-600">Autor: Franz Kafka</p>
                            <p class="text-gray-500 mt-2">Publicado en 1915, esta obra es una de las más famosas de
                                Kafka, explorando temas como la alienación y la identidad.</p>
                            <div class="mt-4">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Clásico</span>
                            </div>
                        </div>

                        <div class="flex justify-end items-center p-4 border-t border-gray-100">
                            <img class="h-6 w-6 mr-4 cursor-pointer" src="../resources/img/x.png" alt="Eliminar" />
                            <img class="h-6 w-6 cursor-pointer" src="../resources/img/heart.png" alt="Favorito" />
                        </div>
                    </div>

                    <!-- Carta 2 -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">El Proceso</h2>
                            <p class="text-gray-600">Autor: Franz Kafka</p>
                            <p class="text-gray-500 mt-2">Una novela que narra la lucha de un hombre contra un sistema
                                burocrático absurdo y opresivo.</p>
                            <div class="mt-4">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Clásico</span>
                            </div>
                        </div>
                        <div class="flex justify-end items-center p-4 border-t border-gray-100">
                            <img class="h-6 w-6 mr-4 cursor-pointer" src="../resources/img/x.png" alt="Eliminar" />
                            <img class="h-6 w-6 cursor-pointer" src="../resources/img/heart.png" alt="Favorito" />
                        </div>
                    </div>

                    <!-- Carta 3 -->
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Carta al Padre</h2>
                            <p class="text-gray-600">Autor: Franz Kafka</p>
                            <p class="text-gray-500 mt-2">Una carta íntima y emocional que Kafka escribió a su padre,
                                explorando su relación complicada.</p>
                            <div class="mt-4">
                                <span
                                    class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">Autobiográfico</span>
                            </div>
                        </div>
                        <div class="flex justify-end items-center p-4 border-t border-gray-100">
                            <img class="h-6 w-6 mr-4 cursor-pointer" src="../resources/img/x.png" alt="Eliminar" />
                            <img class="h-6 w-6 cursor-pointer" src="../resources/img/heart.png" alt="Favorito" />
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>

</html>