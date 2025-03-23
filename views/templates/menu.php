<!-- Menú lateral (sidebar) mejorado -->
<nav
    class="hidden lg:flex fixed top-0 left-0 bottom-0 w-64 bg-gradient-to-b from-gray-100 to-gray-300 text-gray-700 shadow-lg px-5">
    <div class="sidebar flex flex-col flex-grow items-center py-6">

        <!-- Título con tipografía llamativa -->
        <div class="text-center text-2xl font-bold text-gray-900 tracking-wide font-sans">
            Virtual Book
        </div>

        <!-- Logo con sombra -->
        <div class="mt-4 w-40">
            <img src="../resources/img/VirtualBooks.png" alt="logo.png">
        </div>

        <!-- Menú -->
        <ul class="flex flex-col w-full mt-8">
            <li>
                <a href="../views/inicio.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold ">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/door.svg" alt="Inicio" />
                    <span class="font-medium">Inicio</span>
                </a>
            </li>
            <li>
                <a href="../views/mislibros.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/bookmark.svg" alt="Mis Libros" />
                    <span class="font-medium">Mis Libros</span>
                </a>
            </li>
            <li>
                <a href="../views/agregar.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/square-plus.svg" alt="Agregar" />
                    <span class="font-medium">Agregar</span>
                </a>
            </li>
            <li>
                <a href="../views/deseados.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/gift.svg" alt="Deseados" />
                    <span class="font-medium">Deseados</span>
                </a>
            </li>
            <li>
                <a href="../views/autores.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/id.svg" alt="Autores" />
                    <span class="font-medium">Autores</span>
                </a>
            </li>
            <li>
                <a href="../views/categorias.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/category-2.svg" alt="Información" />
                    <span class="font-medium">Categorías</span>
                </a>
            </li>
            <li>
                <a href="../views/.php"
                    class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/user.svg" alt="Perfil" />
                    <span class="font-medium">Perfil</span>
                </a>
            </li>
        </ul>

        <!-- Botón de Salir -->
        <div class="mt-auto w-full">
            <form action="../api/routes.php/logout" method="POST" class="w-full">
                <button type="submit"
                    class="w-full flex items-center p-3 rounded-xl bg-red-500 text-white hover:bg-red-600 hover:shadow-xl hover:scale-105 transition-all duration-300 transform focus:outline-none focus:ring-2 focus:ring-red-500 active:bg-red-700 active:font-semibold">
                    <span class="font-medium">Salir</span>
                </button>
            </form>
        </div>
    </div>
</nav>