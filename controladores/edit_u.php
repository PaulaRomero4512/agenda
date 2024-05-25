<?php
require_once('../modelo/usuarios.php');

if($_POST){
    $Modelo = new usuarios();
    $id=$_POST['Id'];
    $correo=$_POST['login'];
    $contrasena=$_POST['contrasena'];
    $estado=$_POST['estado'];
    $rol=$_POST['Rol'];
    $Modelo->update($id,$correo,$contrasena,$estado,$rol);

}else{
    header('Location: ../index.php');
}


?>