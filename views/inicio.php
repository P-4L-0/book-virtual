<?php
require_once __DIR__ . '/../models/usuario.php';

session_start();
if(isset($_SESSION)){
    $user = new Usuario();
    $username = $user->getName($_SESSION['id_usuario']);
}else{
    header('../views/index.php');
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
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <?php require_once '../views/templates/menu.php'; ?>
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div>
                <h3 class="text-2xl">Hola <?= $username['nombre']?></h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Libros</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Libros" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                        <canvas id="doctors_chart"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Categorías</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Categorías" />
                            <h1 class="text-2xl">0</h1>
                        </div>

                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Autores</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Autores" />
                            <h1 class="text-2xl">0</h1>
                        </div>

                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Deseados</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Deseados" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sección de últimos libros añadidos -->
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Últimos Libros Añadidos</h2>
                <div class="overflow-x-auto">
                    <table
                        class="min-w-full bg-white border border-gray-300 rounded-2xl border-collapse overflow-hidden">
                        <thead>
                            <tr class="bg-white border-b border-gray-300">
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Fecha</th>
                                <th class="py-3 px-6 text-left">Categoría</th>
                                <th class="py-3 px-6 text-left">Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4 px-6">Lorem</td>
                                <td class="py-4 px-6">xx/xx/xxxx</td>
                                <td class="py-4 px-6">Ipsum</td>
                                <td class="py-4 px-6">Dolor si amet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>

</html>