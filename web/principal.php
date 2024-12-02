<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../logo/favicon-copia.png" type="image/x-icon">
  <title>Gestion Usuarios</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/principal.css">
  <script src="../JS/plantilla.js"></script>
  <link rel="stylesheet" href="../CSS/principal.css">
  <style>
    html {
      height: 100%;
    }

    
  </style>
</head>

<body class="position-relative vh-100">

  <style>
    footer {
      background-color: rgb(87, 59, 42);
      color: rgb(249, 246, 237);
      text-align: center;
      padding: 10px 0;
      width: 100%;
      /* position: fixed; */
      bottom: 0;
    }
  </style>

  <!-- Navbar -->
  <?php include("footer-header/header.php"); ?>

  <!-- Contenido principal-->

  <main class="d-flex justify-content-center">
    <div class="card ">
      <div class="card-header d-flex justify-content-center">

      </div>
      <!-- MOSTRAR USUARIOS -->
      <div class="d-flex justify-content-center text-white fw-bold pb-0">
        <h3 class="justify-self-center fw-bold">USUARIOS</h3>

      </div>
      <div style="width:92%" class="d-flex justify-content-end mb-3">
        <button type="submit" action="" class="btn btn-success" method="POST">
          <a href="../CONEX_BBDD/CRUD/CRUD_usuarios/crud_agregar_usuario.php" style="color: white; text-decoration: none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-1" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
            Agregar Usuario
          </a>
        </button>
      </div>


      <div class="d-flex card-body">
        <div class="container-libros d-flex ">
          <div class="d-flex ms-3 me-3 w-100">
            <?php include '../CONEX_BBDD/bib_mostrarDatosPrincipal.php'; ?>
            <?php if (!empty($datos)) : ?>
              <table class=" table table-striped table-hover mt-1" style="width:100%">
                <thead class="">
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th colspan="1" style="width:20%">Acciones</th>
                  </tr>
                </thead>
                <tbody class="">
                  <?php foreach ($datos as $dato) : ?>
                    <tr>
                      <td><?php echo $dato["id"]; ?></td>
                      <td><?php echo $dato["nombre"]; ?></td>
                      <td><?php echo $dato["email"]; ?></td>
                      <td><?php echo $dato["admin"]; ?></td>
                      <!-- Aqui debe ir el editar y eliminar usuario -->
                      <td colspan="2">
                        <button class="btn btn-info text-white ms-0"><a style="text-decoration: none; color: white" href="/biblioteca/CONEX_BBDD/CRUD/CRUD_usuarios/crud_editar_usuario.php?id=<?= $dato["id"] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen me-1" viewBox="0 0 16 16">
                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                            </svg>
                            Editar
                          </a></button>
                        <button class="btn btn-danger text-white"><a onclick="return confirm('¿Seguro? Esta acción es irreversible.')" style="text-decoration: none; color: white" href="/biblioteca/CONEX_BBDD/CRUD/CRUD_usuarios/crud_eliminar_usuario.php?id=<?= $dato["id"] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill me-1" viewBox="0 0 16 16">
                              <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z" />
                            </svg>
                            Eliminar
                          </a></button>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>

              </table>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>








  <!-- Contenido principal-->
  <!-- Footer -->
  <?php include("footer-header/footer_din.php"); ?>