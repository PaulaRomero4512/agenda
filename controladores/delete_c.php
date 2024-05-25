<?php
require_once('../modelo/administrador.php');

if($_POST){
    $Modelo = new administrador();
    $id = $_POST['Id'];
    $Modelo->delete($id);
}else{
    header('Location: ../index.php');
}
?>