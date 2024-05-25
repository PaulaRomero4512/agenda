<?php
require_once('../modelo/administrador.php');

if($_POST){
    $Modelo = new administrador();
    $id=$_POST['Id'];
    $fechacita=$_POST['FechaCita'];
    $hora=$_POST['Hora'];
    $estado=$_POST['estado'];
    $medico=$_POST['medico'];
    $paciente=$_POST['paciente'];
    $servicio=$_POST['servicio'];
    $Modelo->update($id,$fechacita,$hora,$estado,$medico,$paciente,$servicio);

}else{
    header('Location: ../index.php');
}


?>