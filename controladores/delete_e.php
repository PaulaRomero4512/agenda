<?php
require_once('../modelo/empleados.php');

if($_POST){
    $Modelo = new empleados();
    $id = $_POST['Id'];
    $Modelo->delete($id);
}else{
    header('Location: ../index.php');
}
?>