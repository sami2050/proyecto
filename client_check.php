<?php
    session_start();


    if(! isset($_SESSION['admin'] ) ){
        header('location:login.html');
    }

    
    include 'server/conexion.php';

    $conexionBD = new conectarBD();

    $mostrar = 'SELECT * FROM cliente';

    $sentencia_mostrar = $conexionBD -> prepare($mostrar);
    $sentencia_mostrar -> execute();

    $res = $sentencia_mostrar -> fetchAll();

    //cerrar conexion
    $sentencia_mostrar = null;
    $mbd = null;

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container sectionS">
    <a href="client.php" class="btn">Atras</a>
    <table>
                        <thead>
                            <tr>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Sede</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Ciudad</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php  foreach($res as $data):  ?>
                            <tr>
                                <td><?php echo $data['cc_nit'] ?></td>
                                <td><?php echo $data['nombre'] ?></td>
                                <td><?php echo $data['apellido'] ?></td>
                                <td><?php echo $data['sede'] ?></td>
                                <td><?php echo $data['telefono'] ?></td>
                                <td><?php echo $data['direccion'] ?></td>
                                <td><?php echo $data['ciudad'] ?></td>
                                <td><?php echo $data['correo'] ?></td>
                                <td>
                                    <a href="server/client/deleteClient.php?usuario_id=<?php echo $data['cc_nit'] ?>" > 
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
    </div>
</body>
</html>