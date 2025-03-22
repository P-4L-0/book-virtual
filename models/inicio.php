<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="storage/svg/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <!-- Incluye el archivo de la barra lateral (sidebar) -->
        <?php include 'menu.php'; ?>

        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <!-- Grid para los 4 cuadros -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Libros</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="public/svg/bookmark.svg" alt="Libros" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                        <canvas id="doctors_chart"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Categorías</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="public/svg/bookmark.svg" alt="Categorías" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                        <canvas id="appointments_chart"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Autores</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="public/svg/bookmark.svg" alt="Autores" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                        <canvas id="appointments_chart"></canvas>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4 h-48 border-3 border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Deseados</h3>
                    <div class="flex flex-col items-start justify-start w-full h-32">
                        <div class="flex items-center mt-8 ml-2">
                            <img class="h-12 w-12 mr-4" src="public/svg/bookmark.svg" alt="Deseados" />
                            <h1 class="text-2xl">0</h1>
                        </div>
                        <canvas id="appointments_chart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Sección de últimos libros añadidos -->
            <!-- Sección de últimos libros añadidos -->
            <div class="bg-white p-6 rounded-2xl shadow-lg">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Últimos Libros Añadidos</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-2xl border-collapse overflow-hidden">
                        <thead>
                            <tr class="bg-white border-b border-gray-300">
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Fecha</th>
                                <th class="py-3 px-6 text-left">Categoría</th>
                                <th class="py-3 px-6 text-left">Autor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4 px-6">Lorem</td>
                                <td class="py-4 px-6">xx/xx/xxxx</td>
                                <td class="py-4 px-6">Ipsum</td>
                                <td class="py-4 px-6">Dolor si amet</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6">Lorem</td>
                                <td class="py-4 px-6">xx/xx/xxxx</td>
                                <td class="py-4 px-6">Ipsum</td>
                                <td class="py-4 px-6">Dolor si amet</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6">Lorem</td>
                                <td class="py-4 px-6">xx/xx/xxxx</td>
                                <td class="py-4 px-6">Ipsum</td>
                                <td class="py-4 px-6">Dolor si amet</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6">Lorem</td>
                                <td class="py-4 px-6">xx/xx/xxxx</td>
                                <td class="py-4 px-6">Ipsum</td>
                                <td class="py-4 px-6">Dolor si amet</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </main>
    </div>
    <script>
        const createChart = (ctx, type, label, data, borderColor, backgroundColor, fill = false) => {
            if (ctx) {
                new Chart(ctx, {
                    type: type,
                    data: {
                        labels: data.map(entry => entry.date),
                        datasets: [{
                            label: label,
                            data: data.map(entry => entry.count),
                            borderColor: borderColor,
                            backgroundColor: backgroundColor,
                            fill: fill,
                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed.y !== null) {
                                            label += new Intl.NumberFormat().format(context.parsed.y);
                                        }
                                        return label;
                                    }
                                }
                            }
                        },
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                }
                            },
                            y: {
                                grid: {
                                    borderDash: [5, 5],
                                },
                                ticks: {
                                    callback: function(value) {
                                        return new Intl.NumberFormat().format(value);
                                    }
                                }
                            }
                        }
                    }
                });
            } else {
                console.error('Error al obtener el contexto para el gráfico:', ctx);
            }
        };
    </script>
</body>

</html>
