<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="w-full h-full overflow-x-hidden">

    <?php require_once __DIR__ . "../resources/templates/header.php"; ?>

    <div class="w-full h-auto">
        <!-- Styles pc -->
        <div class="hidden lg:flex lg:pt-28 mb-5 bg-gray-100 w-full">
            <div class="w-1/2 hidden lg:flex justify-center items-center">
                <div class="w-4/5">
                    <div class="ml-4 mt-4 mb-2">
                        <span class="font-bold text-5xl mr-4">Explora el Mundo</span>
                        <span class="font-bold text-5xl"> de los Libros</span>
                        <p class="text-3xl text-justify mx-4 my-4 font-bold text-gray-600">Sumérgete en una amplia
                            colección de libros digitales. Desde clásicos literarios hasta las últimas novedades, todo
                            al alcance de tu mano.</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 hidden lg:flex">
                <div class="w-full flex justify-center items-center">
                    <img class="h-full lg:h-auto lg:w-3/4" src="index.png" alt="Libros digitales" />
                </div>
                <div class="">
                    <div class="flex flex-col items-end">
                        <div class="w-16 h-5 mb-6 bg-red-200"></div>
                        <div class="w-28 h-6 mb-6 bg-red-300"></div>
                        <div class="w-40 h-8 mb-6 bg-red-400"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Styles Mobile --->
        <div class="lg:hidden">
            <div class="flex mb-5 pt-16 bg-gray-100 w-full">
                <div class="w-3/4 flex justify-center items-center">
                    <img class="h-full lg:h-auto lg:w-3/4" src="index.png" alt="Libros digitales" />
                </div>
                <div class="w-1/4 flex items-center justify-end">
                    <div class="flex flex-col justify-center">
                        <div class="w-10 mb-4 ml-4 bg-red-200">
                            <span class="invisible">a</span>
                        </div>
                        <div class="w-12 mb-4 ml-2 bg-red-300">
                            <span class="invisible">a</span>
                        </div>
                        <div class="w-14 mb-2 bg-red-400">
                            <span class="invisible">a</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:hidden">
            <div class="flex justify-center items-center">
                <div class="w-1/2">
                    <div class="ml-4 mt-4 mb-2">
                        <span class="font-bold text-lg">Explora el Mundo</span>
                        <span class="font-bold text-lg"> de los Libros</span>
                    </div>

                    <a href="/register" target="_self"
                        class="w-4/5 h-8 text-white bg-red-300 text-sm shadow-xl mb-10 rounded-full lg:w-2/5 hover:bg-white hover:text-red-300 inline-block text-center pt-1 mx-4">
                        Regístrate ahora
                    </a>
                </div>
                <div class="w-1/2">
                    <p class="text-xs text-justify mb-4 font-bold text-gray-600 mx-4 -mt-1">Tu biblioteca virtual,
                        siempre contigo.</p>
                </div>
            </div>
        </div>

        <div class="w-full text-center mb-8">
            <div class="mb-2">
                <h2 class="font-bold text-xl text-red-500 lg:font-bold lg:text-4xl">Servicios</h2>
                <h3 class="text-sm font-bold text-gray-600 px-4 text-justify lg:mx-96 mt-2">En Virtual Books, ofrecemos
                    una amplia gama de servicios diseñados para satisfacer tus necesidades de lectura. Desde acceso
                    ilimitado a libros digitales hasta recomendaciones personalizadas, nuestro objetivo es hacer que tu
                    experiencia de lectura sea inolvidable.</h3>
                <h5 class="text-md my-1 font-bold text-red-400 block leading-7">Descubre un mundo de historias y
                    conocimiento.</h5>
            </div>
            <div class="flex justify-center flex-wrap">
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Accede a miles de libros digitales desde cualquier dispositivo.
                </div>
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Recibe recomendaciones personalizadas basadas en tus gustos.
                </div>
                <div class="w-1/2 max-w-72 mx-4 bg-red-200 py-4 my-4 rounded-2xl shadow-lg px-8">
                    Disfruta de una lectura sin interrupciones, sin anuncios.
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col lg:flex-row">
            <div class="m-8 flex items-center justify-center lg:mx-0 lg:w-1/2">
                <h2 class="font-bold text-left lg:pl-28 text-xl text-red-300 lg:font-bold lg:text-4xl lg:ml-12">
                    Las ventajas de Virtual Books:</h2>
            </div>
            <div
                class="w-full flex flex-wrap justify-center items-center gap-5 lg:w-1/2 lg:flex-row lg:flex-wrap lg:justify-start lg:ml-8 lg:mr-8 lg:flex-grow">
                <div class="w-32 h-32 bg-gray-100 p-8 rounded-2xl shadow-lg flex flex-col items-center text-center">
                    <img src="biblioteca-en-linea.png" alt="Biblioteca" class="w-10">
                    <p class="font-bold">Biblioteca Digital</p>
                </div>
                <div class="w-32 h-32 bg-gray-100 p-8 rounded-2xl shadow-lg flex flex-col items-center text-center">
                    <img src="zona-de-lectura.png" alt="Lectura offline" class="w-10">
                    <p class="font-bold">Lectura Offline</p>
                </div>
                <div class="w-32 h-32 bg-gray-100 p-8 rounded-2xl shadow-lg flex flex-col items-center text-center">
                    <img src="comunidad.png" alt="Comunidad" class="w-10">
                    <p class="font-bold">Comunidad</p>
                </div>
                <div class="w-32 h-32 bg-gray-100 p-8 rounded-2xl shadow-lg flex flex-col items-center text-center">
                    <img src="actualizacion-de-sistema.png" alt="Actualizaciones" class="w-10">
                    <p class="font-bold">Actualizaciones</p>
                </div>
                <div class="w-32 h-32 bg-gray-100 p-8 rounded-2xl shadow-lg flex flex-col items-center text-center">
                    <img src="soporte-tecnico.png" alt="Soporte" class="w-10">
                    <p class="font-bold">Soporte 24/7</p>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col lg:flex-row">
            <div class="m-8 flex items-center justify-center lg:w-1/2">
                <img src="leer.png" alt="Lectura" class="mx-auto my-0 w-3/12 lg:w-1/3 lg:ml-auto">
            </div>

            <div class="flex justify-center lg:my-20 text-left items-center flex-col">
                <h2 class="font-bold p-2 text-xl text-red-300 lg:font-bold lg:text-left lg:text-4xl">
                    ¿Por qué elegir Virtual Books?
                </h2>
                <div class="flex justify-center lg:text-center items-center mx-8">
                    <div class="flex flex-col text-left">
                        <section class="px-6 py-4 bg-gray-100 rounded-lg shadow-md">
                            <h2 class="text-xl lg:text-2xl font-semibold text-gray-700 mb-4">Nuestros Servicios</h2>
                            <ul class="space-y-4">
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="libros.png" class="w-8 h-8 text-red-300 mr-2">
                                    Acceso ilimitado a miles de libros digitales.
                                </li>
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="retroalimentacion.png" class="w-8 h-8 text-red-300 mr-2">
                                    Recomendaciones personalizadas basadas en tus gustos.
                                </li>
                                <li class="text-base lg:text-xl font-medium text-gray-600 flex items-center">
                                    <img src="publicidad-online.png" class="w-8 h-8 text-red-300 mr-2">
                                    Lectura sin interrupciones, sin anuncios.
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto lg:p-10">
            <div class="rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <h2 class="font-bold text-3xl text-red-300 lg:text-4xl lg:py-6">
                        Nuestras Características
                    </h2>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> <!-- Contenedor principal centrado -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                            <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                                <h3 class="text-2xl font-semibold text-red-800 mb-4">Biblioteca Digital</h3>
                                <p class="text-gray-700">Accede a una amplia colección de libros digitales desde
                                    cualquier dispositivo.</p>
                            </div>
                            <div class="bg-red-100 border border-red-300 rounded-lg p-8">
                                <h3 class="text-2xl font-semibold text-red-800 mb-4">Recomendaciones Personalizadas
                                </h3>
                                <p class="text-gray-700">Recibe sugerencias de libros basadas en tus intereses y hábitos
                                    de lectura.</p>
                            </div>
                            <div class="bg-red-100 border border-red-300 rounded-lg p-8">
                                <h3 class="text-2xl font-semibold text-red-800 mb-4">Lectura Offline</h3>
                                <p class="text-gray-700">Descarga libros y léelos sin necesidad de conexión a internet.
                                </p>
                            </div>
                            <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                                <h3 class="text-2xl font-semibold text-red-800 mb-4">Soporte 24/7</h3>
                                <p class="text-gray-700">Nuestro equipo está siempre disponible para ayudarte con
                                    cualquier duda o problema.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full flex-col lg:flex-row">
            <div class="lg:w-1/2 lg:items-center flex flex-col lg:flex-row">
                <div class="lg:pl-28">
                    <h3 class="text-left lg:text-start m-4 text-red-300 font-semibold lg:text-xl xl:text-4xl">Virtual
                        Books</h3>
                    <h2 class="text-center lg:text-start font-bold mt-3 lg:pl-5 lg:mx-0 mx-9 lg:text-3xl xl:text-4xl">
                        Únete a nosotros y descubre un mundo de historias.</h2>
                    <div class="flex lg:justify-start justify-center py-4 items-center">
                        <?php if (!isset($_SESSION['user'])): ?>
                            <a href="/login" target="_self"
                                class="w-3/5 h-10 content-center text-white bg-red-300 text-sm lg:text-base xl:text-lg shadow-xl my-5 rounded-full lg:w-2/5 hover:bg-white hover:text-red-300 duration-200 ease-in inline-block text-center mx-4">
                                Únete ya
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="m-8 flex items-center justify-center">
                    <img src="comunidad-lectora.png" alt="Comunidad"
                        class="mx-auto my-0 w-full lg:w-3/4 lg:ml-auto">
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-auto footer-container">
        <?php require_once __DIR__ . '../resources/templates/footer.php'; ?>
    </div>

</html>