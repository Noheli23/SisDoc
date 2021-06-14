<?php
require_once 'models/usuario.php';
class UsuarioModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    //OBTENER POR EL CODIGO Y CONTRASEÑA
    public function getByIdPassword($datos){
        
       $item = new Usuario();
       $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE codigo = :codigo AND contrasena = :contrasena");
       
        try{
            $query->execute(['codigo' => $datos['codigo'], 'contrasena' => $datos['contrasena']]);
            while($row = $query->fetch()){
                $item->nombre = $row['nombre'];
                $item->apellidos = $row['apellidos'];
                $item->rol = $row['rol'];
                $item->correo_ins = $row['correo_ins'];
                $item->estado = $row['estado'];
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
    }
    public function registrarUsuario($datos){

    }

  
    
}

?>