<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Registro de Usuarios</title>
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
    <h1>Registro de Usuarios</h1>
    <form id="formularioRegistro">
      <div class="form-group">
        <label for="nombre">Nombres:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellidos:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
      </div>
      <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="text" class="form-control" id="correo" name="correo" required>
      </div>
      <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="form-group">
        <label for="documento">N° Documento:</label>
        <input type="text" class="form-control" id="documento" name="documento" required>
      </div>
      <div class="form-group">
        <label for="nacimiento">Fecha Nacimiento:</label>
        <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    
      <a href="index.php" class="btn btn-primary btn-primary-outline-success">Regresar</a>
    </form>
    <div id="mensaje"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#formularioRegistro').submit(function(event) {
      event.preventDefault();
  
      // Obtener datos del formulario
      var nombre = $('#nombre').val();
      var apellido = $('#apellido').val();
      var correo = $('#correo').val();
      var telefono = $('#telefono').val();
      var documento = $('#documento').val();
      var nacimiento = $('#nacimiento').val();
      var password = $('#password').val();
  
      // Enviar solicitud al servidor
      $.ajax({
        url: 'api.php',
        type: 'POST',
        data: {
          nombre: nombre,
          apellido: apellido,
          correo: correo,
          telefono: telefono,
          documento: documento,
          nacimiento:nacimiento,
          password: password
        },
        dataType: 'json',
        success: function(response) {
          // Limpiar formulario
          $('#nombre').val('');
          $('#apellido').val('');
          $('#correo').val('');
          $('#telefono').val('');
          $('#documento').val('');
          $('#nacimiento').val('');
          $('#password').val('');
  
          // Mostrar mensaje de éxito
          $('#mensaje').removeClass('text-danger').addClass('text-success').text('Registro exitoso.');
        },
        error: function(xhr, status, error) {
          // Mostrar mensaje de error
          $('#mensaje').removeClass('text-success').addClass('text-danger').text(xhr.responseJSON.error);
        }
      });
    });
  });
  </script>
   <?php include("../html/mas.html"); ?>
</body>
</html>
