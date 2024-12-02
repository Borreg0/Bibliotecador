<?php session_start();?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
    <title>Contacto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="../CSS/contacto.css">
    <script src="../JS/"></script>

</head>

<body style="background-color: rgb(249,246,237); color: rgb(197,208,210); 
background-image: url('../IMAGENES/271420-266528160.jpg'); 
background-repeat: repeat; 
background-size: cover; ">

    <?php include 'footer-header/header.php'; ?>


    <div class="container_principal">
        <div class="container-principal">
            <section class="gradient-custom">
                <div class="container py-5">
                    <div class="row d-flex justify-content-center align-items-center h-100 ">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card text-white "
                                style="background-color: rgba(87,59,42, .55); border-radius: 1rem;">
                                <div class="card-body p-5 text-center"
                                    style="background-color: rgba(87,59,42, .45);border-radius: 1rem;">

                                    <!-- Inicio de sesion -->
                                    <div class="mb-md-2 mt-md-0">

                                        <h2 class="fw-bold mb-2 text-uppercase" style="color: rgb(249,246,237); ">
                                            Contacto</h2>
                                        <p class="subtexto mb-md-4 ">¿Sugerencias, nuevas ideas, consejos o
                                            agradecimientos?</p>
                                        <!--Formulario empieza: enlazar php-->
                                        <form action="" method="post">
                                            <div data-mdb-input-init class="form-outline form-white mb-4">

                                                <input type="email" id="typeEmailX" placeholder="Tu email"
                                                    class="form-control form-control-lg" required />
                                            </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-3 textarea_div"
                                                style="color: rgb(249,246,237); ">
                                                <textarea class="ps-3" name="textarea" id="textarea"
                                                    placeholder="Deja tu mensaje aquí " cols="30" rows="5"
                                                    style="border-radius: 10px; width: 370px" required></textarea><br>


                                                <p class="mt-2">Limpiar campos &nbsp;<button data-mdb-button-init
                                                        data-mdb-ripple-init
                                                        style="height: 1.5em; padding-top: 0%; padding-bottom: 0%;"
                                                        class="btn btn-close bg-white" type="reset"></button></p>
                                            </div>


                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-outline-light btn-lg px-5" type="submit">Enviar</button>
                                        </form>
                                        <!--Formulario Termina: enlazar php-->
                                    </div>

                                    <!-- Registro -->
                                    <div class="">
                                        <p class="mb-0 pt-3" style="background-color: rgba(87,59,42, .0);"><a
                                                href="login.php" class="text-white-50 fw-bold">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-box-arrow-in-left"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                                                </svg>
                                                Volver al menú principal
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!-- Footer -->
    <?php include 'footer-header/footer.php'; ?>