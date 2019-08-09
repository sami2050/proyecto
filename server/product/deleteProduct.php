<?php

    require_once '../conexion.php';
    $conexion = new conectarBD();

    $codigo_producto = $_POST['codigo_update'];
    $nombre_producto = $_POST['nombre_update'];
    $valor_producto = $_POST['valor_update'];


    $sentencia = 'UPDATE producto SET nombre_producto =?, valor_unitario = ? WHERE  codigo_producto = ? ';

    $update = $conexion -> prepare($sentencia);

    $update -> execute(array($nombre_producto,$valor_producto,$codigo_producto));

    header('location:../../product.php');
