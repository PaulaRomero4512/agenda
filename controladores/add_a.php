<?php
require_once('../modelo/agenda.php');

if($_POST){
    $Modelo = new agenda();
    $nombres=$_POST['nombres'];
    $citas=$_POST['citas'];
    $telefono=$_POST['telefono'];
    $Modelo->add($nombres,$citas,$telefono);

}else{
    header('Location: ../index.php');
}

?>