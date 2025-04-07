<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" 
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        @include('templates/menu.php')
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
                    <?php foreach ($categorys as $category): ?>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <h2 class="text-xl font-semibold text-red-800 mb-4"><?= $category['nombre']; ?></h2>
                            <div class="mt-4 text-sm text-gray-500">
                                <span class="font-semibold">Libros totales:
                                    <?php
                                    $count = $cat->getLibros($category['id_categoria']);
                                    echo $count['Total'];
                                    ?>
                                </span>
                            </div>
                            <button
                                class="mt-4 w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition duration-300">
                                Ver Libros
                            </button>
                        </div>
                    <?php endforeach; ?>
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