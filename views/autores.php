<?php

session_start();

if(isset($_SESSION["id_usuario"])){
   //nothing here for now
}else{
    header('Location: ../views/index.php');
    exit;
}
?>
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

<body class="flex h-screen text-xl">
    <div class="min-h-screen flex font-sans">
        <?php include 'templates/menu.php'; ?> 
        <main class="flex-1 lg:pl-72 p-10 space-y-10">
            <h2 class="text-4xl font-semibold text-gray-700 mb-4">Autores</h2>
            
            <!-- Barra de búsqueda y botón agregar -->
            <div class="flex items-center mb-6 w-full">
                <div class="relative w-1/3">
                    <input type="text" placeholder="Buscar" class="border rounded-lg p-3 pl-10 focus:outline-none w-full text-lg">
                    <span class="absolute left-3 top-3 text-gray-400 text-lg">🔍</span>
                </div>
                <button class="bg-red-500 text-white px-6 py-3 rounded-lg ml-auto text-lg">AGREGAR</button>
            </div>
            
            <!-- Tarjeta de autor -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-gray-100 rounded-lg shadow-md p-6 flex items-center space-x-6">
                    <img src="../resources/img/autores.jpg" alt="Autor" class="w-20 h-20 rounded-full">
                    <div>
                        <h3 class="text-xl font-semibold">Franz Kafka</h3>
                        <p class="text-gray-500 text-base">Descripción</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>