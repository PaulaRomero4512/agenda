<?php

require_once('../modelo/usuarios.php');
$Modelo = new usuarios();
$Modelo->Validacionsession();
require_once('../modelo/empleados.php');
$Modelo2 = new empleados();

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
        <a class="nav-link" href="../controladores/cerrar.php">Cerrar Sesion</a>
      </li>
    </ul>
    
  </div>
</nav>
<Section>
    <br>
<div class="container bg-white   justify-content-center">
<h2 class="text-center" style="color:#4caf9d"><strong>MODULO EMPLEADOS</strong></h2><br>

<a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="add_e.php" ><strong>Nuevo Empleado</strong></a>
    <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_s.php" ><strong>Servicios</strong></a>
    <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_a.php" ><strong>Agenda</strong></a>
    <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_u.php" ><strong>Usuarios</strong></a>
    <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_c.php" ><strong>Citas</strong></a>
    <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="index_cl.php" ><strong>Clientes</strong></a>
    <br><br>
    <table class="table table-hover table-bordered ">
    <thead class="thead-dark">
        <tr>
            <th>Numero Documento</th>
            <th>Tipo Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
         <?php
        $empleados = $Modelo2 -> get();
        if($empleados != null){
        foreach ($empleados as $empleado){
        ?>
        <tr>
            <th><?php echo $empleado['numDoc_Empleado']?></th>
            <th><?php echo $empleado['tipodoc_Empleado']?></th>
            <th><?php echo $empleado['nombre_Empleado']?></th>
            <th><?php echo $empleado['apellido_Empleado']?></th>
            <th><?php echo $empleado['direccion_Empleado']?></th>
            <th><?php echo $empleado['tel_Empleado']?></th>
            <th><?php echo $empleado['correo_Usuario']?></th>
            <th>
                <a type="button" class="btn  btn-sm boton " style="background-color:#7AD5C4; color: rgb(255, 255, 255);"href="edit_e.php?id=<?php echo $empleado['id_Empleado']?>">Editar</a>
                <a type="button" class="btn btn-sm boton" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" href="delete_e.php?id=<?php echo $empleado['id_Empleado']?>">Eliminar</a>
            </th>
        </tr>
          <?php
        }
        }
        ?>
          </tbody>
    </table>
</div>
</Section>
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