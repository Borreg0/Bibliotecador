    
    
    <link rel="stylesheet" href="/CSS/footer.css">
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-expand-xl  navbar-light mb-4"
            style="background-color: rgb(87,59,42);">
            <div class="container-fluid" style="background-color: rgb(87,59,42);">
                <a class="navbar-brand" style="color: rgb(197,208,210)" href="login.html"><img
                        src="../IMAGENES/logo_recortado.png" alt="logo" style="height: 60px;width: 150px;"></a>
                <button class="navbar-toggler me-1" style="background-color: rgb(197,208,210);" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-expand-md me-1" id="navbarNav">
                    <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: rgb(197,208,210)" aria-current="page" href="login.php">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: rgb(197,208,210)" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: rgb(197,208,210)" href="contacto.php">CONTACTO</a>
                        </li>
                        <li class="nav-item <?=isset( $_SESSION['user']) ? "" : "d-none" ?> ">
                            <a class="nav-link active" style="color: rgb(197,208,210)" href="libros_principal.php">PÁGINA PRINCIPAL</a>
                        </li>
                        <li class="nav-item <?=(isset( $_SESSION['user']) && $_SESSION['user']['admin']==1) ? "" : "d-none" ?> ">
                            <a class="nav-link active" style="color: rgb(197,208,210)" href="principal.php">GESTION USUARIOS</a>
                        </li>
                    </ul>
                </div>
                <?php 
                if (array_key_exists("cerrarSesion", $_POST)) {
                    session_destroy();
                    header("Location: login.php");
                }
                ?>
                <?php if (isset($_SESSION["user"])):?>
                    <?php echo $_SESSION ["user"]['nombre'];?>
                    <form class="" action="" method="post">
                        <button class="btn btn-outline-light btn-rounded ms-3" name="cerrarSesion">
                            Cerrar sesion
                        </button>
                    </form>
                <?php else: ?>
                    <button class="btn btn-outline-light btn-rounded ms-4" >
                            <a style="text-decoration: none; color: white" href="login.php">Iniciar Sesion</a>
                    </button>
                <?php endif;?>
            </div>
        </nav>
    </header>