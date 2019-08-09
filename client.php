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
    <title>Clientes</title>
    <link rel="icon" href="img/log2.png">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,600,700|Roboto:300,400,500,700" rel="stylesheet">
    <!-- end fonts -->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/client.css">
</head>
<body>
    <!-- header -->
    <header class="header">
    <i class="fas fa-align-justify burger-button" id="button"></i>
        <nav class="menu" id="menu">
            <ul class="menu-list">
                <li>
                    <a href="">Facturas</a>

                    <ul class="sub-menu">

                    <li><a href="">Nuevoa factura</a></li>

                    <li><a href="">Ver factura</a></li>

                    <li><a href="">Modificar factura</a></li>

                    <li><a href="">Eliminar factura</a></li>


                    </ul>

                </li>
                <li>
                    <a href="">Clientes</a>

                    <ul class="sub-menu">

                        <li><a href="">Nuevo cliente</a></li>

                        <li><a href="client_check.php">Ver Clientes</a></li>

                        <li><a href="">Modificar cliente</a></li>

                        <li><a href="">Eliminar cliente</a></li>


                    </ul>

                </li>

                <li>
                    <a href="">Productos</a>

                    <ul class="sub-menu">

                        <li><a href="">Nuevo Producto</a></li>

                        <li><a href="">Ver Productos</a></li>

                        <li><a href="">Modificar Producto</a></li>

                        <li><a href="">Eliminar Producto</a></li>


                    </ul>

                </li>

                <li>
                    <a href="profile.php">Perfil</a>

                    <ul class="sub-menu">
                        <li>
                            <a href="server/closed.php">salir</a>
                        </li>
                    </ul>

                </li>

            </ul>
        </nav>
    </header>
    <!-- header end -->

    <!-- records -->
    <section class="records">
                <h1 class="title">Registro Clientes</h1>
            <div class="container">
                <figure class="logo">
                    <img src="img/log2.png" alt="logo">
                </figure>
        </div>

    </section>
    <!-- records end -->

    <!-- create -->
    <section class="create">
        <h2>Agregar Cliente</h2>

        <form  method="POST" action="server/client/insertClient.php">

            <div class="create-container">
                    <div class="u-box">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" required class="u-input">                
                        </div>
                
                        <div class="u-box">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="apellido" required class="u-input">
                        </div>
                
                        <div class="u-box">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" required class="u-input">
                        </div>
                
                        <div class="u-box">
                            <label for="telefono">Telefono</label>
                            <input type="number" name="telefono" required class="u-input">
                        </div>

                        <div class="u-box">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" required class="u-input">
                        </div>
                
                        <div class="u-box">
                            <!-- <label for="sede">Sede</label>
                            <input type="text" name="sede"> -->
                            <select name="sede" required class="u-input">
                                <option value="1">Sede 1</option>
                                <option value="2">Sede 2</option>
                                <option value="3">Sede 3</option>
                                <option value="4">Sede 4</option>
                            </select>
                        </div>
            
                        <div class="u-box">
                                <label for="cc_nit">Cedula</label>
                                <input type="text" name="cc_nit" required class="u-input">
                        </div>
                        <div class="u-box">
                                <label for="cuidad">Ciudad</label>
                                <input type="text" name="ciudad" required class="u-input">
                        </div>
            
            </div>
            
            <div class="buttom">
                <button type="submit" >Agregar</button>
            </div>
        </form>    

    </section>
    <!-- create end -->

    <!-- search -->
    <section class="search">
        <h2 class="search-title">Buscar</h2>
        <p>Por Cedula</p>
        <article >

            <form class="search-container" id="search" method="POST" action="server/client/searchClient.php">

                <div class="">
                    <label for="search-cc_nit">Cedula</label>
                    <input type="number" name="search-cc_nit" placeholder="Ingrese Cedula" required class="u-input">
                </div>
                <div id="mesenger">

                </div>
                <div class="buttom">
                    <button type="submit" id="btn-search">Buscar</button>
                </div>
            </form>

        </article>

    </section>
    <!-- search end -->

    <!--delete-->
    <section class="delete">
        <h2 class="delete-title">Eliminar</h2>
        <article>

            <form class="delete-container" id="delete" method="POST" action="server/client/deleteClient.php">

                <div class="">
                    <label for="delete-cc_nit">Cedula</label>
                    <input type="number" name="delete-cc_nit" placeholder="Ingrese Cedula" required class="u-input">
                </div>
                <div id="mesenger-delete">

                </div>
                <div class="buttom">
                    <button type="submit" id="btn-delete">Eliminar</button>
                </div>
            </form>

        </article>

    </section>
    <!--delete end-->

    <!-- moificar -->

    <section class="update">
        <form id="form-update" action="server/client/update.php" method="POST">
        
            <h2>Modificar</h2>

            <p>Cedula del cliente:</p>

            <input type="text" require class="u-input" name="cedula_update">

            <div class="buttom">
                <button id="btn-update" type="button" >Modificar</button>
            </div>

            <div class="update-container" id="update-container">
            
                <div class="update-container-box">            
                    <label for="name_update">Nombre</label>
                    <input type="text" name="name_update" class="u-input">
                </div>

                <div class="update-container-box">            
                    <label for="apellido_update">Apellido</label>
                    <input type="text" name="apellido_update" class="u-input">
                </div>

                <div class="update-container-box">            
                    <label for="direccion_update">Dirección</label>
                    <input type="text" name="direccion_update" class="u-input">
                </div>

                <div class="update-container-box">            
                    <label for="telefono_update">Telefono</label>
                    <input type="text" name="telefono_update" class="u-input">
                </div>

                <div class="update-container-box">            
                    <label for="correo_update">Correo</label>
                    <input type="text" name="correo_update" class="u-input">
                </div>

                <div class="update-container-box">
                                <!-- <label for="sede">Sede</label>
                                <input type="text" name="sede"> -->
                            <select name="sede" required class="u-input">
                                <option value="1">Sede 1</option>
                                <option value="2">Sede 2</option>
                                <option value="3">Sede 3</option>
                                <option value="4">Sede 4</option>
                            </select>
                </div>

                <div class="update-container-box">            
                    <label for="ciudad_update">Ciudad</label>
                    <input type="text" name="ciudad_update" class="u-input">
                </div>

            </div>
            
            <div class="buttom">
                <button type="submit">Enviar</button>
            </div>

        </form>
    
    
    </section>

    <script src="js/update.js"></script>
    <script src="js/header.js"></script>
    <script src="js/search.js"></script>
</body>
</html>