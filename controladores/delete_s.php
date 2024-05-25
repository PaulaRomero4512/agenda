<?php
require_once('../modelo/servicios.php');

if($_POST){
    $Modelo = new servicios();
    $id = $_POST['Id'];
    $Modelo->delete($id);
}else{
    header('Location: ../index.php');
}
?>