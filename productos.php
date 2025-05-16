<?php include("template/cabecera.php"); ?>
<?php 
include("administrador/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="max-w-7xl mx-auto px-4 py-16">
  <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12">Nuestros Productos</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    <?php foreach($listaLibros as $libro) { ?>
      <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="./img/<?php echo $libro['imagen']; ?>" alt="<?php echo $libro['nombre']; ?>" 
               class="w-full aspect-[4/3] object-cover transition-transform duration-300 group-hover:scale-105">
        </div>
        <div class="p-5">
          <h4 class="text-lg font-bold text-gray-800 mb-3 truncate"><?php echo $libro['nombre']; ?></h4>
          <a href="https://www.apple.com/"
             class="inline-block bg-red-600 text-white px-5 py-2 rounded-lg shadow hover:bg-red-700 hover:shadow-md transition text-sm font-medium">
             Ver más
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php include("template/pie.php"); ?>
