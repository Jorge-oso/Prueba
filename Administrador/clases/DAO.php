<?php
require_once "../../../config/db.php";

class Usuario extends Conexion{
    
    public function login($usuario,$password){
        $conectar = Conexion::conectar();
        $query=$conectar->prepare("SELECT count(*) as existeUsuario FROM entity.usuariodoc WHERE usuario=:u AND password=:c");
        $query->bindParam(":u", $usuario);
        $query->bindParam(":c", $password);
        $query->execute();
        $respuesta=$query->rowCount();

        if($respuesta > 0){
            $_SESSION['user']=$usuario;
            $query=$conectar->prepare("SELECT * FROM entity.usuariodoc WHERE usuario=:u AND password=:c");
            $query->bindParam(":u", $usuario);
            $query->bindParam(":c", $password);
            $query->execute();
            $respuesta=$query->rowCount();
            return 1;
        }else{
            return 0;
        }
    }

    public function agregarusuario($datos){
        $conectar = Conexion::conectar();
        $query=$conectar->prepare("INSERT INTO entity.usuariodoc(nombres,apellidos,correo,usuario,password) 
        values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')");
        $query->execute();
    }
}
?>
    