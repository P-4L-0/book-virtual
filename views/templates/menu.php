<!-- Menú lateral (sidebar) mejorado -->
<nav class="hidden lg:flex fixed top-0 left-0 bottom-0 w-64 bg-gradient-to-b from-gray-100 to-gray-300 text-gray-700 shadow-lg rounded-r-3xl z-10">
    <div class="sidebar flex flex-col flex-grow items-center py-6">
        
        <!-- Título con tipografía llamativa -->
        <div class="text-center text-2xl font-bold text-gray-900 tracking-wide font-sans">
            Virtual Book
        </div>

        <!-- Logo con sombra -->
        <div class="mt-4 w-40">
            <object data="{{ asset('storage/svg/logo-icon-white.svg') }}" class="w-full drop-shadow-lg" type="image/svg+xml"></object>
        </div>

        <!-- Menú -->
        <ul class="flex flex-col w-full mt-8 space-y-4">
            <li>
                <a href="{{ route('statistics.index', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                   <img class="h-6 w-6 mr-3" src="../resources/svg/door.svg" alt="Inicio" />
                   <span class="font-medium">Inicio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.appointments', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/info-circle.svg" alt="Información" />
                    <span class="font-medium">Información</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.records', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/bookmark.svg" alt="Mis Libros" />
                    <span class="font-medium">Mis Libros</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/square-plus.svg" alt="Agregar" />
                    <span class="font-medium">Agregar</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/gift.svg" alt="Deseados" />
                    <span class="font-medium">Deseados</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/id.svg" alt="Autores" />
                    <span class="font-medium">Autores</span>
                </a>
            </li>
            <li>
                <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
                   class="flex items-center px-6 py-3 rounded-xl transition-all duration-300 hover:bg-red-200 hover:shadow-md hover:scale-105 transform focus:outline-none focus:ring-2 focus:ring-gray-500 active:bg-gray-300 active:font-semibold">
                    <img class="h-6 w-6 mr-3" src="../resources/svg/user.svg" alt="Perfil" />
                    <span class="font-medium">Perfil</span>
                </a>
            </li>
        </ul>

        <!-- Botón de Salir -->
        <div class="mt-auto w-full">
            <a href="{{ route('logout') }}" 
               class="flex items-center px-6 py-3 rounded-xl bg-red-500 text-white hover:bg-red-600 hover:shadow-xl hover:scale-105 transition-all duration-300 transform focus:outline-none focus:ring-2 focus:ring-red-500 active:bg-red-700 active:font-semibold">
                <span class="font-medium">Salir</span>
            </a>
        </div>
    </div>
</nav>

<!-- Botón para mostrar/ocultar el menú en dispositivos móviles -->
<button id="mobile-menu-button" class="lg:hidden fixed top-4 left-4 p-3 bg-gray-800 text-white rounded-full z-20 focus:outline-none focus:ring-2 focus:ring-gray-500">
    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
    </svg>
</button>

<!-- Script para manejar el menú móvil -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const nav = document.querySelector('nav');
        nav.classList.toggle('hidden');
    });
</script>