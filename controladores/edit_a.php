<?php
require_once('../modelo/agenda.php');

if($_POST){
    $Modelo = new agenda();
    $id=$_POST['Id'];
    $nombres=$_POST['nombres'];
    $citas=$_POST['citas'];
    $telefono=$_POST['telefono'];
    $Modelo->update($id,$nombres,$citas,$telefono);

}else{
    header('Location: ../index.php');
}


?>