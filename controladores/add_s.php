<?php
require_once('../modelo/servicios.php');

if($_POST){
    $Modelo = new servicios();

    $descripcion=$_POST['descripcion'];
    $estado=$_POST['estado'];
    $Modelo->add($descripcion,$estado);

}else{
    header('Location: ../index.php');
}

?>