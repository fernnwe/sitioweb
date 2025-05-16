<?php 
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:../index.php");
    exit();
} else {
    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION['nombreUsuario'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Administrador</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/sitioweb"; ?>

<!-- Navbar -->
<header class="bg-white shadow sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-4">
      <!-- Logo y título -->
      <div class="flex items-center space-x-2">
        <h1 class="text-xl font-bold text-blue-700">Panel Admin</h1>
      </div>

      <!-- Botón hamburguesa -->
      <button id="menu-toggle" class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Menú -->
      <nav id="menu"
        class="hidden md:flex md:space-x-6 flex-col md:flex-row absolute md:static top-full left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none p-4 md:p-0 z-40">
        <a href="<?php echo $url; ?>../../sitioweb/administrador/inicio.php" class="block py-2 md:py-0 text-gray-700 hover:text-blue-600 transition">Inicio</a>
        <a href="<?php echo $url; ?> ../../sitioweb/administrador/seccion/productos.php" class="block py-2 md:py-0 text-gray-700 hover:text-blue-600 transition">Productos</a>
        <a href="<?php echo $url; ?>" class="block py-2 md:py-0 text-gray-700 hover:text-blue-600 transition">Ver sitio</a>
        <a href="<?php echo $url; ?>../../sitioweb/administrador/index.php" class="block py-2 md:py-0 text-red-600 hover:text-red-700 font-semibold">Cerrar</a>
      </nav>
    </div>
  </div>
</header>

<!-- Contenido principal -->
<main class="max-w-7xl mx-auto px-4 py-10">
  <div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold text-gray-800 mb-2">Bienvenido, <?php echo $nombreUsuario; ?> 👋</h1>
    <p class="text-gray-600 mb-4">Este es tu panel de administración. Desde aquí podés gestionar productos, revisar pedidos y más.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Tarjeta de ejemplo -->
        <div class="bg-blue-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold text-blue-800">Productos</h2>
            <p class="text-sm text-blue-700 mt-2">Ver, agregar, editar o eliminar productos.</p>
        </div>
        <div class="bg-green-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold text-green-800">Pedidos</h2>
            <p class="text-sm text-green-700 mt-2">Gestioná los pedidos de tus clientes.</p>
        </div>
        <div class="bg-yellow-100 p-4 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold text-yellow-800">Estadísticas</h2>
            <p class="text-sm text-yellow-700 mt-2">Visualizá el rendimiento de tu tienda.</p>
        </div>
    </div>
  </div>
</main>

<!-- JS para menú hamburguesa -->
<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>

</body>
</html>
