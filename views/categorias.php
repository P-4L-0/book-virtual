<?php
require_once __DIR__ . '/../models/categoria.php';
session_start();

if (isset($_SESSION["id_usuario"])) {
    $cat = new Category();
    $categorys = $cat->getAll($_SESSION['id_usuario']);
} else {
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
            <!-- Encabezado con título, buscador y botón AGREGAR -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Categorías</h1>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Buscar..."
                        class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-purple-600">
                    <button
                        class="bg-green-400 text-white py-2 px-6 rounded-lg hover:bg-green-700 transition duration-300">
                        AGREGAR
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if (count($categorys) > 0): ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold text-red-800 mb-4">TERROR</h2>
                        <p class="text-gray-600">Explora las mejores historias de terror.</p>
                        <div class="mt-4 text-sm text-gray-500">
                            <span class="font-semibold">Libros totales:</span> 120
                        </div>
                        <button
                            class="mt-4 w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition duration-300">
                            Ver más
                        </button>
                    </div>
                <?php else: ?>
                    <!-- Tarjeta de Terror -->
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h1>No tienes categorias agregadas</h1>
                    </div>
                    <!-- Tarjeta de Terror -->

                <?php endif; ?>
            </div>
        </main>
    </div>
</body>

</html>