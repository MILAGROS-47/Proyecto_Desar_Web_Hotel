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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Reservar Habitacion</title>
        <style>
            body {
                background-image: url('../img/reserva/fondo.jpg');
                background-size: cover;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }

            .container {
                margin: auto;
                margin-top: 50px;
                width: 500px;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <h2>Reservar Habitacion</h2>
            <form id="formularioReserva" method="POST">
                <div class="form-group">
                    <label for="idHabitacion">ID de Habitacion:</label>
                    <input type="text" class="form-control" id="idHabitacion" name="idHabitacion" value="<?= $habitacion ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="numeroHabitacion">Numero de Habitacion:</label>
                    <input type="text" class="form-control" id="numeroHabitacion" name="numeroHabitacion" value="<?= $numero ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="idUsuario">ID de Usuario:</label>
                    <input type="text" class="form-control" id="idUsuario" name="idUsuario" required>
                </div>
                <div class="form-group">
                    <label for="tipoHabitacion">Tipo de Habitacion:</label>
                    <select class="form-control" id="tipoHabitacion" name="tipoHabitacion">
                        <option value="Individual">Individual</option>
                        <option value="Doble">Doble</option>
                        <option value="Triple">Triple</option>
                        <option value="Quead">Quead</option>
                        <option value="Queen">Queen</option>
                        <option value="King">King</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="FechaInicio">Fecha de Inicio:</label>
                    <input type="datetime-local" class="form-control" id="FechaInicio" name="FechaInicio" required>
                </div>
                <div class="form-group">
                    <label for="FechaSalida">Fecha de Salida:</label>
                    <input type="datetime-local" class="form-control" id="FechaSalida" name="FechaSalida" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="Reservado">Reservado</option>
                        <option value="Disponible">Disponible</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#formularioReserva').submit(function (e) {
                    event.preventDefault();

                    // Obtener los valores del formulario
                    var idHabitacion = $('#idHabitacion').val();
                    var idUsuario = $('#idUsuario').val();
                    var tipoHabitacion = $('#tipoHabitacion').val();
                    var numeroHabitacion = $('#numeroHabitacion').val();
                    var FechaInicio = $('#FechaInicio').val();
                    var FechaSalida = $('#FechaSalida').val();
                    var estado = $('#estado').val();

                    // Enviar los datos al servidor mediante una solicitud AJAX
                    $.ajax({
                        url: '../php/reserva.php',
                        type: 'POST',
                        data: {idHabitacion: idHabitacion,
                            idUsuario: idUsuario,
                            tipoHabitacion: tipoHabitacion,
                            numeroHabitacion: numeroHabitacion,
                            FechaInicio: FechaInicio,
                            FechaSalida: FechaSalida,
                            estado: estado},
                        success: function (data) {
                            console.log("axasdsa" + data);
                            alert("Reserva realizada con éxito.");
                        }
                    });
                });
            });
        </script>
    </body>

</html>
