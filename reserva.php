<?php

require_once('conexion.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos del formulario
    $idUsuario = $_POST['idUsuario'];
    $idHabitacion = $_POST['idHabitacion'];
    $tipoHabitacion = $_POST['tipoHabitacion'];
    $numeroHabitacion = $_POST['numeroHabitacion'];
    $FechaInicio = $_POST['FechaInicio'];
    $FechaSalida = $_POST['FechaSalida'];
    $estado = $_POST['estado'];
    //Realizar validacion
    if (empty($idHabitacion) || empty($idUsuario) || empty($tipoHabitacion) || empty($numeroHabitacion) || empty($FechaInicio) || empty($FechaSalida) || empty($estado)) {
        echo "Error: no lleno todos los campos";
    } else {
        //preparar la consulta SQL para insertar la reserva

        $sql = "INSERT INTO tb_reserva (idUsuario, idhabitacion, tipoHabitacion, numeroHabitacion, FechaInicio, FechaSalida, estado) "
                . "VALUES ('$idUsuario', '$idHabitacion', '$tipoHabitacion', '$numeroHabitacion', '$FechaInicio', '$FechaSalida', '$estado');";
        if ($con->query($sql) === true) {
            echo "Evento agregado correctamente";
        } else {
            //Error al guardar reserva 
            echo "Error al guardar reserva: " . $con->error;
        }
    }
}
// Cerrar la conexión
$con->close();
?>
