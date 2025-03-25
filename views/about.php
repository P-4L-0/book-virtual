<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Virtual Books</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="w-full h-full">
    <div class="w-full h-auto">
        <?php require_once __DIR__ . '/../views/templates/header.php'; ?>
    </div>

    <!-- Sección de "¿Por qué elegir Virtual Books?" -->
    <div class="flex flex-col lg:flex-row w-full py-8 md:pl-16 px-5 lg:pt-16 bg-[#fafafa]">
        <!-- Contenedor de texto -->
        <div class="flex flex-col w-full lg:w-1/2 mx-auto items-center md:justify-center lg:text-left text-center">
            <h2 class="font-bold text-xl py-4 lg:mt-10 lg:text-4xl text-red-400 pb-1 lg:pb-6">
                ¿Por qué elegir Virtual Books?
            </h2>
            <ul class="text-start items-center text-sm pb-1 pl-1 lg:pl-24">
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Acceso inmediato a
                    miles de libros</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Plataforma fácil de
                    usar</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Libros en múltiples
                    formatos (PDF, EPUB, etc.)</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Recomendaciones
                    personalizadas</li>
                <li class="text-sm md:text-base lg:text-2xl lg:font-semibold text-red-300 list-disc">Disponible en
                    cualquier dispositivo</li>
            </ul>
        </div>

        <!-- Contenedor de la imagen (visible solo en pantallas grandes) -->
        <div class="hidden lg:flex lg:w-1/2 lg:items-end lg:justify-end mt-auto">
            <img src="../resources/img/image.png" alt="Book Lover Image" class="w-full h-auto object-cover lg:w-auto lg:h-full" />
        </div>
    </div>

    <!-- Sección de Misión -->
<div class="w-full flex flex-col lg:flex-row pt-8 lg:pt-16">
    <!-- Contenido para PC -->
    <div class="hidden lg:block lg:w-1/4 items-center justify-center lg:order-last rounded-xl relative ml-40 bg-red-100 p-8 shadow-md">
        <div class="absolute top-0 right-0 mr-[-48px] mt-[-48px] rounded-xl overflow-hidden">
            <!-- Imagen del libro (reemplaza el SVG) -->
            <img src="../resources/img/libro1.jpg" alt="Libro" class="w-full h-auto rounded-xl" />
        </div>
        <div class="absolute bottom-0 left-0 ml-[-48px] mb-[-48px] rounded-xl overflow-hidden">

            <img src="../resources/img/libro2.jpg" alt="Libro" class="w-full h-auto rounded-xl" />
        </div>
    </div>

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
                Virtual Books tiene como misión democratizar el acceso a la literatura y el conocimiento, ofreciendo
                una plataforma digital innovadora que permita a los usuarios explorar, leer y compartir libros de
                manera fácil y accesible. Nos esforzamos por crear una comunidad global de lectores apasionados.
            </p>
        </div>
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
                    Aspiramos a ser la plataforma líder en lectura digital, conectando a millones de lectores con
                    autores y editoriales de todo el mundo. Queremos transformar la forma en que las personas acceden a
                    los libros, fomentando la cultura y el aprendizaje continuo a través de la tecnología.
                </p>
            </div>
        </div>
    </div>

    <!-- Sección de Beneficios -->
    <div class="flex flex-col">
        <div class="flex flex-col lg:text-center lg:items-center">
            <h2 class="font-bold text-4xl mt-8 mb-5 text-center">Beneficios de unirte a Virtual Books</h2>
            <h3 class="text-red-400 font-bold mx-8 text-2xl text-start">Tus Beneficios</h3>
            <div class="flex mx-8">
                <p class="text-base leading-loose">
                    Únete a nuestra plataforma y disfruta de una experiencia de lectura única, con acceso ilimitado a
                    una amplia variedad de libros y recursos digitales.
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
                    <h3 class="font-semibold text-xl p-2">Acceso Ilimitado</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text1" class="text-base leading-loose p-4 line-clamp-3">
                            Disfruta de acceso ilimitado a miles de libros en diferentes géneros y formatos. Desde
                            clásicos de la literatura hasta las últimas novedades, todo en un solo lugar.
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
                    <h3 class="font-semibold text-xl p-2">Recomendaciones Personalizadas</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text2" class="text-base leading-loose p-4 line-clamp-3">
                            Nuestra plataforma utiliza algoritmos inteligentes para recomendarte libros basados en tus
                            gustos y hábitos de lectura.
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
                    <h3 class="font-semibold text-xl p-2">Lectura sin Límites</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text3" class="text-base leading-loose p-4 line-clamp-3">
                            Lee en cualquier momento y en cualquier lugar. Nuestra plataforma es compatible con todos
                            tus dispositivos.
                        </p>
                        <a href="#" onclick="toggleText('text3')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>
            <!-- Contenedor 4 -->
            <div class="w-full lg:w-1/3 p-4">
                <div class="border pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">04</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Comunidad de Lectores</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text4" class="text-base leading-loose p-4 line-clamp-3">
                            Únete a una comunidad global de lectores, comparte reseñas y descubre nuevos libros
                            recomendados por otros usuarios.
                        </p>
                        <a href="#" onclick="toggleText('text4')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>
            <!-- Contenedor 5 -->
            <div class="w-full lg:w-1/3 p-4 rounded-xl">
                <div class="bg-red-50 pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">05</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Ahorro y Conveniencia</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text5" class="text-base leading-loose p-4 line-clamp-3">
                            Ahorra dinero con nuestras suscripciones y disfruta de descuentos exclusivos en libros
                            seleccionados.
                        </p>
                        <a href="#" onclick="toggleText('text5')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>
            <!-- Contenedor 6 -->
            <div class="w-full lg:w-1/3 p-4">
                <div class="border pt-5 h-full rounded-xl shadow-xl">
                    <div class="bg-red-100 rounded-full h-14 w-14 flex items-center justify-center ml-5">
                        <h2 class="text-red-400 font-bold text-2xl">06</h2>
                    </div>
                    <h3 class="font-semibold text-xl p-2">Soporte 24/7</h3>
                    <div class="text-container overflow-hidden">
                        <p id="text6" class="text-base leading-loose p-4 line-clamp-3">
                            Nuestro equipo de soporte está disponible las 24 horas del día para ayudarte con cualquier
                            duda o problema.
                        </p>
                        <a href="#" onclick="toggleText('text6')" class="text-red-400 hover:underline block p-4">Leer
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-auto footer-container">
        <?php include 'templates/footer.php'; ?>
    </div>
</body>
</html>