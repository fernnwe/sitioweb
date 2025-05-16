<?php include("../template/cabecera.php"); ?>
<?php
$txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen = (isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){

    case "Agregar":
        $sentenciaSQL= $conexion->prepare("INSERT INTO libros (nombre,imagen) VALUES (:nombre, :imagen);");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);

        $fecha= new DateTime();
        $nombreArchivo= ($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES['txtImagen']["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if( $tmpImagen!=""){
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;

    case "Modificar":
        $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre=:nombre WHERE id = :id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        if($txtImagen!=""){
            $fecha= new DateTime();
            $nombreArchivo= ($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES['txtImagen']["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id = :id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg")){
                if(file_exists("../../img/".$libro["imagen"])){
                    unlink("../../img/".$libro["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE libros SET imagen=:imagen WHERE id = :id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
        }
        header("Location:productos.php");
        break;

    case "Cancelar":
        header("Location:productos.php");
        break;

    case "Seleccionar":
        $sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE id = :id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $libro['nombre'];
        $txtImagen = $libro['imagen'];
    break;

    case "Borrar":
        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM libros WHERE id = :id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($libro["imagen"]) &&($libro["imagen"]!="imagen.jpg")){
            if(file_exists("../../img/".$libro["imagen"])){
                unlink("../../img/".$libro["imagen"]);
            }
        }

        $sentenciaSQL= $conexion->prepare("DELETE FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Formulario de libros -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
    <h2 class="text-xl font-semibold mb-4 text-blue-600">Gestión de Productos</h2>
    <form method="POST" enctype="multipart/form-data">

        <div class="mb-4">
            <label for="txtID" class="block text-sm font-medium text-gray-700">ID:</label>
            <input type="text" required readonly class="mt-1 block w-full px-4 py-2 border rounded-md text-gray-700 bg-gray-100" value="<?php echo $txtID; ?>" name="txtID" id="txtID">
        </div>

        <div class="mb-4">
            <label for="txtNombre" class="block text-sm font-medium text-gray-700">Nombre del producto:</label>
            <input type="text" required class="mt-1 block w-full px-4 py-2 border rounded-md text-gray-700" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre">
        </div>

        <div class="mb-4">
            <label for="txtImagen" class="block text-sm font-medium text-gray-700">Imagen del Producto:</label>
            <div class="mt-2">
                <?php if ($txtImagen != "") { ?>
                    <img class="img-thumbnail rounded mb-4" src="../../img/<?php echo $txtImagen; ?>" width="100" alt="Imagen del libro">
                <?php } ?>
                <input type="file" class="block w-full text-sm text-gray-700 border rounded-md" name="txtImagen" id="txtImagen">
            </div>
        </div>

        <div class="flex space-x-4">
            <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":"";?> value="Agregar" class="w-full py-2 px-4 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700">Agregar</button>
            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Modificar" class="w-full py-2 px-4 bg-yellow-600 text-white font-semibold rounded-md hover:bg-yellow-700">Modificar</button>
            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":"";?> value="Cancelar" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">Cancelar</button>
        </div>
        
    </form>
</div>

<!-- Tabla de libros -->
<div class="max-w-7xl mx-auto mt-6">
    <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-gray-600">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Imagen</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaLibros as $libro) { ?>
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2"><?php echo $libro['id']; ?></td>
                <td class="px-4 py-2"><?php echo $libro['nombre']; ?></td>
                <td class="px-4 py-2">
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $libro['imagen']; ?>" width="50" alt="Imagen del libro">
                </td>
                <td class="px-4 py-2">
                    <form method="post" class="inline-block">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro['id']; ?>"/>
                        <button type="submit" name="accion" value="Seleccionar" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600">Seleccionar</button>
                        <button type="submit" name="accion" value="Borrar" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600">Borrar</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include("../template/pie.php"); ?>
