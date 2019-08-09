<?php

include_once '../conexion.php';

$conectarBD = new conectarBD;

$search_cc_nit = $_POST['search-cc_nit'];

$sentencia_buscar = 'SELECT * FROM cliente WHERE cc_nit = ?';

$buscar = $conectarBD -> prepare($sentencia_buscar);

$buscar -> execute(array($search_cc_nit));

$res = $buscar -> fetch();

if(!$res){

    echo json_encode('no existe cliente');
    die();

}
echo json_encode($res);


