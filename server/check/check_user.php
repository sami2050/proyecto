<?php

include_once '../conexion.php';
$conexionBD = new conectarBD();


//capturar datos post
$usuario_nuevo = $_POST['name-user'];
$email_nuevo = $_POST['email-user'];
$pass_nuevo = $_POST['pass-user'];
$pass2_nuevo = $_POST['pass2-user'];

//verificacion de usuario existente
$sql = 'SELECT * FROM usuario WHERE usuario = ?';

$sentencia = $conexionBD -> prepare($sql);
$sentencia -> execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

if($resultado){
    echo 'existe este usuario';
    die();
}

//verificar contraseñas
if ($pass_nuevo === $pass2_nuevo) {
    //echo '¡La contraseña es válida!';

    //agregar a la base de datos
    $sentencia_user = 'INSERT INTO usuario (usuario,pass,correo) VALUES (?,?,?)';

    $agregar_user = $conexionBD -> prepare($sentencia_user);

    if( $agregar_user -> execute(array($usuario_nuevo,$pass2_nuevo,$email_nuevo)) ) {

        header('location:../../check.html');

    }else{
        echo 'error';
    }
    //cerrar conexion
    $mbd = null;
    $agregar_user = null;
    

} else {
    echo 'La contraseña no es válida.';
}


