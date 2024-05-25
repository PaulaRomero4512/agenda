<?php
require_once('../conexion.php');
class clientes extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function add($numero,$tipodoc,$nombre,$apellido,$direccion,$telefono,$estado,$usuario){
        $statement = $this->db->prepare ("INSERT INTO cliente (numDoc_Cliente, tipodoc_Cliente, nombre_Cliente, apellido_Cliente, direccion_Cliente, tel_Cliente, estado_Cliente, id_UsuarioFK) VALUES (:numero,:tipodoc,:nombre,:apellido,:direccion,:telefono,:estado,:usuario)");
        $statement->bindParam(':numero',$numero);
        $statement->bindParam(':tipodoc',$tipodoc);
        $statement->bindParam(':nombre',$nombre);
        $statement->bindParam(':apellido',$apellido);
        $statement->bindParam(':direccion',$direccion);
        $statement->bindParam(':telefono',$telefono);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':usuario',$usuario);

     if($statement->execute()){
            header('Location:../vista/index_cl.php');
        }else{
          header('Location:../vista/add_cl.php');
        }
    }
    public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT * FROM cliente inner join usuario on id_Usuario=id_UsuarioFK");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM cliente WHERE id_Cliente = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id, $numero,$tipodoc,$nombre,$apellido,$direccion,$telefono,$estado,$usuario){
        $statement = $this->db->prepare ("UPDATE cliente  SET numDoc_Cliente = :numero, tipodoc_Cliente = :tipodoc, nombre_Cliente = :nombre, apellido_Cliente = :apellido, direccion_Cliente = :direccion, tel_Cliente = :telefono, estado_Cliente = :estado, id_UsuarioFK = :usuario WHERE id_Cliente = :id"); 
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
            header('Location:../vista/index_cl.php');
        }else{
          header('Location:../vista/add_cl.php');
        }
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM cliente WHERE id_Cliente = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_cl.php');
        }else{
          header('Location:../vista/delete_cl.php');
        }
    }
}


?>