<?php 
session_start();
if(!isset($_SESSION['usuario'])){
  header("Location:../index.php");
}else{

  if($_SESSION['usuario'=="ok"]){
    $nombreUsuario=$_SESSION["nombreUsuario"];
  }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-image: url(../img/fondo_blanco.jpg);
        background-size: cover;
        background-repeat: no-repeat;
}
nav{
    font-size: 20px;
}

.navbar-light .navbar-nav .nav-link {
    color: #f8f9fa;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
    color: #f8f9fa;
}
  
.btn-lg{
  border-radius: 60px;
}
h1 strong{
    color:blue ;
}

  </style>
  
  
  </head>
  <body>
    <?php $url="http://".$_SERVER ['HTTP_HOST']."/sitioweb" ?>

  <nav class="navbar navbar-expand navbar-light bg-info">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="#">Administrador del sitio web<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php"/>Inicio</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>">Ver sitio web</a>
     </div>
  </nav>

  <div class="container">
</br>
    <div class="row">