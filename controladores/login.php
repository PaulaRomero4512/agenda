<?php
require_once('../modelo/usuarios.php');
if($_POST){
    $email=$_POST['inputemail'];
    $contrasena=$_POST['inputcontrasena'];
    $modelo = new usuarios();
    if($modelo->login($email,$contrasena))
    {
        $Modelo = new usuarios();
        $Modelo->Validacionsessionadministrador();
    } else{
        header('location:../index.php');
         }
}else{
    header('location:../index.php');
}
?>