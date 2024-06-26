<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo TITLE. ' - ' . $data['title']; ?></title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-57x57.png'; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-60x60.png'; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-72x72.png'; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-76x76.png'; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-114x114.png'; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-120x120.png'; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-120x120.png'; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-144x144.png'; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL . 'assets/favicon/apple-icon-180x180.png'; ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo BASE_URL . 'assets/favicon/android-icon-192x192.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL . 'assets/favicon/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL . 'assets/favicon/favicon-96x96.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL . 'assets/favicon/favicon-16x16.png'; ?>">
    <link rel="manifest" href="<?php echo BASE_URL . 'assets/favicon/manifest.json' ;?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL . 'assets/favicon/ms-icon-144x144.png'; ?>">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo BASE_URL . 'assets/img/apple-icon.png'; ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'assets/img/favicon.ico' ;?>">

    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/templatemo.css';?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/custom.css';?>">
    
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/fontawesome.min.css">

        <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick-theme.css';?>">

</head>

<body> 

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="<?php echo BASE_URL?>">
                <?php echo TITLE?>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL?>"><b>Inicio</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/shop' ?>"><b>Tienda</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/about' ?>"><b>Nosotros</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . 'principal/contactos' ?>"><b>Contactos</b></a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>

                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>

                    <a class="nav-icon position-relative text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#carrito">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                    </a>
        
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-user mr-3"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#login">Iniciar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal Buscar-->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal Carrito-->
    <div class="modal fade " id="carrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #1666cf;">Carrito</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="background: transparent; border:none;">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Comprar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal login /   registro-->
    <div class="modal fade " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog templatema" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center" id="exampleModalLabel" style="color: #1666cf;"><?php echo TITLE?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="background: transparent; border:none; font-size: 30px;">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="templatema">
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"><b>Iniciar sesión</b></label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><b>Registro</b></label>
                    
                    <div class="login-form">
                        <form action="IniciarSesion.php" method="POST">
                        <div class="sign-in-htm">
                            <div class="group" style="margin-top: 15px;">
                                <label for="user" class="label">Nombre de usuario</label>
                                <input id="user" type="text" name="Usuario" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contraseña</label>
                                <input id="pass" type="text" name="Conraseña" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Iniciar sesión">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="" style="text-decoration: none; color:white;">Recordar contraseña</a>
                            </div>
                        </div>
                        </form>


                        <div class="sign-up-htm">

                            <div class="group">
                                <label for="user" class="label">Nombre de Usuario</label>
                                <input id="user" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Correo</label>
                                <input id="pass" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Contraseña</label>
                                <input id="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repetir Contraseña</label>
                                <input id="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Registrarse">
                            </div>
                            <div class="foot-lnk">
                                <label for="tab-1">Ya tengo un usuario</a>
                            </div>                    
                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
  