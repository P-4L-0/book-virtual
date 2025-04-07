<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" 
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full overflow-x-hidden">
    @include('templates.header');

    <div class="w-full h-auto">
        <div class="hidden lg:flex lg:pt-28 mb-5 bg-[#fafafa] w-full">
            <div class="w-1/2 hidden lg:flex justify-center items-center">
                <div class="w-4/5">
                    <div class="ml-4 mt-4 mb-2">
                        <span class="font-bold text-5xl mr-4">Gestiona tu</span>
                        <span class="font-bold text-5xl"> Colección de Libros</span>
                        <p class="text-3xl text-justify mx-4 my-4 font-bold text-gray-600">Registra y organiza tu colección de libros adquiridos. Añade detalles de los autores, clasifica por categorías y guarda libros en tu lista de deseos para futuras compras.</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 hidden lg:flex">
                <div class="w-full flex justify-center items-center">
                    <img class="h-full lg:h-auto lg:w-3/4" src="{{ asset('img/index.png') }}" alt="Gestión de libros" />
                </div>
            </div>
        </div>

        <div class="w-full text-center mb-8">
            <div class="mb-2">
                <h2 class="font-bold text-xl text-red-500 lg:font-bold lg:text-4xl">Características</h2>
                <h3 class="text-sm font-bold text-gray-600 px-4 text-justify lg:mx-96 mt-2">Nuestra plataforma te permite registrar cada libro que adquieras, gestionar autores y clasificarlos por categorías. También puedes crear una lista de deseos con libros que planeas comprar en el futuro.</h3>
            </div>
            <div class="flex justify-center flex-wrap">
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Registra libros con detalles como título, autor.
                </div>
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Categorización por género, autor o estado de lectura.
                </div>
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Crea una lista de deseos para futuras compras.
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col lg:flex-row">
            <div class="m-8 flex items-center justify-center lg:w-1/2">
                <img src="{{ asset('img/leer.png') }}" alt="Gestión de libros" class="mx-auto my-0 w-3/12 lg:w-1/3 lg:ml-auto">
            </div>

            <div class="flex justify-center lg:my-20 text-left items-center flex-col">
                <h2 class="font-bold p-2 text-xl text-red-300 lg:font-bold lg:text-left lg:text-4xl">
                    ¿Por qué usar nuestra plataforma?
                </h2>
                <div class="flex justify-center lg:text-center items-center mx-8">
                    <div class="flex flex-col text-left">
                        <section class="px-6 py-4 bg-gray-100 rounded-lg shadow-md">
                            <h2 class="text-xl lg:text-2xl font-semibold text-gray-700 mb-4">Beneficios</h2>
                            <ul class="space-y-4">
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="{{ asset('img/libros.png') }}" class="w-8 h-8 text-red-300 mr-2">
                                    Registro detallado de libros adquiridos.
                                </li>
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="{{ asset('img/retroalimentacion.png') }}" class="w-8 h-8 text-red-300 mr-2">
                                    Clasificación personalizada de tu biblioteca.
                                </li>
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="{{ asset('img/publicidad-online.png') }}" class="w-8 h-8 text-red-300 mr-2">
                                    Lista de deseos para futuras compras.
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full h-auto footer-container">
        @include('templates.footer');
        </div>
    </div>

</body>

</html>