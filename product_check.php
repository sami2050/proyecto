<?php
    session_start();


    if(! isset($_SESSION['admin'] ) ){
        header('location:login.html');
    }

    require_once 'server/conexion.php';

    $conexion = new conectarBD();

    $leer = 'SELECT * FROM producto';

    $sentencia_agregar = $conexion -> prepare($leer);

    $sentencia_agregar -> execute();

    $response = $sentencia_agregar -> fetchAll();


    //var_dump($response);

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
        <h1>Registro Productos</h1>
    <a href="product.html" class="btn">Atras</a>
    <table>
                        <thead>
                            <tr>
                                <th>ID Producto</th>
                                <th>Nombre</th>
                                <th>valor_unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php  foreach($response as $data):  ?>
                            <tr>
                                <td><?php echo $data['producto_id'] ?></td>
                                <td><?php echo $data['nombre_producto'] ?></td>
                                <td><?php echo $data['valor_unitario'] ?></td>

                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
    </div>
</body>
</html>