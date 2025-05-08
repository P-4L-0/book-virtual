<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Gestión de Colección de Libros</title>
    <link rel="shortcut icon" href="{{ asset('img/book.png') }}" 
    @vite('resources/css/app.css')
</head>

<body class="w-full h-full">
    <div class="w-full h-auto">
        @include('templates.header');
    </div>

    <!-- Sección de "¿Por qué elegir nuestra aplicación?" -->
    <div class="flex flex-col lg:flex-row w-full py-8 md:pl-16 px-5 lg:pt-16 bg-[#fafafa]">
        <!-- Contenedor de texto -->
        <div class="flex flex-col w-full lg:w-1/2 mx-auto items-center md:justify-center lg:text-left text-center">
            <h2 class="font-bold text-xl py-4 lg:mt-10 lg:text-4xl text-red-400 pb-1 lg:pb-6">
                ¿Por qué elegir nuestra aplicación de gestión de colección de libros?
            </h2>
            <ul class="text-start items-center text-sm pb-1 pl-1 lg:pl-24">
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Registra y organiza
                    tus libros adquiridos fácilmente.</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Añade detalles de
                    los autores de cada libro.</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Clasifica tu
                    colección por categorías personalizadas.</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Crea y gestiona una
                    lista de deseos para futuras compras.</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Acceso desde
                    cualquier dispositivo para una experiencia fluida.</li>
            </ul>
        </div>

        <!-- Contenedor de la imagen (visible solo en pantallas grandes) -->
        <div class="hidden lg:flex lg:w-1/2 lg:items-end lg:justify-end mt-auto">
<<<<<<< HEAD
            <img src="../resources/img/image.png" alt="Book Lover Image" class="w-full h-auto object-cover lg:w-auto lg:h-full" />
=======
            <img src="acercaDe.png" alt="Gestión de libros" class="w-full h-auto object-cover lg:w-auto lg:h-full" />
>>>>>>> 49f89877df774a7780723d49bf0cea2c5426f15e
        </div>
    </div>

    <!-- Sección de Misión -->
<<<<<<< HEAD
<div class="w-full flex flex-col lg:flex-row pt-8 lg:pt-16">
    <!-- Contenido para PC -->
    <div class="hidden lg:block lg:w-1/4 items-center justify-center lg:order-last rounded-xl relative ml-40 bg-red-100 p-8 shadow-md">
        <div class="absolute top-0 right-0 mr-[-48px] mt-[-48px] rounded-xl overflow-hidden">
            <!-- Imagen del libro (reemplaza el SVG) -->
            <img src="../resources/img/libro1.jpg" alt="Libro" class="w-full h-auto rounded-xl" />
=======
    <div class="w-full flex flex-col lg:flex-row pt-8 lg:pt-16">
        <!-- Contenido para PC -->
        <div
            class="hidden lg:block lg:w-1/4 items-center justify-center lg:order-last rounded-xl relative ml-40 bg-red-100 p-8 shadow-md">
            <div class="absolute top-0 right-0 mr-[-48px] mt-[-48px] rounded-xl overflow-hidden">
                <!-- Imagen de libro (reemplaza el SVG) -->
                <img src="libro.png" alt="Libro" class="w-full h-auto rounded-xl" />
            </div>
            <div class="absolute bottom-0 left-0 ml-[-48px] mb-[-48px] rounded-xl overflow-hidden">
                <img src="libro.png" alt="Libro" class="w-full h-auto rounded-xl" />
            </div>
>>>>>>> 49f89877df774a7780723d49bf0cea2c5426f15e
        </div>

<<<<<<< HEAD
            <img src="../resources/img/libro2.jpg" alt="Libro" class="w-full h-auto rounded-xl" />
=======
        <!-- Contenido para Tablet y Celular -->
        <div class="lg:hidden w-3/4 mx-auto flex items-center justify-center p-8 rounded-xl bg-red-100 shadow-xl">
            <div class="flex w-full h-full items-center justify-center">
                <img src="libro.png" alt="Libro" class="w-full h-auto lg:w-96 lg:h-96 md:w-60 md:h-60 rounded-xl" />
            </div>
        </div>

        <!-- Texto de Misión -->
        <div class="lg:w-1/2 flex flex-col lg:pl-28 lg:order-first">
            <h2 class="text-star font-bold text-red-400 mb-5 text-4xl mt-8 mx-8">Misión</h2>
            <div class="flex justify-center text-start">
                <p class="text-base mx-8 leading-loose">
                    Nuestra misión es proporcionar una plataforma fácil de usar para que los usuarios puedan gestionar y
                    organizar su colección de libros de manera eficiente. Buscamos ayudar a los lectores a registrar sus
                    libros, organizar su biblioteca, gestionar detalles de los autores y crear listas de deseos para
                    futuras adquisiciones.
                </p>
            </div>
