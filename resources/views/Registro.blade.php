<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="shortcut icon" href="{{ asset('img/book.png') }}" 
  @vite('resources/css/app.css')
</head>

<body class="w-full h-screen">
  <div class="w-full h-screen p-2 flex flex-col bg-white lg:flex-row">
    <!-- Contenedor del formulario -->
    <div class="flex flex-col w-full h-full lg:w-3/5 lg:order-2">
      <div class="flex flex-col items-center w-full h-full lg:justify-center">
        <img src="{{ asset('img/VirtualBooks.png') }}" alt="" /><!--LOGO-->
        <h1 class="text-red-500 font-bold text-2xl mb-10 mt-10">
          Registrarse
        </h1>
        <form action="../api/routes.php/register" method="POST" class="w-4/5 lg:flex flex-col items-center">
          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="text"
            placeholder="Nombres" id="name" name="nombre" />
          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="text"
            placeholder="Apellidos" id="lastName" name="apellido" />
          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="email"
            placeholder="Email" id="mail" name="email" />
          <!-- Contenedor para el campo de contraseña y el icono -->
          <div class="relative w-full lg:w-2/5 mb-4">
            <input class="block w-full p-2 outline outline-1 outline-red-500 pr-10" type="password"
              placeholder="Contraseña" id="password" name="password" />
            <!-- Icono de "Ver Contraseña" -->
            <label for="see_password" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
              <img src="" alt="scan_eye" type="image/svg+xml" id="see_password_img" class="h-5 w-5" />
            </label>
          </div>
          <input class="block w-full p-2 outline outline-1 outline-red-500 mb-4 lg:w-2/5" type="password"
            placeholder="Confirmar Contraseña" id="password_confirm" name="p_confirm" />
          <input type="checkbox" class="hidden" id="see_password" />
          <button id="register"
            class="w-full p-2 rounded-md bg-red-500 text-white font-bold lg:w-2/5 hover:bg-red-300 hover:text-vh-green duration-200"
            id="show-alert">
            Registrarse
          </button>
        </form>
        <p class="my-8">
          ¿Ya posees una cuenta?
          <a href="../views/login.php" class="text-red-500 font-bold"> Iniciar Sesión </a>
        </p>
      </div>
      <p class="flex grow items-end text-vh-green text-center lg:block">
        © 2025 VirtualBooks Todos los derechos reservados reservados
      </p>
    </div>

    <!-- Contenedor de la imagen con fondo rojo -->
    <div class="hidden lg:block bg-red-500 w-2/5 rounded-xl p-11 order-1 relative">
      <div class="lg:bg-black opacity-20 w-full h-full rounded-xl absolute inset-0"></div>
      <!-- Contenedor de la imagen -->
      <div class="w-full h-full relative">
        <img src="{{ asset('img/books.jpg') }}" alt="doctor_svg" class="w-full h-full object-cover rounded-xl" />
      </div>
    </div>
  </div>
</body>

</html>