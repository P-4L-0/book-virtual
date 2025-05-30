<header class="w-full h-20 flex items-center justify-between px-6 bg-gradient-to-r from-red-300 via-red-200 to-red-100 shadow-md fixed top-0 left-0 z-50 backdrop-blur-md bg-opacity-70 transition-all ease-in-out duration-300">

    <!-- Logo y Nombre -->
    <div class="flex items-center space-x-6">
        <img src="{{ asset('img/book.png') }}" alt="Logo" class="w-12 h-12 transition-all duration-300 ease-in-out transform hover:rotate-12 hover:scale-110" />
        <span class="text-3xl lg:text-4xl font-extrabold text-white tracking-wide font-sans uppercase hover:text-red-100 transition-all ease-in-out duration-300 transform">
            Virtual <span class="text-red-500">Books</span>
        </span>
    </div>

    <!-- Botones a la derecha -->
    <div class="flex h-full fixed right-0 top-0 z-50 shadow-lg">
        <!-- Iniciar Sesión -->
        <a href="/login"
           class="h-full w-36 flex items-center justify-center bg-white text-red-600 font-semibold text-sm transition-all duration-300 ease-in-out rounded-l-md hover:bg-red-500 hover:text-white focus:outline-none">
            Iniciar Sesión
        </a>
        <!-- Regístrate -->
        <a href="/register"
           class="h-full w-36 flex items-center justify-center bg-red-500 text-white font-semibold text-sm transition-all duration-300 ease-in-out hover:bg-red-600 focus:outline-none">
            Regístrate
        </a>
    </div>
</header>
