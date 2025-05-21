<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Categoría de Libros</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="min-h-screen flex font-sans w-full p-6">
        @include('templates.menu')

        <div class="w-full max-w-3xl mx-auto mt-2 bg-white p-12 rounded-3xl shadow-xl border border-gray-200">
            <h2 class="text-4xl font-semibold text-gray-800 text-center mb-12">Agregar Categoría de Libros</h2>

            <form action="{{ route('agregarCat') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Nombre de la categoría -->
                <div class="space-y-4">
                    <label for="nombre" class="block text-lg font-semibold text-gray-700">Nombre de la Categoría</label>
                    <div class="relative">
                        <input type="text" id="nombre" name="nombre" required
                            class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200 ease-in-out"
                            placeholder="Ingrese el nombre de la categoría" />
                    </div>
                </div>

                <!-- Imagen -->
                <div class="space-y-4">
                    <label for="imagen" class="block text-lg font-semibold text-gray-700">Imagen</label>
                    <div class="relative">
                        <input type="file" id="imagen" name="imagen" accept="image/*" required
                            class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200 ease-in-out" />
                    </div>
                </div>

                <!-- Botón -->
                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="w-full bg-red-600 text-white px-8 py-4 rounded-xl shadow-xl hover:bg-red-700 transition-all transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                        Agregar Categoría
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
