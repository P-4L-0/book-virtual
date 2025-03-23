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

<body class="flex h-screen">
    <div class="min-h-screen flex font-sans">
        <?php include 'templates/menu.php'; ?> 
        <main class="flex-1 lg:pl-72 p-6 space-y-8">
            <h2 class="text-4xl font-semibold text-gray-700 mb-4">Agregar</h2>
            <div class="bg-gray-100 p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-center text-white bg-red-500 py-3 rounded-t-2xl">Virtual Book</h2>
            <div class="p-6 bg-gray-200 rounded-b-2xl grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sección de imagen -->
                <div class="flex flex-col items-center">
                    <img id="imagePreview" src="../resources/img/libro.jpeg" alt="Vista previa" class="w-40 h-56 object-cover border border-gray-400 rounded-lg mb-3">
                    <label class="bg-red-500 text-white px-4 py-2 rounded-lg cursor-pointer flex items-center">
                        <input type="file" id="imageUpload" class="hidden" accept="image/*">
                        <span>Subir Imagen</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                    </label>
                </div>
                
                <!-- Sección de campos -->
                <div class="col-span-2 grid grid-cols-2 gap-4">
                    <label class="block font-semibold">Nombre del Libro:
                        <input type="text" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </label>
                    <label class="block font-semibold">Precio:
                        <input type="number" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </label>
                    <label class="block font-semibold">Código:
                        <input type="text" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </label>
                    <label class="block font-semibold">Categoría:
                        <select class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Seleccionar...</option>
                            <option>Ficción</option>
                            <option>No Ficción</option>
                        </select>
                    </label>
                    <label class="block font-semibold">Cantidad:
                        <input type="number" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </label>
                    <label class="block font-semibold">Proveedor:
                        <select class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Seleccionar...</option>
                            <option>Editorial A</option>
                            <option>Editorial B</option>
                        </select>
                    </label>
                    <label class="block font-semibold col-span-2">Fecha de Ingreso:
                        <input type="date" class="w-full p-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </label>
                </div>
            </div>
            
            <!-- Botones -->
            <div class="flex justify-center space-x-4 mt-6">
                <button class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-green-600">Agregar</button>
                <button class="bg-red-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-600">Cancelar</button>
            </div>
        </div>

        <script>
            document.getElementById('imageUpload').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('imagePreview').src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        </script>
        </main>
    </div>
</body>
</html>
