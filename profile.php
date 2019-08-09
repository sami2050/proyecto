<?php
    session_start();


    if(! isset($_SESSION['admin'] ) ){
        header('location:login.html');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,600,700|Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/profile.css">    
    <title>Perfil</title>
</head>
<body>
    
    <h1 class="title">Galeria Era De Bronce</h1>

    <div class="container">
        <h2>Perfil de Usuario</h2>
        <i class="fas fa-user-circle icon"></i>
        <p>Nombre: <?php $_SESSION['admin'] ?></p>

        <a href="client.php">Informacion Cliente</a>
        <a href="bill.html">Informacion Facturas</a>
        <a href="product.html">Informacion Producto</a>
        <a href="check.php">Nuevo Usuario</a>

        <a href="server/closed.php" class="close">Cerrar Sesión</a>
    </div>

</body>
</html>