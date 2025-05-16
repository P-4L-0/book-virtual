<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Autor</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="min-h-screen flex font-sans w-full p-6">
        @include('templates.menu')

        <div class="w-full max-w-3xl mx-auto mt-2 bg-white p-12 rounded-3xl shadow-xl border border-gray-200">
            <h2 class="text-4xl font-semibold text-gray-800 text-center mb-12">Agregar Autor</h2>

            <form action="agregarAutor" method="POST" class="space-y-8">
                @csrf

                <!-- Nombre -->
                <div class="space-y-4">
                    <label for="nombre" class="block text-lg font-semibold text-gray-700">Nombre del Autor</label>
                    <input type="text" id="nombre" name="nombre" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese el nombre del autor">
                </div>

                <!-- Nacionalidad -->
                <div class="space-y-4">
                    <label for="nacionalidad" class="block text-lg font-semibold text-gray-700">Nacionalidad</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese la nacionalidad del autor">
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="space-y-4">
                    <label for="fecha_nacido" class="block text-lg font-semibold text-gray-700">Fecha de Nacimiento</label>
                    <input type="date" id="fecha_nacido" name="fecha_nacido" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
                </div>

                <!-- Botón Enviar -->
                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="w-full bg-red-600 text-white px-8 py-4 rounded-xl shadow-xl hover:bg-red-700 transition-all transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Agregar Autor
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
