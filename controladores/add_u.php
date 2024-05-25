<?php
require_once('../modelo/usuarios.php');

if($_POST){
    $Modelo = new usuarios();
    $correo=$_POST['login'];
    $contrasena=$_POST['contrasena'];
    $estado=$_POST['estado'];
    $rol=$_POST['Rol'];
    $Modelo->add($correo,$contrasena,$estado,$rol);

}else{
    header('Location: ../index.php');
}

?>