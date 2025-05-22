<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex h-screen font-sans bg-gray-100 text-gray-700">
    @include('templates.menu')

    <main class="flex-1 lg:pl-72 p-8 overflow-y-auto">
        <div class="border-b-4 border-red-700 mb-8 pb-4">
            <h3 class="text-3xl font-semibold">Hola, <span class="text-gray-700">{{ Auth::user()->nombre }}</span></h3>
        </div>

        <!-- Contadores -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div class="bg-white shadow-md rounded-lg p-6 flex items-center space-x-6 border border-gray-300">
                <img class="h-14 w-14" src="{{ asset('svg/bookmark.svg') }}" alt="Libros" />
                <div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-1">Libros</h4>
                    <p class="text-3xl font-bold text-gray-700" id="booksTotal">{{ $libros->count() }}</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex items-center space-x-6 border border-gray-300">
                <img class="h-14 w-14" src="{{ asset('svg/bookmark.svg') }}" alt="Categorías" />
                <div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-1">Categorías</h4>
                    <p class="text-3xl font-bold text-gray-700" id="categorysTotal">{{ $librosPorCategoria->count() }}
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 flex items-center space-x-6 border border-gray-300">
                <img class="h-14 w-14" src="{{ asset('svg/bookmark.svg') }}" alt="Autores" />
                <div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-1">Autores</h4>
                    <p class="text-3xl font-bold text-gray-700" id="authorTotal">{{ $librosPorAutor->count() }}</p>
                </div>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-5 flex items-center space-x-6 border-2 border-red-600 max-w-xs mx-auto">
                <div class="bg-red-50 text-gray-700 px-5 py-3 rounded-md font-mono text-center w-48">
                    <p id="clock" class="text-xl font-semibold tracking-wide"></p>
                    <p class="text-sm text-gray-500 mt-1">Hora El Salvador</p>
                </div>
            </div>

            <script>
                function updateClock() {
                    const now = new Date().toLocaleString('es-ES', { timeZone: 'America/El_Salvador', hour12: false });
                    document.getElementById('clock').textContent = now;
                }
                updateClock();
                setInterval(updateClock, 1000);
            </script>

        </section>

        <!-- Gráficos -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-12">
            <!-- Libros por Categoría -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
                <h2 class="text-xl font-semibold mb-6 text-gray-700">Libros por Categoría</h2>
                <canvas id="chartCategorias" class="max-h-72"></canvas>
            </div>

            <!-- Libros por Autor -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
                <h2 class="text-xl font-semibold mb-6 text-gray-700">Libros por Autor</h2>
                <canvas id="chartAutores" class="max-h-72"></canvas>
            </div>

            <!-- Libros Añadidos por Mes -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
                <h2 class="text-xl font-semibold mb-6 text-gray-700">Libros Añadidos </h2>
                <canvas id="chartFechas" class="max-h-72"></canvas>
            </div>
        </section>

        <section class="bg-white p-6 rounded-2xl shadow-lg border border-gray-300">
            <h2 class="text-xl font-semibold mb-6 text-red-700">Historial - Últimos Libros Añadidos</h2>
            <div class="overflow-x-auto">
                @if (!empty($libros) && count($libros) > 0)
                    <table class="min-w-full table-auto border-collapse border border-gray-300 rounded-lg overflow-hidden">
                        <thead class="bg-red-50">
                            <tr>
                                <th class="text-left py-3 px-6 border-b border-gray-300">Título</th>
                                <th class="text-left py-3 px-6 border-b border-gray-300">Categoría</th>
                                <th class="text-left py-3 px-6 border-b border-gray-300">Autor</th>
                                <th class="text-left py-3 px-6 border-b border-gray-300">Fecha Añadido</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($libros as $libro)
                                <tr class="hover:bg-red-50 transition-colors duration-200">
                                    <td class="py-3 px-6 border-b border-gray-200">{{ $libro->titulo }}</td>
                                    <td class="py-3 px-6 border-b border-gray-200">
                                        {{ $libro->categoria->nombre ?? 'Sin categoría' }}
                                    </td>
                                    <td class="py-3 px-6 border-b border-gray-200">{{ $libro->autor->nombre ?? 'Sin autor' }}
                                    </td>
                                    <td class="py-3 px-6 border-b border-gray-200">{{ $libro->created_at->format('d/m/Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-gray-600">Aún no has agregado libros.</p>
                @endif
            </div>
        </section>
    </main>

    <script>
        // Datos para gráficas
        const categoriasLabels = @json($librosPorCategoria->pluck('nombre'));
        const categoriasData = @json($librosPorCategoria->pluck('libros_count'));

        const autoresLabels = @json($librosPorAutor->pluck('nombre'));
        const autoresData = @json($librosPorAutor->pluck('libros_count'));

        const fechasLabels = @json($librosPorFecha->pluck('mes'));
        const fechasData = @json($librosPorFecha->pluck('total'));

        // Función para generar colores en tonos rojos
        function generateRedColors(numColors) {
            const colors = [];
            for (let i = 0; i < numColors; i++) {
                const saturation = 70 + Math.floor((i * 30) / numColors);  // entre 70% y 100%
                const lightness = 40 + Math.floor((i * 30) / numColors);   // entre 40% y 70%
                colors.push(`hsl(0, ${saturation}%, ${lightness}%)`);
            }
            return colors;
        }

        // Gráfico Libros por Categoría (barra)
        const ctxCategorias = document.getElementById('chartCategorias').getContext('2d');
        new Chart(ctxCategorias, {
            type: 'bar',
            data: {
                labels: categoriasLabels,
                datasets: [{
                    label: 'Número de libros',
                    data: categoriasData,
                    backgroundColor: 'rgba(185, 28, 28, 0.7)',
                    borderColor: 'rgba(139, 0, 0, 1)',
                    borderWidth: 2,
                    hoverBackgroundColor: 'rgba(185, 28, 28, 1)',
                    hoverBorderColor: 'rgba(139, 0, 0, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        backgroundColor: 'rgba(185, 28, 28, 0.85)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        cornerRadius: 6,
                        padding: 10
                    },
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });

        // Gráfico Libros por Autor (pie)
        const ctxAutores = document.getElementById('chartAutores').getContext('2d');
        new Chart(ctxAutores, {
            type: 'pie',
            data: {
                labels: autoresLabels,
                datasets: [{
                    label: 'Número de libros',
                    data: autoresData,
                    backgroundColor: generateRedColors(autoresLabels.length),
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        backgroundColor: 'rgba(185, 28, 28, 0.85)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        cornerRadius: 6,
                        padding: 10
                    },
                    legend: {
                        labels: {
                            color: '#4B5563'
                        }
                    }
                }
            }
        });

        // Gráfico Libros Añadidos por Mes (línea)
        const ctxFechas = document.getElementById('chartFechas').getContext('2d');
        new Chart(ctxFechas, {
            type: 'line',
            data: {
                labels: fechasLabels,
                datasets: [{
                    label: 'Libros añadidos',
                    data: fechasData,
                    backgroundColor: 'rgba(185, 28, 28, 0.3)',
                    borderColor: 'rgba(185, 28, 28, 1)',
                    borderWidth: 3,
                    tension: 0.3,
                    pointRadius: 5,
                    pointBackgroundColor: 'rgba(185, 28, 28, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        backgroundColor: 'rgba(185, 28, 28, 0.85)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        cornerRadius: 6,
                        padding: 10
                    },
                    legend: {
                        labels: {
                            color: '#4B5563'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    </script>
</body>

</html>