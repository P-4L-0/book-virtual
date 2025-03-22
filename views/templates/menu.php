<!-- Menú lateral (sidebar) mejorado -->
<nav class="hidden lg:flex fixed top-0 left-0 bottom-0 w-64 bg-gradient-to-b from-gray-100 to-gray-300 text-gray-700 shadow-lg rounded-r-3xl overflow-hidden z-10">
    <div class="sidebar flex flex-col flex-grow items-center py-6">
        
        <!-- Título con tipografía llamativa -->
        <div class="text-center text-2xl font-extrabold text-gray-800 tracking-wide">
            Virtual Book
        </div>

        <!-- Logo con sombra -->
        <div class="mt-4 w-40">
            <object data="{{ asset('storage/svg/logo-icon-white.svg') }}" class="w-full drop-shadow-lg" type="image/svg+xml"></object>
        </div>

        <!-- Menú -->
        <div class="flex flex-col w-full mt-8 space-y-3">
            <a href="{{ route('statistics.index', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/door.svg" alt="Inicio" />
                <span class="font-medium">Inicio</span>
            </a>
            <a href="{{ route('categorias.appointments', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/info-circle.svg" alt="Información" />
                <span class="font-medium">Información</span>
            </a>
            <a href="{{ route('categorias.records', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/bookmark.svg" alt="Mis Libros" />
                <span class="font-medium">Mis Libros</span>
            </a>
            <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/square-plus.svg" alt="Agregar" />
                <span class="font-medium">Agregar</span>
            </a>
            <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/gift.svg" alt="Deseados" />
                <span class="font-medium">Deseados</span>
            </a>
            <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/id.svg" alt="Autores" />
                <span class="font-medium">Autores</span>
            </a>
            <a href="{{ route('categorias.staff', ['id' => $categoria->id]) }}" 
               class="flex items-center px-6 py-3 rounded-r-full transition-all duration-300 hover:bg-gray-300 hover:shadow-lg">
                <img class="h-6 w-6 mr-3" src="public/svg/user.svg" alt="Perfil" />
                <span class="font-medium">Perfil</span>
            </a>
        </div>
    </div>
</nav>
