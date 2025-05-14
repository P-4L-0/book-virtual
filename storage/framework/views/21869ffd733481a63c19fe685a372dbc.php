<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="<?php echo e(asset('img/book.png')); ?>" 
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="flex h-screen bg-gray-50">
    <div class="min-h-screen flex font-sans">
        <?php echo $__env->make('templates/menu.php', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div class="container mx-auto p-4">
                <header class="text-center mb-8">
                    <h1 class="text-5xl font-bold text-gray-800 mb-2">Mis Libros</h1>
                    <p class="text-xl text-gray-600">Explora tu colección de libros favoritos</p>
                </header>

                <div class="mb-8 relative">
                    <input type="text" placeholder="Buscar libro..."
                        class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <img src="../resources/img/books.jpg" alt="Portada de La Metamorfosis"
                            class="w-full h-48 object-cover">
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
                            <i id="likeIcon" class="fas fa-heart text-red-500 text-2xl cursor-pointer"></i>
                        </div>
                        <!-- FALTA AGREGAR SCRIPT PAAAAAAA -->

                    </div>

                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <img src="../resources/img/books.jpg" alt="Portada de La Metamorfosis"
                            class="w-full h-48 object-cover">

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
                            <i id="likeIcon" class="fas fa-heart text-red-500 text-2xl cursor-pointer"></i>
                        </div>
                        <!-- FALTA AGREGAR SCRIPT PAAAAAAA -->


                    </div>

                    <div
                        class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                        <img src="../resources/img/books.jpg" alt="Portada de La Metamorfosis"
                            class="w-full h-48 object-cover">

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
                            <i id="likeIcon" class="fas fa-heart text-red-500 text-2xl cursor-pointer"></i>
                        </div>
                        <!-- FALTA AGREGAR SCRIPT PAAAAAAA -->



                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\book-virtual\resources\views/deseados.blade.php ENDPATH**/ ?>