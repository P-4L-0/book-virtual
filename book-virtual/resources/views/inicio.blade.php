<?php
require_once __DIR__ . '/../models/usuario.php';
require_once __DIR__ . '/../models/libro.php';
session_start();

if (isset($_SESSION["id_usuario"])) {
    $user = new Usuario();
    $libro = new Libro();
    $username = $user->getName($_SESSION['id_usuario']);
    $info = $user->getCountOfALL($_SESSION['id_usuario']);
    $libros = $libro->getAll($_SESSION['id_usuario']);
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
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <?php require_once '../views/templates/menu.php'; ?>
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div class="border-solid border-b-4 border-[#d5d5d5]">
                <h3 class="text-2xl">Hola <?= $username['nombre'] ?></h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Libros</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Libros" />
                            <h1 class="text-2xl"><?= $info['Libros'] ?? "0"; ?></h1>
                        </div>
                        <canvas id="doctors_chart"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Categorías</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Categorías" />
                            <h1 class="text-2xl"><?= $info['Categorias'] ?? "0"; ?></h1>
                        </div>

                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Autores</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Autores" />
                            <h1 class="text-2xl"><?= $info['Autores'] ?? "0"; ?></h1>
                        </div>

                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Deseados</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="../resources/svg/bookmark.svg" alt="Deseados" />
                            <h1 class="text-2xl"><?= $info['LibrosDeseados'] ?? "0"; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sección de últimos libros añadidos -->
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Últimos Libros Añadidos</h2>
                <div class="overflow-x-auto">
                    <?php if (count($libros) > 0): ?>
                        <table
                            class="min-w-full bg-white border border-gray-300 rounded-2xl border-collapse overflow-hidden">
                            <thead>
                                <tr class="bg-white border-b border-gray-300">
                                    <th class="py-3 px-6 text-left">Titulo</th>
                                    <th class="py-3 px-6 text-left">Categoría</th>
                                    <th class="py-3 px-6 text-left">Autor</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($libros as $libro): ?>
                                    <tr>
                                        <td class="py-4 px-6"><?= $libro['Titulo']; ?></td>
                                        <td class="py-4 px-6"><?= $libro['Categoria']; ?></td>
                                        <td class="py-4 px-6"><?= $libro['Autor']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <h1>Aun no agregas libros</h1>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>

</html>