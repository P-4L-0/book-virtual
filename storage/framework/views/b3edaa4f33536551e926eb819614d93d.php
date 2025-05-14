<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="<?php echo e(asset('img/book.png')); ?>" <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?> </head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <?php echo $__env->make('templates.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                    <?php if(!empty($libro) AND count($libros) > 0): ?>
                        <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                                <!-- Contenido de la tarjeta -->
                                <div class="p-6">
                                    <h2 class="text-2xl font-semibold text-gray-800 mb-2"><?= $libro['Titulo'] ?></h2>
                                    <p class="text-gray-600"><?= $libro['Autor'] ?> </p>
                                    <p class="text-gray-500 mt-2"><?= $libro['Descripcion'] ?> </p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full"><?= $libro['Categoria'] ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex justify-end items-center p-4 border-t border-gray-100">
                                    <img class="h-6 w-6 mr-4 cursor-pointer" src="../resources/img/x.png" alt="Eliminar" />
                                    <img class="h-6 w-6 cursor-pointer" src="../resources/img/heart.png" alt="Favorito" />
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                            <h1>Aun no agregas Libros</h1>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </main>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\book-virtual\resources\views/mislibros.blade.php ENDPATH**/ ?>