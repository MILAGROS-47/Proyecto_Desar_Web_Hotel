<?php
// Crear una conexión a la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "reserva_habitacion";
$con = new mysqli($servername, $username, $password, $dbname);
class Conectarse {
    private $cn = null;
    function conectar() {
        try {
            $this->cn = new PDO("mysql:host=localhost;dbname=reserva_habitacion", "root", "");
            $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->cn;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
?>
