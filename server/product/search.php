<?php

    include '../conexion.php';

    $conexion = new conectarBD();

    $producto = $_POST['codigo_search'];

    $consulta = 'SELECT * FROM producto WHERE codigo_producto = ?';

    $buscar = $conexion ->prepare($consulta);

    $buscar -> execute(array($producto));

    $res = $buscar -> fetch();
    
    if(!$res){
        echo json_encode('no existe producto');
        die();
    }

    echo json_encode($res);