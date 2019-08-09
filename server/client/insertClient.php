<?php
    include '../conexion.php';
    $conexionBD = new conectarBD();

    if($_POST){

        $idCliente = $_POST['cc_nit'];
        $nombreCliente = $_POST['nombre'];
        $apellidoCliente = $_POST['apellido'];
        $direccionCliente = $_POST['direccion'];
        $telefonoCliente = $_POST['telefono'];
        $sedeCliente = $_POST['sede'];
        $correoCliente = $_POST['correo'];
        $ciudad_cliente = $_POST['ciudad'];

        $sentencia_agregar = 'INSERT INTO cliente (cc_nit,nombre,apellido,sede,telefono,direccion,ciudad,correo) VALUES (?,?,?,?,?,?,?,?)';

        $agregar = $conexionBD -> prepare($sentencia_agregar);

        $agregar -> execute(array($idCliente,$nombreCliente,$apellidoCliente,$sedeCliente,$telefonoCliente,$direccionCliente,$ciudad_cliente,$correoCliente));

        header('location:../../client.php');

        //cerrar conexion
        $mbd = null;
        $sentencia_agregar = null;
    }


?>