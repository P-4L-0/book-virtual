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
    <!-- Alerta visual -->
    <div id="alerta-error" class="hidden fixed top-4 right-4 bg-red-100 text-red-800 px-6 py-4 rounded-lg shadow-lg z-50 transition-opacity duration-300">
        Error al actualizar favorito
    </div>

    <div class="min-h-screen flex font-sans">
        @include('templates.menu')
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <div class="container mx-auto p-4">
                <header class="text-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-800">Mis Libros</h1>
                </header>
                <div class="mb-8">
                    <form action="{{ route('misLibros') }}" method="GET">
                        <input
                            type="text"
                            name="buscar"
                            value="{{ old('buscar', request('buscar')) }}"
                            placeholder="Buscar libro..."
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            autocomplete="off"
                        />
                    </form>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @if (!empty($libros) && count($libros) > 0)
                        @foreach ($libros as $libro)
                            <div
                                class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
<<<<<<< Updated upstream
                                <!-- Contenido de la tarjeta -->
=======

                                @if ($libro->imagen)
                                    <img 
                                        src="{{ asset('storage/' . $libro->imagen) }}" 
                                        alt="Imagen del libro {{ $libro->titulo }}" 
                                        class="w-full h-48 object-cover"
                                    />
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                        Sin imagen
                                    </div>
                                @endif

>>>>>>> Stashed changes
                                <div class="p-6">
                                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $libro->titulo }}</h2>
                                    <p class="text-gray-600">{{ $libro->autor->nombre ?? 'Sin autor' }}</p>
                                    <p class="text-gray-500 mt-2">{{ $libro->descripcion }}</p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                                            {{ $libro->categoria->nombre ?? 'Sin categoría' }}
                                        </span>
                                    </div>
                                </div>

<<<<<<< Updated upstream
                                <div class="flex justify-end items-center p-4 border-t border-gray-100">
                                    <img class="h-6 w-6 mr-4 cursor-pointer" src="../resources/img/x.png" alt="Eliminar" />
                                    <img class="h-6 w-6 cursor-pointer" src="../resources/img/heart.png" alt="Favorito" />
=======
                                <div class="flex justify-end items-center p-4 border-t border-gray-100 space-x-4">
                                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este libro?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="focus:outline-none">
                                            <img class="h-6 w-6 cursor-pointer" src="{{ asset('img/x.png') }}" alt="Eliminar" />
                                        </button>
                                    </form>

                                    <img 
                                    src="{{ in_array($libro->id, $favoritos) ? asset('img/like.png') : asset('img/heart.png') }}" 
                                    class="h-6 w-6 cursor-pointer toggle-favorito" 
                                    data-id="{{ $libro->id }}"
>

>>>>>>> Stashed changes
                                </div>

                            </div>
                        @endforeach
                    @else
                        <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                            <h1>Aún no agregas Libros</h1>
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </div>

<<<<<<< Updated upstream
=======
    <script>
        const heartFilled = "{{ asset('img/like.png') }}"; // CORREGIDO
        const heartEmpty = "{{ asset('img/heart.png') }}";

        document.querySelectorAll('.toggle-favorito').forEach(item => {
            item.addEventListener('click', () => {
                const libroId = item.dataset.id;

                fetch(`/libros/${libroId}/toggle-favorito`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    if (data.favorito) {
                        item.src = heartFilled;
                    } else {
                        item.src = heartEmpty;
                    }
                })
                .catch(() => {
                    const alerta = document.getElementById('alerta-error');
                    alerta.classList.remove('hidden');
                    alerta.classList.add('opacity-100');

                    setTimeout(() => {
                        alerta.classList.add('opacity-0');
                        setTimeout(() => {
                            alerta.classList.add('hidden');
                            alerta.classList.remove('opacity-0');
                        }, 300);
                    }, 3000);
                });
            });
        });
    </script>

>>>>>>> Stashed changes
</body>

</html>
