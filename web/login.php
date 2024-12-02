<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
    <title>Iniciar sesión</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="../JS/login.js" type="text/javascript"></script>

</head>

<body style="background-color: rgb(249,246,237); color: rgb(197,208,210);
background-image: url('../IMAGENES/2862177-2111344518.jpg');
background-repeat: repeat;
background-size: cover;">

    <style>
        footer {
            background-color: rgb(87, 59, 42);
            color: rgb(249, 246, 237);
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>

    <?php include("footer-header/header.php");?>


    <!-- Navbar -->
    <!-- Contenido principal -->
    <div class="container-principal">
        <section class="gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center h-100 ">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white "
                            style="background-color: rgba(87,59,42, .45); border-radius: 1rem;">
                            <div class="card-body p-5 text-center"
                                style="background-color: rgba(87,59,42, .45);border-radius: 1rem;">

                                <!-- Inicio de sesion -->
                                <div class="mb-md-2 mt-md-0">

                                    <h2 class="fw-bold mb-2 text-uppercase" style="color: rgb(249,246,237); ">Inicio de
                                        sesión</h2>
                                    <p class="text-white-50 mb-md-4 ">Introduce tu nombre de usuario y contraseña</p>
                                    <!--Formulario empieza: enlazar php-->
                                    <form id="formulario" action="../CONEX_BBDD/bib_login.php" method="post">
                                        <div data-mdb-input-init class="form-outline form-white mb-4">
                                            <!--Email-->
                                            <input type="email" id="typeEmailX" name="email" placeholder="Email"
                                                class="form-control form-control-lg" required />
                                        </div>

                                        <div data-mdb-input-init class="form-outline form-white mb-4"
                                            style="color: rgb(249,246,237); ">
                                            <!--Contraseña-->
                                            <input type="password" name="password" placeholder="Contraseña" id="password"
                                                class="form-control form-control-lg" required />
                                        </div>

                                        

                                        <button data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-outline-light btn-lg px-5" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 2 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                            </svg>
                                            Entrar

                                        </button>
                                    </form>
                                    <!--Formulario Termina: enlazar php-->
                                </div>

                                <!-- Registro -->
                                <div class="">
                                    <p class="mb-0 pt-3" style="background-color: rgba(87,59,42, .0)">¿Aún no tienes
                                        cuenta? <a href="registro.php" class="text-white-50">Regístrate</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php include 'footer-header/footer.php'; ?>
    