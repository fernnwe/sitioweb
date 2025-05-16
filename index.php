<?php include("template/cabecera.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section class="bg-gradient-to-tr from-red-700 to-red-500 text-white py-24 px-6 rounded-2xl shadow-2xl max-w-7xl mx-auto my-12">
  <div class="text-center space-y-12">
    
    <!-- TITULAR -->
    <h1 class="text-5xl font-extrabold leading-tight tracking-tight">
      ¡Transforma tu experiencia de compra con <span class="text-yellow-300">Tu Tienda Online!</span>
    </h1>

    <!-- DESCRIPCIÓN -->
    <p class="text-xl max-w-3xl mx-auto text-white/90">
      Productos de calidad, atención personalizada y envíos rápidos. Todo lo que necesitas, en un solo lugar.
    </p>

    <!-- BENEFICIOS CON ÍCONOS PROFESIONALES -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto mt-10 text-left">
      
      <!-- Envío rápido -->
      <div class="flex items-start space-x-4">
        <svg class="w-10 h-10 text-yellow-300 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 15H3a.75.75 0 01-.75-.75V9.75A.75.75 0 013 9h.75m0 6h16.5m-16.5 0a2.25 2.25 0 004.5 0m12 0a2.25 2.25 0 01-4.5 0M4.5 9.75V6.375C4.5 5.339 5.34 4.5 6.375 4.5h11.25c1.035 0 1.875.839 1.875 1.875V9.75m-15 0h15"/>
        </svg>
        <div>
          <h3 class="text-lg font-semibold">Envío Express</h3>
          <p class="text-white/80 text-sm">Recibe tus productos en tiempo récord con nuestra logística optimizada.</p>
        </div>
      </div>

      <!-- Seguridad -->
      <div class="flex items-start space-x-4">
        <svg class="w-10 h-10 text-yellow-300 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3.75L3.75 8.25v7.5L12 20.25l8.25-4.5v-7.5L12 3.75z"/>
        </svg>
        <div>
          <h3 class="text-lg font-semibold">Compra Segura</h3>
          <p class="text-white/80 text-sm">Protegemos tus datos y pagos con cifrado de nivel bancario.</p>
        </div>
      </div>

      <!-- Variedad -->
      <div class="flex items-start space-x-4">
        <svg class="w-10 h-10 text-yellow-300 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 5.25h16.5m-16.5 13.5h16.5M4.5 8.25h15a.75.75 0 01.75.75v6a.75.75 0 01-.75.75H4.5a.75.75 0 01-.75-.75v-6a.75.75 0 01.75-.75z"/>
        </svg>
        <div>
          <h3 class="text-lg font-semibold">Gran Variedad</h3>
          <p class="text-white/80 text-sm">Miles de productos en tecnología, hogar, moda, salud y más.</p>
        </div>
      </div>

      <!-- Soporte humano -->
      <div class="flex items-start space-x-4">
        <svg class="w-10 h-10 text-yellow-300 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M18.364 5.636a9 9 0 11-12.728 0M15 12a3 3 0 11-6 0"/>
        </svg>
        <div>
          <h3 class="text-lg font-semibold">Atención Personalizada</h3>
          <p class="text-white/80 text-sm">Estamos aquí para ayudarte antes, durante y después de tu compra.</p>
        </div>
      </div>
    </div>

    <!-- BOTÓN CTA -->
    <div>
      <a href="productos.php"
         class="inline-block bg-yellow-300 text-red-900 hover:bg-yellow-400 hover:scale-105 transition-all duration-300 font-bold px-8 py-4 rounded-xl shadow-lg text-lg tracking-wide">
        Explorar Catálogo
      </a>
    </div>
  </div>
</section>

<?php include("template/pie.php"); ?>


  
</body>
</html>


