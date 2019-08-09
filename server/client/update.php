<?php

    require_once '../conexion.php';
    $conexionBD = new conectarBD();

    $cedula = $_POST['cedula_update'];
    $nombreUpdate = $_POST['name_update'];
    $apellidoUpdate = $_POST['apellido_update'];
    $direccionUpdate = $_POST['direccion_update'];
    $telefonoUpdate = $_POST['telefono_update'];
    $correoUpdate = $_POST['correo_update'];
    $sedeUpdate = $_POST['sede'];
    $ciudadUpdate = $_POST['ciudad_update'];

    $sentencia = 'UPDATE cliente SET nombre = ?, apellido =?, sede = ?, telefono =?, direccion =?, ciudad =?, correo =? WHERE cc_nit = ?';

    $update = $conexionBD -> prepare($sentencia);

    $update -> execute(array($nombreUpdate,$apellidoUpdate,$sedeUpdate,$telefonoUpdate,$direccionUpdate,$ciudadUpdate,$correoUpdate,$cedula));