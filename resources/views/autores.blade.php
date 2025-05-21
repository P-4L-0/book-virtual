<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autores</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        @include('templates.menu')

        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <!-- Encabezado -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Autores</h1>
                <div class="flex items-center space-x-4 ml-auto">
                    <!-- Formulario de búsqueda -->
                    <form method="GET" action="{{ route('autores.index') }}" class="flex items-center space-x-4">
                        <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar..."
                            class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-purple-600" />
                    </form>

                    <!-- Botón de agregar autor -->
                    <a href="{{ url('/formularioAutor') }}"
                        class="bg-green-400 text-white py-2 px-6 rounded-lg hover:bg-green-700 transition duration-300">
                        AGREGAR
                    </a>
                </div>
            </div>

            <!-- Tarjetas de autores con 3 columnas -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @forelse ($autores as $autor)
                    <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex items-center">
                        <!-- Foto del autor -->
                        @if ($autor->foto)
                            <img src="{{ Storage::url($autor->foto) }}" alt="Foto de {{ $autor->nombre }}"
                                class="w-32 h-32 object-cover rounded-md flex-shrink-0">
                        @else
                            <div class="w-32 h-32 bg-gray-200 flex items-center justify-center rounded-md text-gray-500 flex-shrink-0">
                                Sin foto
                            </div>
                        @endif

                        <!-- Información del autor -->
                        <div class="ml-6 flex-1">
                            <h2 class="text-2xl font-semibold text-red-800 mb-1">{{ $autor->nombre }}</h2>
                            <p class="text-sm text-gray-600 mb-3">Nacionalidad: {{ $autor->nacionalidad }}</p>

                            <!-- Botón eliminar -->
                            <form action="{{ route('autor.destroy', $autor->id) }}" method="POST"
                                  onsubmit="return confirm('¿Estás seguro de que deseas eliminar este autor?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex items-center text-red-600 hover:text-red-800 transition">
                                    <img src="{{ asset('img/x.png') }}" alt="Eliminar" class="w-5 h-5 mr-1">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h1 class="text-gray-600">Aún no agregas autores</h1>
                    </div>
                @endforelse
            </div>
        </main>
    </div>
</body>

</html>