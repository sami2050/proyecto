<?php

    include '../conexion.php';

    $conexion = new conectarBD();

    $codigo = $_POST['codigo_producto'];
    $nombre = $_POST['nombre_producto'];
    $valor_unitario = $_POST['valor_unitario_producto'];

    $sql_insert = 'INSERT INTO producto(codigo_producto,nombre_producto,valor_unitario) VAlUES(?,?,?)';

    $insert = $conexion -> prepare($sql_insert);

    $insert -> execute(array($codigo,$nombre,$valor_unitario));

    header('location:../../product.html');