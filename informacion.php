<!DOCTYPE html>
<?php
include("conexion.php");
$habitacion = 1;
$numero = null;
if (isset($_GET["id"])) {
    $habitacion = $_GET["id"];
    $objcon = new Conectarse();
    $consulta = "select * from tb_habitacion where idHabitacion = '$habitacion';";
    $res = $objcon->conectar()->query($consulta);
    while ($row = $res->fetch()) {
        $numero = $row[5];
    }
    if ($numero == null) {
        header("location: index.php");
    }
} else {
    header("location: index.php");
}
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
                    <span class="fs-5 text-primary fw-bold">Hotel Imperial</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-primary btn-primary-outline-success" type="button">Registrate</button>
                    </form>
                </div>

            </div>
        </nav>

        <div style="padding: 30px;">
            <?php
            $objcon = new Conectarse();
            $consulta = "select * from tb_habitacion where idHabitacion = '$habitacion';";
            $res = $objcon->conectar()->query($consulta);
            while ($row = $res->fetch()) {
                ?>
                <h2>Habitacion <?= $row[0] ?></h2>
                <div  class="">
                    <table style="width: 100%;">
                        <tr>
                            <td rowspan="5">
                                <img src="<?= $row[3] ?>"  width="500px"/>
                            </td>
                            <td>Descripcion:</td>
                            <td style="width: 30%; padding: 20px;">
                                <div class="" style="font-weight: bold;color: black;"><?= $row[4] ?></div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Descuento:</td>
                            <td style="padding: 20px;">
                                <?php
                                $objcon2 = new Conectarse();
                                $consulta2 = "select porcentaje,dias from tb_descuento where idDescuento = '$row[1]';";
                                $res2 = $objcon2->conectar()->query($consulta2);
                                while ($row2 = $res2->fetch()) {
                                    ?>
                                    <span class="" style="color: black;"> &nbsp;<?= $row2[0]*100 ?>% por <?= $row2[1]?> Dias</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td style="padding: 20px;">
                                <div class="">
                                    <span class="" style="font-weight: bold; color: black;">S/&nbsp;<?= $row[6] ?></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Valoracion:</td>
                            <td style="padding: 20px;">
                                <div class="">
                                    <span aria-label="Valoración: fabuloso" class="" style="background-color: blue; color: white;width:30px;text-align: center;border-radius: 25% 25% 25% 0%;padding: 5px 2px;"><?= $row[8] ?></span>
                                    <span class="">&nbsp;·&nbsp;<?= $row[9] ?> comentarios</span>
                                </div>
                            </td>
                            <td style="width: 20%">
                                <a href="../php/p_reserva.php?id=<?= $row[0] ?>" class="btn btn-primary">ir aReservar</a>
                            </td>
                        </tr>
                    </table>

                </div>
            <?php } ?>
        </div>

        <?php include("../html/mas.html"); ?>
    </body>
</html>
