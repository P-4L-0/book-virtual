<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" 
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen bg-gray-100">
    <div class="min-h-screen flex font-sans w-full">
        @include('templates.menu')

        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <h2 class="text-4xl font-semibold text-gray-700 mb-4">Área de Administración</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-gray-700 mb-4">Agregar Categoría</h3>
                    <p class="text-gray-600 mb-4">Administra las categorías de los libros.</p>
                    <a href='{{ route('agregarCat') }}' class="bg-red-500  text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-800 ">Agregar</a>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-gray-700 mb-4">Agregar Autor</h3>
                    <p class="text-gray-600 mb-4">Registra nuevos autores en la base de datos.</p>
                    <a href='{{ route('addAuthors') }}' class="bg-red-500  text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-800 ">Agregar</a>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <h3 class="text-2xl font-bold text-gray-700 mb-4">Agregar Libro</h3>
                    <p class="text-gray-600 mb-4">Añade nuevos libros al inventario.</p>
                    <a href='{{ route('addLibros') }}' class="bg-red-500  text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-800 ">Agregar</a>
                </div>
            </div>
            <!-- Vista previa de las últimas 3 agregaciones -->
            <div class="mt-8">
                <h3 class="text-3xl font-semibold text-gray-700 mb-4">Últimos Agregados</h3>
                <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-md">
                    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-300 to-gray-400 text-gray-800 uppercase text-sm">
                                <th class="py-3 px-6 text-left">Tipo</th>
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <!-- <th class="py-3 px-6 text-left">Detalles</th> -->
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            {{-- Categorías --}}
                            @foreach ($lastCategories as $categoria)
                            <tr class="border-b hover:bg-gray-100 transition">
                                <td class="py-3 px-6 font-bold text-red-800">Categoría</td>
                                <td class="py-3 px-6">{{ $categoria->nombre }}</td>
                                <!-- <td class="py-3 px-6">
                                    <a href="{{ url('/categorias/' . $categoria->id) }}" class="text-red-800 hover:underline font-semibold">Ver más</a>
                                </td> -->
                            </tr>
                            @endforeach

                            {{-- Autores --}}
                            @foreach ($lastAuthors as $autor)
                            <tr class="border-b hover:bg-gray-100 transition">
                                <td class="py-3 px-6 font-bold text-red-800">Autor</td>
                                <td class="py-3 px-6">{{ $autor->nombre }}</td>
                                <!-- <td class="py-3 px-6">
                                    <a href="{{ url('/autores/' . $autor->id) }}" class="text-red-800 hover:underline font-semibold">Ver más</a>
                                </td> -->
                            </tr>
                            @endforeach

                            {{-- Libros --}}
                            @foreach ($lastBooks as $libro)
                            <tr class="border-b hover:bg-gray-100 transition">
                                <td class="py-3 px-6 font-bold text-red-800">Libro</td>
                                <td class="py-3 px-6">{{ $libro->titulo }}</td>
                                <!-- <td class="py-3 px-6">
                                    <a href="{{ url('/libros/' . $libro->id) }}" class="text-red-800 hover:underline font-semibold">Ver más</a>
                                </td> -->
                            </tr>
                            @endforeach

                            {{-- Mostrar mensaje si no hay registros --}}
                            @if($lastCategories->isEmpty() && $lastAuthors->isEmpty() && $lastBooks->isEmpty())
                            <tr>
                                <td colspan="3" class="py-4 px-6 text-center text-gray-600">
                                    No hay registros recientes para mostrar.
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            
        </main>
    </div>
</body>

</html>