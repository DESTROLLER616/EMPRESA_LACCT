<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LACT</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./Vendor/CSS/Estilo.css" rel="stylesheet" />
    </head>
    <body id="page-top" background="./Imagenes/F1.jpg">
        <!-- Navig0ation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3"  id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../Frontend/inicio.php">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0"> 
                        <li class="nav-item"><a class="nav-link" href="../Frontend/Vistas/Cliente/index.php">Registro para Cliente</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Frontend/Vistas/productos/publico/Lacteos_Productos.html">Productos</a></li>
                        <?php
                            if(isset($_SESSION)){
                                if($_SESSION['tipo'] == 'CONDUCTOR'){
                        ?>
                            <li class="nav-item"><a class="nav-link" href="./Vistas/Conductor/publico/edit.php?edit&id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['email'] ?></a></li>

                        <?php
                                } else if($_SESSION['tipo'] == 'CLIENTE'){
                        ?>
                            <li class="nav-item"><a class="nav-link" href="./Vistas/clientes/publico/edit.php?edit&id=<?php echo $_SESSION['id'] ?>">$<?php echo $$_SESSION['email'] ?></a></li>
                        
                            <?php
                                } else if($_SESSION['tipo'] == 'ADMIN'){
                            ?>
                            <li class="nav-item"><a class="nav-link" href="./Vistas/clientes/publico/edit.php"><?php echo $_SESSION['email'] ?></a></li>

                            <?php
                                }else{
                            ?>

<li class="nav-item"><a class="nav-link" href="./Vistas/Login/Login.php">Iniciar sesion</a></li>
                        <?php
                                
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">
                            LACT mas que una empresa de lacteos
                        </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">LACT fue una empresada fundada desde 1980 que fue creciendo con el pasar del tiempo 
                            hasta ser una de las principales empresas de exportacion de lacteos en el estado de Jalisco caracterizado por la 
                            calidad y el precio de nuestros productos.
                        </p>
                        <center><img src="../Frontend/Imagenes/fondos/vaquita.png" alt="" height="140" width="200"></center>
                        <footer>
                            <center><h6 style="font-size: 10px;">® Copyright Empresa de Lacteos LAACT  SA de CV. Todos los derechos reservados</h6></center>
                            <center><h6 style="font-size: 10px;">Telefono: 3355489625</h6></center>
                            <center><h6 style="font-size: 10px;">Ubicados en Anillo Perif. Norte Jose 
                                 Gómez Sanchez 5777, Santa Carina María Tequepexpan, 785846 San Pedri Tlaquepaque, Jal.</h6></center>
                            <center><address><h6 style="font-size: 10px;">Email: lact@gmail.com</h6></address></center>
                        </footer>
                    </div>
                </div>  
            </div>
        </header>
       