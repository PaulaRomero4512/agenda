<?php
class conexion{
   protected $db;
   private $driver = "mysql";
   private $host = "localhost";
   private $bd = "citas_web";
   private $usuario = 'root';
   private  $contrasena = '';
   public function __construct(){
    try{
    $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usuario, $this->contrasena);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
    }catch (PDOException $e){
        echo "Ha surgido un error al intentar conectarse a la base de datos" .$e->getMessage();
    }
}
} 
?>