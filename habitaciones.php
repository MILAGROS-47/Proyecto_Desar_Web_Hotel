<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel.com</title>
        <link rel="icon" type="image/png" href="imagenes/cine.png">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body style="margin: 0">
        <header class="container-fluid bg-primary d-flex justify-content-center">
            <p class="text-light mb-0 p-3 fs-6"><em>"Descubre la magia de la hospitalidad"</em></p>
        </header>

        <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <span class="fs-5 text-primary fw-bold">Hotel Imperial</span>
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
                    <form class="d-flex">
                        <button class="btn btn-primary btn-primary-outline-success" type="button">Registrate</button>
                    </form>
                </div>

            </div>
        </nav>


        <div style="padding: 30px;">
            <h2>Todas las habitaciones</h2>
            <?php
            $objcon = new Conectarse();
            $consulta = "select * from tb_habitacion;";
            $res = $objcon->conectar()->query($consulta);
            while ($row = $res->fetch()) {
                ?>
                <div class="habitacion" style="text-align: left;font-family:  sans-serif; color: darkgrey; margin-bottom: 20px;
                     display:inline-block;width: 400px;margin: auto;" class="">
                    <div class="">
                        <img src="<?= $row[3] ?>" height="250px" width="100%"/>
                    </div>
                    <div class="">
                        <div class="" style="font-weight: bold;color: black;"><?= $row[4] ?></div>
                    </div>
                    <span class="" style="color: black;">---------</span>
                    <div class="">
                        <span class="" style="font-weight: bold; color: black;">S/&nbsp;<?= $row[6] ?></span>
                    </div>
                    <div class="">
                        <div aria-label="Valoración: fabuloso" class="" style="background-color: blue; color: white;width:30px;text-align: center;border-radius: 25% 25% 25% 0%;padding: 5px 2px;"><?= $row[8] ?></div>
                        <span class="">&nbsp;·&nbsp;<?= $row[9] ?> comentarios</span>
                    </div>
                    <a href="informacion.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver Mas</a>
                </div>
            <?php } ?>
        </div>
        <?php include("../html/mas.html"); ?>
    </body>
</html>
