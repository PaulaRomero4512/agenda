<?php

require_once('../modelo/usuarios.php');
$Modelo = new usuarios();
$Modelo->Validacionsession();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Centro Médico de Bogotá</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link rel="icon" href="img/Logo.png">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dani.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light  micolor">
  <a class="navbar-brand" href="#"><img src="img/dani.png " class="dani"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login.php">Ingrese</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contactenos.php">PQR</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link" href="../usuarios/controladores/cerrar.php">Cerrar Sesion</a>
      </li>
    </ul>
    
  </div>
</nav>
<Section>
<br>
<div class="container bg-light justify-content-center">
<h2 class="text-center" style="color:#4caf9d"><strong>NUEVO CLIENTE</strong></h2>
<a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_cl.php"><strong>Volver</strong></a>
<div class="col-sm-12 col-md-6 col-lg-4  m-auto">
    <form class="form-signin" method="POST" action="../controladores/add_cl.php">
  
    <div class="form-group">
    <label for=""> <strong>Numero Documento</strong></label>
    <input class="form-control" type="text" name="numero" required="" autocomplete="off" placeholder="documento" >
    </div>
    <div class="form-group">
    <label for=""> <strong>Tipo Documento</strong></label>
    <input class="form-control" type="text" name="tipodoc" required="" autocomplete="off" placeholder="tipo documento" > 
    </div>
    <div class="form-group">
    <label for=""> <strong>Nombres</strong></label>
    <input class="form-control" type="text" name="nombres" required="" autocomplete="off" placeholder="nombres" > 
    </div>
    <div class="form-group">
    <label for=""> <strong>Apellidos</strong></label>
    <input class="form-control" type="text" name="apellidos" required="" autocomplete="off" placeholder="Apellidos" > 
    </div>
    <div class="form-group">
    <label for=""> <strong>Direccion</strong></label>
    <input class="form-control" type="text" name="direccion" required="" autocomplete="off" placeholder="Direccion" > 
    </div>
    <div class="form-group">
    <label for=""> <strong>Telefono</strong></label>
    <input class="form-control" type="text" name="telefono" required="" autocomplete="off" placeholder="Telefono"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Estado</strong></label>
    <input class="form-control" type="text" name="estado" required="" autocomplete="off" placeholder="estado"> 
    </div>
    <div class="form-group">
    <label for=""> <strong>Usuario</strong></label>
    <input class="form-control" type="text" name="usuario" required="" autocomplete="off" placeholder="Usuario" > 
    </div>
   

    <input class=" form-control btn" type="submit" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" value="Actualizar">
    <br><br>
</form>
</div>
</div>
</Section>
<br><br><br><br>
<footer>
<div  class="container-fluid pie dapa">
  Correo Electronico: paularomero4512@gmail.com <br>
  Numero de Contacto: 3213046705 </div>
</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>