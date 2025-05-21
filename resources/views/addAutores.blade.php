<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar Autor</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="min-h-screen flex font-sans w-full p-6">
        @include('templates.menu')

        <div class="w-full max-w-3xl mx-auto mt-2 bg-white p-12 rounded-3xl shadow-xl border border-gray-200">
            <h2 class="text-4xl font-semibold text-gray-800 text-center mb-12">Agregar Autor</h2>

            {{-- Mensaje de error general --}}
            @if ($errors->any())
                <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Mensaje de éxito --}}
            @if (session('success'))
                <div id="success-alert"
                    class="mb-6 flex items-start justify-between bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl shadow transition-opacity duration-500">
                    <div class="flex items-center gap-3">
                        <!-- Ícono -->
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                        <!-- Mensaje -->
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>

                    <!-- Botón cerrar -->
                    <button onclick="document.getElementById('success-alert').remove()" class="text-green-700 hover:text-green-900 ml-4">
                        &times;
                    </button>
                </div>
            @endif

            <form action="agregarAutor" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <!-- Nombre -->
                <div class="space-y-2">
                    <label for="nombre" class="block text-lg font-semibold text-gray-700">Nombre del Autor</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                        class="block w-full px-6 py-4 border {{ $errors->has('nombre') ? 'border-red-500' : 'border-gray-300' }} rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese el nombre del autor" />
                    @if ($errors->has('nombre'))
                        <p class="text-red-500 text-sm mt-1">{{ $errors->first('nombre') }}</p>
                    @endif
                </div>

                <!-- Nacionalidad -->
                <div class="space-y-2">
                    <label for="nacionalidad" class="block text-lg font-semibold text-gray-700">Nacionalidad</label>
                    <input type="text" id="nacionalidad" name="nacionalidad" value="{{ old('nacionalidad') }}" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200"
                        placeholder="Ingrese la nacionalidad del autor" />
                </div>

                <!-- Fecha de Nacimiento -->
                <div class="space-y-2">
                    <label for="fecha_nacido" class="block text-lg font-semibold text-gray-700">Fecha de Nacimiento</label>
                    <input type="date" id="fecha_nacido" name="fecha_nacido" value="{{ old('fecha_nacido') }}" required
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200" />
                </div>

                <!-- Foto -->
                <div class="space-y-2">
                    <label for="foto" class="block text-lg font-semibold text-gray-700">Foto del Autor</label>
                    <input type="file" id="foto" name="foto" accept="image/*"
                        class="block w-full px-6 py-4 border border-gray-300 rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200" />
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

    <!-- Script para limitar la fecha de nacimiento -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const fechaInput = document.getElementById("fecha_nacido");

            const today = new Date().toISOString().split("T")[0];
            const minDate = "1700-01-01";

            fechaInput.setAttribute("max", today);
            fechaInput.setAttribute("min", minDate);
        });

        // Script para ocultar automáticamente la alerta de éxito
        setTimeout(function () {
            const alert = document.getElementById("success-alert");
            if (alert) {
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 500);
            }
        }, 4000);
    </script>
</body>

</html>
