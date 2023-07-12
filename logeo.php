<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informacion</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <header class="container-fluid bg-primary d-flex justify-content-center">
            <p class="text-light mb-0 p-3 fs-6"><em>"Descubre la magia de la hospitalidad"</em></p>
        </header>

        <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <span class="fs-5 text-primary fw-bold">Hotel Oasis</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#equipo">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#seccion-contacto">Contactos</a>
                        </li>-->
                    </ul>
                 
                </div>

            </div>
        </nav>

        <div class="container">
        <form action="login.php" method="POST">
            
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating mb-1">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>

            
            <input class="btn btn-primary w-100 py-2" type="submit" value="Iniciar Sesión">
        </form>
    </div>

        <?php include("../html/mas.html"); ?>
    </body>
</html>
