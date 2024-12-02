

<?php include("../MODELOS/USUARIOS/Usuario.php");?>

<!-- COMIENZA EL REGISTRO -->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
  <script src="../JS/registro.js" type="text/javascript"></script>
  <title>Registro</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="../CSS/registro.css" />
</head>

<body style="
      background-image: url('../IMAGENES/books-old-book-library-wallpaper-preview.jpg');
      background-repeat: repeat;
      background-size: cover;
    ">
  <!-- Navbar -->
  <?php include("footer-header/header.php") ?>

  <!-- Contenido principal -->
  <section class="bg-image">
    <div class="mask d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="
                  border-radius: 15px;
                  background-color: rgba(87, 59, 42, 0.7);
                  color: rgb(197, 208, 210);
                ">
              <div class="card-body p-5" style="
                    background-color: rgba(87, 59, 42, 0.1);
                    border-radius: 15px;
                  ">
                <h2 class="fw-bold text-uppercase text-center mb-3" style="color: rgb(249, 246, 237)">
                  Regístrate
                </h2>

                
                <!--formulario-->
                <form class="flex-fill flex-md-fill" id="formulari" action="../CONEX_BBDD/bib_registro.php" method="POST" style="color: rgb(249, 246, 237)" >
                  <div data-mdb-input-init class="form-outline mb-4">
                    <!-- USERNAME -->
                    <input type="text" placeholder="Nombre de usuario" id="username" name="username" class="form-control form-control-lg" required />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <!-- EMAIL -->
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control form-control-lg" required />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <!-- CONTRASEÑA -->
                    <input type="password" placeholder="Contraseña" id="password" name="password" class="form-control form-control-lg" required />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <!-- CONFIRMAR CONTRASEÑA -->
                    <input type="password" id="passwordConfirmar" placeholder="Confirmar contraseña" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terminos" required />
                    <label class="form-check-label" for="terminos">
                      Acepto todas las condiciones y términos de servicio
                    </label>
                  </div>
    


                  <div class="d-flex justify-content-center">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 1 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                      </svg>
                      Registrarse
                    </button>
                  </div>
                  <p class="text-center mt-4 mb-0">
                    ¿Ya tienes una cuenta?
                    <a href="login.php" class="fw-bold text-body text-white-50"><u>Inicia sesión</u></a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--FOOTER-->

  <?php include("footer-header/footer.php") ?>