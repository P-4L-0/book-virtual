<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categorías</title>
    <link rel="shortcut icon" href="<?php echo e(asset('img/book.png')); ?>" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <?php echo $__env->make('templates.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <!-- Encabezado -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Categorias</h1>
                <div class="flex items-center space-x-4">
                    <!-- Formulario de búsqueda -->
                    <form method="GET" action="" class="flex items-center space-x-4">
                        <input type="text" name="buscar" value="<?php echo e(request('buscar')); ?>" placeholder="Buscar..."
                            class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-purple-600" />
                    </form>

                    <!-- Botón de agregar categorias -->
                    <a href="/agregarCat"
                        class="bg-green-400 text-white py-2 px-6 rounded-lg hover:bg-green-700 transition duration-300">
                        AGREGAR
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if(!empty($categorias) && count($categorias) > 0): ?>
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 relative">

                            <?php if($categoria->imagen): ?>
                                <img src="<?php echo e(asset('storage/' . $categoria->imagen)); ?>"
                                    alt="Imagen de <?php echo e($categoria->nombre); ?>"
                                    class="w-full h-48 object-cover rounded-lg mb-4">
                            <?php endif; ?>

                            <h2 class="text-xl font-semibold text-red-800 mb-4"><?php echo e($categoria->nombre); ?></h2>

                            <div class="mt-4 text-sm text-gray-500">
                                <span class="font-semibold">
                                    Libros totales: <?php echo e($categoria->libros_count ?? 0); ?>

                                </span>
                            </div>

                            <!-- Imagen "X" en esquina inferior derecha con función eliminar -->
                            <img src="<?php echo e(asset('img/x.png')); ?>" alt="Cerrar"
                                class="w-6 h-6 absolute bottom-2 right-2 cursor-pointer hover:scale-110 transition-transform duration-200"
                                onclick="deleteCategory(<?php echo e($categoria->id); ?>, this)">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h1>No tienes categorías agregadas</h1>
                    </div>
                <?php endif; ?>
            </div>
        </main>
    </div>

    <script>
        function deleteCategory(id, element) {
            if (!confirm('¿Seguro que quieres eliminar esta categoría?')) return;

            fetch(`/categoria/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Accept': 'application/json',
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Error al eliminar');
                return response.json();
            })
            .then(data => {
                // Quita la tarjeta padre (el div con relative)
                const card = element.closest('div.relative');
                card.remove();
                alert(data.message);
            })
            .catch(error => {
                alert('No se pudo eliminar la categoría.');
                console.error(error);
            });
        }
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\book-virtual\resources\views/categorias.blade.php ENDPATH**/ ?>