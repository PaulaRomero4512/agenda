<?php
require_once('../modelo/clientes.php');

if($_POST){
    $Modelo = new clientes();
    $id = $_POST['Id'];
    $Modelo->delete($id);
}else{
    header('Location: ../index.php');
}
?>