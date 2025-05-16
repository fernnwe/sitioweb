<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sitio web</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        
        <!-- Marca -->
        <div class="flex items-center gap-4">
          <a href="index.php" class="flex items-center gap-2">
            <img src="masaya.png" alt="Logo TiendaNica" class="h-10 w-10 object-contain" />
            <span class="text-2xl font-bold text-red-600 tracking-wide hover:text-red-700 transition">Masaya Online</span>
          </a>
        </div>

        <!-- Navegación principal -->
        <div class="hidden md:flex items-center space-x-6 text-sm font-medium text-gray-700">
          <a href="index.php" class="hover:text-red-600 transition">Inicio</a>
          <a href="productos.php" class="hover:text-red-600 transition">Productos</a>
          <a href="nosotros.php" class="hover:text-red-600 transition">Nosotros</a>
          <a href="../../sitioweb/administrador/index.php" class="hover:text-red-600 transition">Administrador</a>
        </div>

        <!-- Menú móvil -->
        <div class="md:hidden">
          <button id="menu-toggle" class="text-2xl text-gray-600 hover:text-red-600 transition focus:outline-none">
            <i class="ph ph-list"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Menú móvil desplegable -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
      <a href="index.php" class="block px-4 py-3 text-sm hover:bg-red-50">Inicio</a>
      <a href="productos.php" class="block px-4 py-3 text-sm hover:bg-red-50">Productos</a>
      <a href="nosotros.php" class="block px-4 py-3 text-sm hover:bg-red-50">Nosotros</a>
      <a href="../../sitioweb/administrador/index.php" class="block px-4 py-3 text-sm hover:bg-red-50">Administrador</a>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="container mx-auto px-4 py-6">
    <!-- Aquí va el contenido -->
  </div>

  <!-- Script del menú móvil -->
  <script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>

</body>
</html>
