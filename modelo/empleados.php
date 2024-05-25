<?php
require_once('../conexion.php');
class empleados extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add($numero,$tipodoc,$nombre,$apellido,$direccion,$telefono,$estado,$usuario){
        $statement = $this->db->prepare ("INSERT INTO empleado (numDoc_Empleado, tipodoc_Empleado, nombre_Empleado, apellido_Empleado, direccion_Empleado, tel_Empleado, estado_Empleado, id_UsuarioFK) VALUES (:numero,:tipodoc,:nombre,:apellido,:direccion,:telefono,:estado,:usuario)");
        $statement->bindParam(':numero',$numero);
        $statement->bindParam(':tipodoc',$tipodoc);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':apellido',$apellido);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':telefono',$telefono);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':usuario',$usuario);

     if($statement->execute()){
            header('Location:../vista/index_e.php');
        }else{
          header('Location:../vista/add_e.php');
        }
    }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT * FROM empleado inner join usuario on id_Usuario=id_UsuarioFK");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM empleado WHERE id_Empleado = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id, $numero,$tipodoc,$nombre,$apellido,$direccion,$telefono,$estado,$usuario){
        $statement = $this->db->prepare ("UPDATE empleado  SET numDoc_Empleado = :numero, tipodoc_Empleado = :tipodoc, nombre_Empleado = :nombre, apellido_Empleado = :apellido, direccion_Empleado = :direccion, tel_Empleado = :telefono, estado_Empleado = :estado, id_UsuarioFK = :usuario WHERE id_Empleado = :id"); 
        $statement->bindParam(':id',$id);
        $statement->bindParam(':numero',$numero);
        $statement->bindParam(':tipodoc',$tipodoc);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':apellido',$apellido);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':telefono',$telefono);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':usuario',$usuario);

     if($statement->execute()){
            header('Location:../vista/index_e.php');
        }else{
          header('Location:../vista/add_e.php');
        }
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM empleado WHERE id_Empleado = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_e.php');
        }else{
          header('Location:../vista/delete_e.php');
        }
    }
}


?>