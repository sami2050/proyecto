<?php

include_once '../conexion.php';
$conexionBD = new conectarBD();

$usuario_id = $_POST['delete-cc_nit'];

$eliminar = 'DELETE FROM cliente WHERE cc_nit = ?';

$sentencia_eliminar = $conexionBD -> prepare($eliminar);

$sentencia_eliminar -> execute(array($usuario_id));

header('location:../../client.php');