<?php
    session_start();

include_once '../conexion.php';

$conexionBD = new conectarBD();

$usuario_login = $_POST['user-login'];
$pass_login = $_POST['pass-login'];

//echo $usuario_login.$pass_login;

//verificacion de usuario existente
$sql = 'SELECT * FROM usuario WHERE usuario = ?';

$sentencia = $conexionBD -> prepare($sql);
$sentencia -> execute(array($usuario_login));
$resultado = $sentencia->fetch();

$pass_login2 = $resultado['pass'];

if(!$resultado){
    //matar la ejecucion
    echo json_encode('no existe usuario');
    die();
}



if( $pass_login === $pass_login2){
    $_SESSION['admin'] = $usuario_login;
    echo json_encode('conectando');
}else{
    echo json_encode('contraseña incorrecta');
    die();
}