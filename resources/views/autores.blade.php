<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen text-xl">
    <div class="min-h-screen flex font-sans">
        @include('templates.menu')

        <main class="flex-1 lg:pl-72 p-10 space-y-10">
            <h2 class="text-4xl font-semibold text-gray-700 mb-4">Autores</h2>

            <!-- Barra de búsqueda y botón agregar -->
            <a href="{{ url('/formularioAutor') }}"
                class="bg-red-500 text-white px-6 py-3 rounded-lg ml-auto text-lg hover:bg-red-600 transition">
                AGREGAR
            </a>


            <!-- Tarjetas de autores -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($autores as $autor)
                    <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                        <div>
                            <h3 class="text-xl font-semibold">{{ $autor->nombre }}</h3>
                            <p class="text-gray-500 text-base">{{ $autor->nacionalidad }}</p>
                        </div>
                    </div>
                @empty
                    <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                        <h1>Aún no agregas autores</h1>
                    </div>
                @endforelse
            </div>
        </main>
    </div>
</body>

</html>