<?php
require_once('../modelo/clientes.php');

if($_POST){
    $Modelo = new clientes();
    $numero=$_POST['numero'];
    $tipodoc=$_POST['tipodoc'];
    $nombre=$_POST['nombres'];
    $apellido=$_POST['apellidos'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $estado=$_POST['estado'];
    $usuario=$_POST['usuario'];
    $Modelo->add($numero,$tipodoc,$nombre,$apellido,$direccion,$telefono,$estado,$usuario);
}else{
    header('Location: ../index.php');
}
?>