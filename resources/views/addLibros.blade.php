<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="min-h-screen flex font-sans w-full p-6">
        @include('templates.menu')

        <div class="w-full max-w-3xl mx-auto mt-2 bg-white p-12 rounded-3xl shadow-xl border border-gray-200">
            <h2 class="text-4xl font-semibold text-gray-800 text-center mb-12">Agregar Libro</h2>

            <form action="{{ route('addLibros') }}" method="POST" class="space-y-8">
                @csrf

                <!-- Título -->
                <div class="space-y-4">
                    <label for="titulo" class="block text-lg font-semibold text-gray-700">Título del Libro</label>
                    <input type="text" id="titulo" name="titulo" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese el título del libro">
                </div>

                <!-- Descripción -->
                <div class="space-y-4">
                    <label for="descripcion" class="block text-lg font-semibold text-gray-700">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="4"
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese una breve descripción del libro"></textarea>
                </div>

                <!-- Categoría -->
                <div class="space-y-4">
                    <label for="categoria_id" class="block text-lg font-semibold text-gray-700">Categoría</label>
                    <select name="categoria_id" id="categoria_id" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
                        <option selected disabled>Seleccione una categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Autor -->
                <div class="space-y-4">
                    <label for="autor_id" class="block text-lg font-semibold text-gray-700">Autor</label>
                    <select name="autor_id" id="autor_id" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
                        <option selected disabled>Seleccione un autor</option>
                        @foreach($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Botón -->
                <div class="flex justify-center items-center">
                    <button type="submit"
                        class="w-full bg-red-600 text-white px-8 py-4 rounded-xl shadow-xl hover:bg-red-700 transition-all transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Agregar Libro
                    </button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>