>>>>>>> 49f89877df774a7780723d49bf0cea2c5426f15e
        </div>
    </div>

    <!-- Sección de Visión -->
    <div class="w-full flex flex-col mb-16 lg:flex-row-reverse pt-8 lg:pt-16">
        <!-- Contenido para Tablet y Celular -->
        <div class="lg:hidden w-3/4 mx-auto flex items-center justify-center p-8 rounded-xl bg-red-100">
            <div class="flex w-full h-full items-center justify-center shadow-xl">
                <img src="../resources/img/leyendo.jpg" alt="Niño leyendo" class="w-full h-auto lg:w-96 lg:h-96 md:w-60 md:h-60 rounded-xl">
            </div>
        </div>

        <!-- Contenido para PC -->
        <div class="hidden lg:w-1/2 lg:flex items-center justify-center lg:order-last">
            <div class="lg:w-1/2 rounded-xl bg-red-100 p-4 shadow-md">
                <img src="../resources/img/leyendo.jpg" alt="Niño leyendo"
                    class="w-full h-auto lg:w-96 lg:h-96 md:w-60 md:h-60 rounded-xl mx-auto">
            </div>
        </div>

        <div class="lg:w-1/2 flex flex-col lg:pl-28">
            <h2 class="text-end lg:text-start md:text-start font-bold text-red-400 mb-5 text-4xl mt-8 mx-8">Visión</h2>
            <div class="flex justify-center text-start">
                <p class="text-base mx-8 leading-loose">
                    Nuestra visión es ser la plataforma líder para la gestión de colecciones de libros, ayudando a los
                    usuarios a organizar sus bibliotecas, descubrir nuevos libros y gestionar sus deseos de adquisición
                    de manera eficiente y organizada.
                </p>
            </div>
        </div>
    </div>

    <!-- Sección de Beneficios -->
    <div class="flex flex-col">
        <div class="flex flex-col lg:text-center lg:items-center">
            <h2 class="font-bold text-4xl mt-8 mb-5 text-center">Beneficios de usar nuestra aplicación</h2>
            <h3 class="text-red-400 font-bold mx-8 text-2xl text-start">Tus Beneficios</h3>
            <div class="flex mx-8">
                <p class="text-base leading-loose">
                    Únete a nuestra plataforma y disfruta de una experiencia de organización única, con acceso para
                    registrar libros, detalles de autores y gestionar tus futuras compras.
                </p>
            </div>
        </div>
        <div class="flex flex-wrap m-4 lg:m-16">
            <!-- Contenedor 1 -->
            <div class="w-full lg:w-1/3 p-4">
                <div class="bg-red-50 pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">01</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Registro de Libros</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text1" class="text-base leading-loose p-4 line-clamp-3">
                            Registra tus libros con detalles completos como título, autor, fecha de adquisición y más.
                        </p>
                        <a href="#" onclick="toggleText('text1')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>

            <!-- Contenedor 2 -->
            <div class="w-full lg:w-1/3 p-4">
                <div class="border pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">02</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Categorización Personalizada</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text2" class="text-base leading-loose p-4 line-clamp-3">
                            Organiza tu colección de libros en categorías personalizadas como género, autor, etc.
                        </p>
                        <a href="#" onclick="toggleText('text2')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>

            <!-- Contenedor 3 -->
            <div class="w-full lg:w-1/3 p-4">
                <div class="bg-red-50 pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">03</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Lista de Deseos</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text3" class="text-base leading-loose p-4 line-clamp-3">
                            Crea una lista de libros deseados para futuras adquisiciones y compras.
                        </p>
                        <a href="#" onclick="toggleText('text3')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-auto footer-container">
        @include('templates.footer');
    </div>
</body>

</html>