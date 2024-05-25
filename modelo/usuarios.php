<?php
require_once('../conexion.php');
session_start();
class usuarios extends conexion{
    public function __construct(){
        $this-> db = parent::__construct();
    }
    public function login($correo,$contrasena){
    $statement = $this->db->prepare ("SELECT * FROM usuario WHERE correo_Usuario = :correo AND password_Usuario = :contrasena");
    $statement->bindParam(':correo',$correo);
    $statement->bindParam(':contrasena',$contrasena);
    $statement->execute();
    if($statement->rowCount() == 1){
    $result = $statement->fetch();
    $_SESSION['correo'] = $result['correo_Usuario'];
    $_SESSION['estado'] = $result['estado_Usuario'];
    $_SESSION['id'] = $result['id_Usuario'];
    $_SESSION['perfil'] = $result['id_RolFK'];
    return true;
    }
    return false;
    }     

    public function getemail(){
       return $_SESSION['correo'];
    }
    public function getid(){
        return $_SESSION['id'];
    }
    public function getperfil(){
        return $_SESSION['perfil'];
    }
    public function Validacionsessionadministrador(){
        if($_SESSION['id'] == null){
        header('location:../index.php');
        }else{
            if($_SESSION['perfil'] == 1){
                header('location:../vista/index_c.php');
            }
            if($_SESSION['perfil'] == 2){
                header('location:vista/index_cl.php');
            }
            if($_SESSION['perfil'] == 3){
                header('location:../vista/index_e.php');
            }
        }
    }
    public function Validacionsession(){
        if($_SESSION['id'] == null){
            header('location:../index.php');
        }
        
     }
public function get(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT id_Cita,fecha_Cita, hora_Cita, estado_Cita,nombre_empleado , nombre_cliente,apellido_Cliente, descripcion_servicio FROM cita inner join empleado on id_Empleado=id_EmpleadoFK inner join servicio on id_Servicio= id_ServicioFK inner join cliente on id_Cliente= id_ClienteFK order by fecha_Cita");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function getuser(){
        $rows = null;
        $statement = $this->db-> prepare("SELECT id_usuario, correo_usuario,password_Usuario, estado_Usuario, descripcion_rol FROM `usuario` inner join rol on id_rol=id_RolFK");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function delete($id){
        $statement = $this->db->prepare("DELETE FROM usuario WHERE id_usuario = :id");
        $statement->bindParam(':id',$id);
        if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/delete_c.php');
        }
    }
    public function getById($id){
        $rows =null;
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario = :id");
        $statement->bindParam(':id',$id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($id,$correo,$contrasena,$estado,$rol){
        $statement = $this->db->prepare ("UPDATE usuario  SET correo_Usuario = :correo, Password_Usuario = :contrasena,estado_Usuario = :estado, id_rolfk = :rol WHERE id_usuario = :id"); 
        $statement->bindParam(':id',$id);
        $statement->bindParam(':contrasena',$contrasena);
        $statement->bindParam(':correo',$correo);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':rol',$rol);
             if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/add_c.php');
        }
    }
    public function add($correo,$contrasena,$estado,$rol){
        $statement = $this->db->prepare ("INSERT INTO usuario (correo_Usuario, Password_Usuario,estado_Usuario,id_rolfk) VALUES (:correo, :contrasena, :estado,:rol)");
        $statement->bindParam(':contrasena',$contrasena);
        $statement->bindParam(':correo',$correo);
        $statement->bindParam(':estado',$estado);
        $statement->bindParam(':rol',$rol);
        if($statement->execute()){
            header('Location:../vista/index_c.php');
        }else{
          header('Location:../vista/add_c.php');
        }
      }

      public function cerrar(){
      
        session_destroy();
        header('Location:../index.php');

      }


}


?>