<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" />
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        @include('templates.menu')
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div class="container mx-auto p-4">

                {{-- Mensajes de éxito o error --}}
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <header class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-800">Mis Libros Deseados</h1>
                </header>

                <form method="GET" action="{{ route('deseados') }}" class="mb-8">
                    <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar libro..."
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200">
                </form>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @if (!empty($librosDeseados) && count($librosDeseados) > 0)
                        @foreach ($librosDeseados as $libro)
                            <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">

                                {{-- Imagen del libro --}}
                                @if($libro->imagen)
                                    <img
                                        src="{{ asset('storage/' . $libro->imagen) }}"
                                        alt="Foto del libro {{ $libro->titulo }}"
                                        class="w-full h-48 object-cover"
                                    />
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                        Sin imagen
                                    </div>
                                @endif

                                <div class="p-6">
                                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $libro->titulo }}</h2>
                                    <p class="text-gray-600">{{ $libro->autor ?? 'Sin autor' }}</p>
                                    <p class="text-gray-500 mt-2">{{ $libro->descripcion ?? '' }}</p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                                            {{ $libro->categoria ?? 'Sin categoría' }}
                                        </span>
                                    </div>
                                </div>

                                <div class="flex justify-end items-center p-4 border-t border-gray-100 space-x-4">
                                    {{-- Formulario para eliminar libro completo --}}
                                    <form method="POST" action="{{ route('deseados.eliminar', $libro->id) }}" onsubmit="return confirm('¿Estás seguro que quieres eliminar este libro?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Eliminar" class="h-6 w-6 cursor-pointer p-0 border-0 bg-transparent">
                                            <img src="{{ asset('img/x.png') }}" alt="Eliminar" />
                                        </button>
                                    </form>

                                    {{-- Formulario para quitar de libros deseados (corazón rojo) --}}
                                    <form method="POST" action="{{ route('deseados.quitar', $libro->id) }}" onsubmit="return confirm('¿Quieres quitar este libro de tus deseados?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Quitar de libros deseados" class="h-6 w-6 cursor-pointer p-0 border-0 bg-transparent">
                                            <img src="{{ asset('img/like.png') }}" alt="Quitar favorito" />
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                            <h1>Aún no agregas Libros Deseados</h1>
                        </div>
                    @endif
                </div>

            </div>

        </main>
    </div>
</body>

</html>
