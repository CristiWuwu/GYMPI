<?php
  session_start();

  // Verificar si el usuario está logueado
  if (!isset($_SESSION['rol'])) {
      // Si no está logueado, redirigir al inicio de sesión
      header("Location: login.php");
      exit();
  }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gympi: Guía de Gimnasios en Ipiales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style_sr.css" type="text/css">
    <link rel="stylesheet" href="estilos/estilos-Af.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Encabezado -->
    <header class="container-fluid bg-dark header">
        <div class="row h-100"> 
            <div class="col-6 col-md-1 p-0 h-100 d-flex align-items-center justify-content-end">
                <!-- Agrega el logo de la empresa -->
                <a href="principal.html"><img class="img-fluid" src="imagenes/logo.png" alt="Logo Gympi" style="max-height: 86px;"></a>
            </div>
            <div class="col-6 col-md-2 d-flex align-items-center h-100 justify-content-start">
                <!-- Título principal -->
                <h1><a class="text-decoration-none tit_principal" href="principal.html">GYMPI</a></h1>
            </div>
            <!-- Menú de Navegación -->
            <div class="col-12 col-md-9 d-flex justify-content-end align-items-center">
              <a href="EditarPerfil.html" class="text-white me-4">
                <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
            </a>
          </div>
          




    </header>


    <!-- Enlace para cerrar sesión -->
    <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>


    <!-- Contenedor Principal Listar Gimnasios-->
    <main class="container-fluid p-5 main d-flex flex-column align-items-center" style="min-height: 100vh; background-color: #94b6bb;">

        <!-- Título -->
        <h2 class="fw-bold text-center mb-5" style="font-size: 2.5rem;">GIMNASIOS DISPONIBLES</h2>
      
        <!-- Tarjetas de gimnasios -->
        <div class="row justify-content-center g-4 w-100" style="max-width: 1200px;">
          <!-- Tarjeta 1 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="informacion.html" class="text-decoration-none text-dark">
              <div class="card text-center h-100">
                <img src="imagenes/gim1.png" class="card-img-top" alt="Nombre Establecimiento">
                <div class="card-body">
                  <h5 class="card-title fw-bold">Power gym</h5>
                  <p class="card-text text-muted">Descripción</p>
                </div>
              </div>
            </a>
          </div>
          
      
          <!-- Tarjeta 2 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="informacion.html" class="text-decoration-none text-dark">
             <div class="card text-center">
                <img src="imagenes/gim1.png" class="card-img-top" alt="Nombre Establecimiento">
                 <div class="card-body">
                <h5 class="card-title fw-bold">Nombre Establecimiento</h5>
                <p class="card-text text-muted">Descripción</p>
              </div>
            </div>
          </a>
          </div>
      
          <!-- Tarjeta 3 -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="informacion.html" class="text-decoration-none text-dark">
             <div class="card text-center">
                <img src="imagenes/gim1.png" class="card-img-top" alt="Nombre Establecimiento">
                 <div class="card-body">
                <h5 class="card-title fw-bold">Nombre Establecimiento</h5>
                <p class="card-text text-muted">Descripción</p>
              </div>
            </div>
          </div>
        </a>
        </div>
      

    </main>

    <!-- Pie de Página -->
    <footer class="container-fluid p-5 bg-dark">
         <!-- Sección Politica de la Empresa -->
        <div class="row">
            <section class="col-12 col-md-9 pb-3" id="Politicas">
                <ul class="list-unstyled d-flex flex-wrap gap-4 py-2 m-0 justify-content-center justify-content-md-start">
                    <li class="px-md-4"><a class="text-nowrap" href="term_cond.html">Terminos y Condiciones</a></li>
                    <li class="px-md-4"><a class="text-nowrap" href="privacidad.html">Privacidad</a></li>
                    <li class="px-md-4"><a class="text-nowrap" href="acerca.html">Acerca de</a></li>
                </ul>
            </section>

            <!-- Sección Redes Sociales -->
            <section class="col-12 col-md-3" id="Redes_Sociales">
                <ul class="list-unstyled d-flex gap-4 m-0 py-2 justify-content-center">
                    <li><a href="https://www.facebook.com/"><img src="https://cdn-icons-png.flaticon.com/512/20/20673.png" alt="logo_facebook"></a></li>
                    <li><a href="https://www.youtube.com/"><img src="https://cdn.iconscout.com/icon/free/png-256/free-youtube-104-432560.png" alt="logo_youtube" ></a></li>
                    <li><a href="https://www.instagram.com/"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="logo_instagram"></a></li>
                </ul>
            </section>
        </div>  

        <div class="row text-center mt-3 mt-md-5 row-copy">
            <div class="col-12">
                <p class="copy">&copy; 2025 Gympi - Todos los derechos reservados</p>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>