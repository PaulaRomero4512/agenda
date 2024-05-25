<?php
require_once('../conexion.php');
class agenda extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add($nombres,$citas,$telefono){
        $statement = $this->db->prepare ("INSERT INTO agenda(nombre, citas, telefono) VALUES (:nombres, :citas, :telefono)");
        $statement->bindParam(':nombres',$nombres);
        $statement->bindParam(':citas',$citas);
        $statement->bindParam(':telefono',$telefono);
        if($statement->execute()){
            header('Location:../vista/index_a.php');
        }else{
          header('Location:../vista/add_a.php');
        }
      }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT * FROM agenda");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM agenda WHERE id_agenda = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id,$nombres,$citas,$telefono){
        $statement = $this->db->prepare ("UPDATE agenda SET nombre = :nombres, citas = :citas, telefono = :telefono WHERE id_agenda = :id"); 
        $statement->bindParam(':id',$id);
        $statement->bindParam(':nombres',$nombres);
        $statement->bindParam(':citas',$citas);
        $statement->bindParam(':telefono',$telefono);
             if($statement->execute()){
            header('Location:../vista/index_a.php');
        }else{
          header('Location:../vista/add_a.php');
        }
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM agenda WHERE id_agenda = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_a.php');
        }else{
          header('Location:../vista/delete_a.php');
        }
    }

}


?>