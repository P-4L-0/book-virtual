<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categorías</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" />
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        @include('templates.menu')
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <!-- Encabezado -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Categorias</h1>
                <div class="flex items-center space-x-4">
                    <!-- Formulario de búsqueda -->
                    <form method="GET" action="" class="flex items-center space-x-4">
                        <input type="text" name="buscar" value="{{ request('buscar') }}" placeholder="Buscar..."
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
                @if (!empty($categorias) && count($categorias) > 0)
                    @foreach ($categorias as $categoria)
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 relative">

                            @if ($categoria->imagen)
                                <img src="{{ asset('storage/' . $categoria->imagen) }}"
                                    alt="Imagen de {{ $categoria->nombre }}"
                                    class="w-full h-48 object-cover rounded-lg mb-4">
                            @endif

                            <h2 class="text-xl font-semibold text-red-800 mb-4">{{ $categoria->nombre }}</h2>

                            <div class="mt-4 text-sm text-gray-500">
                                <span class="font-semibold">
                                    Libros totales: {{ $categoria->libros_count ?? 0 }}
                                </span>
                            </div>

                            <!-- Imagen "X" en esquina inferior derecha con función eliminar -->
                            <img src="{{ asset('img/x.png') }}" alt="Cerrar"
                                class="w-6 h-6 absolute bottom-2 right-2 cursor-pointer hover:scale-110 transition-transform duration-200"
                                onclick="deleteCategory({{ $categoria->id }}, this)">
                        </div>
                    @endforeach
                @else
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h1>No tienes categorías agregadas</h1>
                    </div>
                @endif
            </div>
        </main>
    </div>

    <script>
        function deleteCategory(id, element) {
            if (!confirm('¿Seguro que quieres eliminar esta categoría?')) return;

            fetch(`/categoria/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
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
