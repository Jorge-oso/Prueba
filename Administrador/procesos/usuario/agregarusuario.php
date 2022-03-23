<?php
require_once "../../clases/DAO.php";

$obj= new Usuario();

$datos=array(
    $_POST['nombres'],
    $_POST['apellidos'],
    $_POST['correo'],
    $_POST['usuario'],
    sha1($_POST['password'])
);

echo $obj->agregarusuario($datos);
?>
