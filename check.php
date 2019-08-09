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
    <title>Registrarse</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,600,700|Roboto:300,400,500,700" rel="stylesheet">
    <!-- end fonts -->    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/check.css">
</head>
<body>
    <h1 class="title">Galeria Era De Bronce</h1>
    <form class="check" action="server/check/check_user.php" method="POST">
        <h2>Crear tu cuenta</h2>


        <div class="contienr">
            <div class="u-container-box">
                <label for="user">Nombre de usuario</label>
                <input type="text" name="name-user" required>
            </div>

            <div class="u-container-box">
                <label for="email">E-mail</label>
                <input type="text" name="email-user" required>
            </div>
    
            <div class="u-container-box">
                <label for="password">Contraseña</label>
                <input type="password" name="pass-user" required>
            </div>

            <div class="u-container-box">
                <label for="password">Confirmar Contraseña</label>
                <input type="password" name="pass2-user" required>
            </div>
        </div>
        
        <a href="profile.php" class="">Perfil</a>

        <button type="submit" class="buttom">Registrarse</button>
    </form>

</body>
</html>