<?php
    session_start();
    require_once "../../clases/DAO.php";

    $usuario=$_POST['login'];
    $password=$_POST['password'];

    $usuarioobj= new Usuario();
    echo $usuarioobj->login($usuario,$password);
?>