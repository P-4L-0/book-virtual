<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="shortcut icon" href="{{ asset('img/book.png') }}">
  @vite('resources/css/app.css')
</head>

<body class="w-full h-screen">
  <div class="w-full h-screen p-2 flex flex-col bg-white lg:flex-row">
    <!-- Contenedor del formulario -->
    <div class="flex flex-col w-full h-full lg:w-3/5 lg:order-2">
      <div class="flex flex-col items-center w-full h-full lg:justify-center">
        <img src="{{ asset('img/VirtualBooks.png') }}" alt="Logo" />
        <h1 class="text-red-500 font-bold text-2xl mb-10 mt-10">Registrarse</h1>

        <!-- FORMULARIO DE REGISTRO -->
        <form action="{{ route('register') }}" method="POST" class="w-4/5 lg:flex flex-col items-center">
          @csrf

          <!-- Mostrar errores -->
          @if ($errors->any())
            <div class="w-full lg:w-2/5 bg-red-100 text-red-700 p-2 rounded mb-4 text-sm">
              <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="text"
            placeholder="Nombres" name="nombre" value="{{ old('nombre') }}" />

          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="text"
            placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}" />

          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="email"
            placeholder="Email" name="email" value="{{ old('email') }}" />

          <!-- Contraseña -->
          <div class="relative w-full lg:w-2/5 mb-4">
            <input class="block w-full p-2 outline outline-1 outline-red-500 pr-10" type="password"
              placeholder="Contraseña" name="password" />
          </div>

          <!-- Confirmar contraseña -->
          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="password"
            placeholder="Confirmar Contraseña" name="password_confirmation" />

          <button type="submit"
            class="w-full p-2 rounded-md bg-red-500 text-white font-bold lg:w-2/5 hover:bg-red-300 duration-200">
            Registrarse
          </button>
        </form>

        <p class="my-8">
          ¿Ya posees una cuenta?
          <a href="../views/login.php" class="text-red-500 font-bold">Iniciar Sesión</a>
        </p>
      </div>
      <p class="flex grow items-end text-vh-green text-center lg:block">
        © 2025 VirtualBooks. Todos los derechos reservados.
      </p>
    </div>

    <!-- Contenedor de la imagen -->
    <div class="hidden lg:block bg-red-500 w-2/5 rounded-xl p-11 order-1 relative">
      <div class="lg:bg-black opacity-20 w-full h-full rounded-xl absolute inset-0"></div>
      <div class="w-full h-full relative">
        <img src="{{ asset('img/books.jpg') }}" alt="Libros" class="w-full h-full object-cover rounded-xl" />
      </div>
    </div>
  </div>
</body>
</html>
