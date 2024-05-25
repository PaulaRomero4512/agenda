<?php
require_once('../modelo/servicios.php');

if($_POST){
    $Modelo = new servicios();
    $id=$_POST['Id'];
    $descripcion=$_POST['descripcion'];
    $estado=$_POST['estado'];
    $Modelo->update($id,$descripcion,$estado);

}else{
    header('Location: ../index.php');
}


?>