<?php
require_once('../conexion.php');
class servicios extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add($descripcion,$estado){
        $statement = $this->db->prepare ("INSERT INTO servicio (descripcion_Servicio, estado_Servicio) VALUES (:descripcion, :estado)");
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':estado',$estado);
        if($statement->execute()){
            header('Location:../vista/index_s.php');
        }else{
          header('Location:../vista/add_s.php');
        }
      }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT * FROM Servicio");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM servicio WHERE id_Servicio = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id,$descripcion,$estado){
        $statement = $this->db->prepare ("UPDATE servicio  SET descripcion_Servicio = :descripcion, estado_Servicio = :estado WHERE id_Servicio = :id"); 
        $statement->bindParam(':id',$id);
        $statement->bindParam(':descripcion',$descripcion);
        $statement->bindParam(':estado',$estado);
             if($statement->execute()){
            header('Location:../vista/index_s.php');
        }else{
          header('Location:../vista/add_s.php');
        }
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM servicio WHERE id_Servicio = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_s.php');
        }else{
          header('Location:../vista/delete_s.php');
        }
    }

}


?>