<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesar solicitud de registro
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $documento = $_POST['documento'];
  $nacimiento=$_POST['nacimiento'];
  $passwordUser = $_POST['password'];
  $idRol=1;

  // Realizar validaciones (puedes agregar más validaciones según tus necesidades)
  if (empty($nombre) || empty($apellido) || empty($correo)  || empty($telefono) || empty($documento) || empty($passwordUser)) {
    http_response_code(400);
    echo json_encode(array('error' => 'Todos los campos son requeridos.'));
    exit();
  }

  // Encriptar la contraseña
  $hashedPassword = password_hash($passwordUser, PASSWORD_DEFAULT);

  // Guardar usuario en la base de datos
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "dbhotel";

  // Crear una conexión a la base de datos
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar si hay errores en la conexión
  if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(array('error' => 'Error en la conexión a la base de datos.'));
    exit();
  }

  // Preparar la consulta SQL para insertar el usuario
  $stmt = $conn->prepare("INSERT INTO tb_usuario (idRol,nombres,apellidos, correo,telefono,nDocumento,fechaNacimiento, password) VALUES (?, ?, ?,?,?,?,?,?)");
  $stmt->bind_param("ssssssss", $idRol,$nombre, $apellido,$correo,$telefono,$documento,$nacimiento, $hashedPassword);

  // Ejecutar la consulta SQL
  if ($stmt->execute()) {
    // Éxito al guardar el usuario en la base de datos
    echo json_encode(array('success' => true));
  } else {
    // Error al guardar el usuario en la base de datos
    http_response_code(500);
    echo json_encode(array('error' => 'Error al guardar el usuario en la base de datos.'));
  }

  // Cerrar la conexión y liberar recursos
  $stmt->close();
  $conn->close();
}
?>
