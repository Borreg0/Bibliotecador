<?php session_start();?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
    <title>Nosotros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../CSS/nosotros.css">
    <script src="../JS/plantilla.js"></script>

</head>

<body style="background-color: rgb(249,246,237); color: rgb(197,208,210); 
    background-image: url('../IMAGENES/272216.jpg'); 
    background-repeat: repeat; 
    background-size: cover; ">


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

    <!-- Navbar -->
    <?php include("footer-header/header.php"); ?>

    <!-- Navbar -->
    <!-- Contenido principal-->

    <main class="d-flex justify-content-center">
        <div class="card">

            <div class="d-flex card-body">
                <div class="d-flex container-libros">
                    <div class="d-flex ">
                        
                        <div class="mb-md-2 mt-md-0 justify-content-center">

                            <h2 class="fw-bold mb-2 text-uppercase justify-content-center" style="color: rgb(249,246,237); ">Nosotros</h2>
                            <p class=" mb-md-4 "style="color: rgb(249,246,237); ">Una breve FAQ para quien lo necesite</p>
                            <div class="preguntas align-self-center">
                                <div class="fw-bold mb-2 text-uppercase text-black">
                                    <h3>1. ¿Quiénes somos?</h3>
                                    <p class=" mb-md-4">No hay un quiénes sino un quién, mi nombre es Javier, y soy el único autor
                                        de la página, para bien o para mal.
                                    </p>
                                </div><br>
                                <div class="fw-bold mb-2 text-uppercase text-black">
                                    <h3>2. ¿Qué es el Bibliotecador?</h3>
                                    <p class=" mb-md-4">Las bibliotecas ya no son solo físicas, ya no ocupan estanterias o paredes enteras,
                                        ahora también ocupan gigabites e incluso terabites, por lo que el bibliotecador es una aplicación web donde el
                                        usuario puede llevar un inventario de los libros que tiene en su biblioteca, física o digital, desde un único lugar
                                        de manera visual y de fácil acceso.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Contenido principal-->
    <!-- Footer -->

    <?php include 'footer-header/footer.php'; ?>