<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

   <?php $url= "http://".$_SERVER['HTTP_HOST']."/sitioweb"?>


<nav class= "navbar navbar-expand navbar-light bg-light">

    <div class="nav navbar-nav">
        <a class= "nav-item nav-link active"href="#">Administrador del sitio web</a>
        <a class= "nav-item nav-link "href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
        <a class= "nav-item nav-link "href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
        <a class= "nav-item nav-link "href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
        <a class= "nav-item nav-link "href="<?php echo $url;?>">Ver sitio web</a>
    </div>

</nav>

<div class="container">
<br/>
        <div class="row">

        