<?php
require_once('../modelo/agenda.php');

if($_POST){
    $Modelo = new agenda();
    $id = $_POST['Id'];
    $Modelo->delete($id);
}else{
    header('Location: ../index.php');
}
?>