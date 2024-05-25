<?php
require_once('../conexion.php');
class administrador extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add($fechacita,$hora,$estado,$medico,$paciente,$servicio){
        $statement = $this->db->prepare ("INSERT INTO cita (fecha_Cita, hora_Cita, estado_Cita, id_EmpleadoFK, id_ClienteFK, id_ServicioFK) VALUES (:fechacita, :hora, :estado, :medico, :paciente, :servicio)");
        $statement->bindParam(':fechacita',$fechacita);
        $statement->bindParam(':hora',$hora);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':medico',$medico);
        $statement->bindParam(':paciente',$paciente);
        $statement->bindParam(':servicio',$servicio);
        if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/add_c.php');
        }
      }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT fecha_Cita, hora_Cita, estado_Cita,nombre_empleado , nombre_cliente,apellido_Cliente, descripcion_servicio FROM cita inner join empleado on id_Empleado=id_EmpleadoFK inner join servicio on id_Servicio= id_ServicioFK inner join cliente on id_Cliente= id_ClienteFK");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM cita WHERE id_Cita = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id,$fechacita,$hora,$estado,$medico,$paciente,$servicio){
        $statement = $this->db->prepare ("UPDATE cita SET fecha_Cita = :fechacita, hora_Cita = :hora, estado_Cita = :estado, id_EmpleadoFK = :medico, id_ClienteFK = :paciente, id_ServicioFK = :servicio WHERE id_Cita = :id"); 
        $statement->bindParam(':id',$id);
        $statement->bindParam(':fechacita',$fechacita);
        $statement->bindParam(':hora',$hora);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':medico',$medico);
        $statement->bindParam(':paciente',$paciente);
        $statement->bindParam(':servicio',$servicio);
        if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/add_c.php');
        }
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM cita WHERE id_Cita = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/delete_c.php');
        }
    }

}


?>