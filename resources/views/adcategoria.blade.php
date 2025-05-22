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

                {{-- Mensaje de éxito --}}
                @if (session('success'))
                    <div id="success-alert"
                        class="mb-6 flex items-start justify-between bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl shadow transition-opacity duration-500">
                        <div class="flex items-center gap-3">
                            <!-- Ícono -->
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <!-- Mensaje -->
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>

                        <!-- Botón cerrar -->
                        <button onclick="document.getElementById('success-alert').remove()"
                            class="text-green-700 hover:text-green-900 ml-4">
                            &times;
                        </button>
                    </div>
                @endif

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